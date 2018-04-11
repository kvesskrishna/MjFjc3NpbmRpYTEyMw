<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_career()
	{
		global $mysqli;
		$career_title = mysqli_real_escape_string($mysqli,$_POST['career_title']);
		$career_department = mysqli_real_escape_string($mysqli,$_POST['career_department']);
		$career_location = mysqli_real_escape_string($mysqli,$_POST['career_location']);
		$career_experience = mysqli_real_escape_string($mysqli,$_POST['career_experience']);
		$career_description = mysqli_real_escape_string($mysqli,$_POST['career_description']);

		$query = "INSERT INTO 21css_careers (career_title,career_department,career_location,career_experience,career_description) VALUES ('{$career_title}', '{$career_department}', '{$career_location}', '{$career_experience}', '{$career_description}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Post Added Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Post Adding Failed.',
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
function get_careers($career_id=0)
	{
		global $mysqli;

		$query="SELECT * FROM 21css_careers ORDER BY career_created desc";
		if($career_id != 0)
		{
			$query="SELECT * FROM 21css_careers WHERE career_id=".$career_id." LIMIT 1";
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
function update_careers($career_id)
{
	global $mysqli;
	parse_str(file_get_contents("php://input"),$post_vars);
		$career_title = mysqli_real_escape_string($mysqli,$post_vars['career_title']);
		$career_department = mysqli_real_escape_string($mysqli,$post_vars['career_department']);
		$career_location = mysqli_real_escape_string($mysqli,$post_vars['career_location']);
		$career_experience = mysqli_real_escape_string($mysqli,$post_vars['career_experience']);
		$career_description = mysqli_real_escape_string($mysqli,$post_vars['career_description']);
		$career_status = mysqli_real_escape_string($mysqli,$post_vars['career_status']);

		$query="UPDATE 21css_careers SET career_title='{$career_title}', career_department='{$career_department}',career_location='{$career_location}',career_description='{$career_description}', career_status='{$career_status}', career_modified=now() WHERE career_id=$career_id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Post Updated Successfully.',
				'query'=>$query
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Post Update Failed.',
				'query'=>$query
			);
		}


	header('Content-Type: application/json');
	echo json_encode($response, JSON_UNESCAPED_SLASHES);
}
//-----------------------
//HANDLE PUT REQUEST END


//HANDLE DELETE REQUEST START
//-----------------------
function delete_news($news_id)
	{
		global $mysqli;
		$query="DELETE FROM 21css_news WHERE news_id=".$news_id;
		if($mysqli->query($query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'News Deleted Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'News Deletion Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}

//-----------------------
//HANDLE DELETE REQUEST END

switch ($verb) {
	case 'GET':
		if(!empty($_GET["career_id"]))
			{
				$career_id=intval($_GET["career_id"]);
				get_careers($career_id);
			}
			else
			{
				get_careers();
			}
		break;
	case 'POST':
		insert_career();
		break;
	case 'PUT':
		$career_id=intval($_GET["career_id"]);
		update_careers($career_id);
		break;
	case 'DELETE':
		$career_id=intval($_GET["career_id"]);
		delete_career($career_id);
		break;
	default:
		http_response_code(405);
		break;
}

}
?>