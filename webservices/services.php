<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_service()
	{
		global $mysqli;
		$encoded_file = $_POST['service_image_data'];
		$decoded_file = base64_decode($encoded_file);
		$service_image = "../img/services/".time().$_POST['service_image_name'];
		$image_path = "http://www.21cssindia.com".substr($service_image, 2);
		file_put_contents($service_image, $decoded_file);
		$service_category = mysqli_real_escape_string($mysqli,$_POST['service_category']);
		$service_name = mysqli_real_escape_string($mysqli,ucwords($_POST['service_name']));
		$about = mysqli_real_escape_string($mysqli,$_POST['about']);
		$key_offerings = mysqli_real_escape_string($mysqli,$_POST['key_offerings']);
		$implementation_services = mysqli_real_escape_string($mysqli,$_POST['implementation_services']);
		$query = "INSERT INTO 21css_services (service_category, service_name, about, key_offerings, implementation_services, service_image) VALUES ('{$service_category}', '{$service_name}', '{$about}', '{$key_offerings}', '{$implementation_services}', '{$image_path}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Service Added Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Service Adding Failed.',
				'query' => $query,
				'error' => $mysqli->error
			);
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}
//-----------------------
//HANDLE POST REQUEST END


//HANDLE GET REQUEST START
//-----------------------
function get_services($service_id=0)
	{
		global $mysqli;

		$query="SELECT * FROM 21css_services";
		if($service_id != 0)
		{
			$query.=" WHERE service_id=".$service_id." LIMIT 1";
		}
		$result=$mysqli->query($query);
		while($row=$result->fetch_assoc())
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);

	}
//-----------------------
//HANDLE GET REQUEST END





//HANDLE PUT REQUEST START
//-----------------------
function update_service($service_id)
{
	global $mysqli;
	$query_existing="SELECT * FROM 21css_services WHERE service_id=$service_id";
	if ($mysqli->query($query_existing)) {
		# code...
		$result_existing=$mysqli->query($query_existing);
		while ($row_existing=$result_existing->fetch_assoc()) {
			# code...
			$service_category=$row_existing['service_category'];
			$service_name=$row_existing['service_name'];
			$about=$row_existing['about'];
			$key_offerings=$row_existing['key_offerings'];
			$implementation_services=$row_existing['implementation_services'];
			$service_status=$row_existing['service_status'];
			$service_modified=$row_existing['service_modified'];
		}
parse_str(file_get_contents("php://input"),$post_vars);
		if(!empty($post_vars['service_category'])) $service_category=mysqli_real_escape_string($mysqli,$post_vars["service_category"]);
		if(!empty($post_vars['service_name'])) $service_name=mysqli_real_escape_string($mysqli,$post_vars["service_name"]);
		if(!empty($post_vars['about'])) $about=mysqli_real_escape_string($mysqli,$post_vars["about"]);
		if(!empty($post_vars['key_offerings'])) $key_offerings=mysqli_real_escape_string($mysqli,$post_vars["key_offerings"]);
		if(!empty($post_vars['implementation_services'])) $implementation_services=mysqli_real_escape_string($mysqli,$post_vars["implementation_services"]);
		if(!empty($post_vars['service_status'])) $service_status=$post_vars["service_status"];

		$query="UPDATE 21css_services SET service_category='{$service_category}', service_name='{$service_name}',about='{$about}',key_offerings='{$key_offerings}',implementation_services='{$implementation_services}',service_status='{$service_status}', service_modified=now() WHERE service_id=$service_id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Service Update Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Service Update Failed.'
			);
		}

	}
	header('Content-Type: application/json');
	echo json_encode($response, JSON_UNESCAPED_SLASHES);
}
//-----------------------
//HANDLE PUT REQUEST END


//HANDLE DELETE REQUEST START
//-----------------------
function delete_service($service_id)
	{
		global $mysqli;
		$query="DELETE FROM 21css_services WHERE service_id=".$service_id;
		if($mysqli->query($query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Service Deleted Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Service Deletion Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}

//-----------------------
//HANDLE DELETE REQUEST END

switch ($verb) {
	case 'GET':
		if(!empty($_GET["service_id"]))
			{
				$service_id=intval($_GET["service_id"]);
				get_services($service_id);
			}
			else
			{
				get_services();
			}
		break;
	case 'POST':
		insert_service();
		break;
	case 'PUT':
		$service_id=intval($_GET["service_id"]);
		update_service($service_id);
		break;
	case 'DELETE':
		$service_id=intval($_GET["service_id"]);
		delete_service($service_id);
		break;
	default:
		http_response_code(405);
		break;
}

}
?>