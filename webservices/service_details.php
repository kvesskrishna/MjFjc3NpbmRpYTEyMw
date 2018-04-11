<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
//-----------------------
//HANDLE POST REQUEST END


//HANDLE GET REQUEST START
//-----------------------
function service_details($service_name)
	{
		global $mysqli;

		$query="SELECT * FROM 21css_services WHERE service_status='active'";
		if(!empty($service_name))
		{
			$query.=" AND service_name='".urldecode($service_name)."'";
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
//-----------------------
//HANDLE PUT REQUEST END
//HANDLE DELETE REQUEST START
//-----------------------
//-----------------------
//HANDLE DELETE REQUEST END

switch ($verb) {
	case 'GET':
		if(!empty($_GET["service_name"]))
			{
				$service_name=$_GET["service_name"];
				service_details($service_name);
			}
			else
			{
				service_details();
			}
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>