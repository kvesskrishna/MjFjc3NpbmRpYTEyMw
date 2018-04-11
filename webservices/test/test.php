<?php
require_once('../api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE GET REQUEST START
//-----------------------
function get_profiles($profile_id=0)
	{
		global $mysqli;

		$query="SELECT * FROM test_profiles";
		if($profile_id != 0)
		{
			$query.=" WHERE profile_id=".$profile_id." LIMIT 1";
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

switch ($verb) {
	case 'GET':
		if(!empty($_GET["profile_id"]))
			{
				$profile_id=intval($_GET["profile_id"]);
				get_profiles($profile_id);
			}
			else
			{
				get_profiles();
			}
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>