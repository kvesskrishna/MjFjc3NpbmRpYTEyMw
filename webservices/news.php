<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_news()
	{
		global $mysqli;
		$news_heading = mysqli_real_escape_string($mysqli,$_POST['news_heading']);
		$news_content = mysqli_real_escape_string($mysqli,ucwords($_POST['news_content']));
		$news_date = mysqli_real_escape_string($mysqli,$_POST['news_date']);
		$query = "INSERT INTO 21css_news (news_heading, news_content, news_date) VALUES ('{$news_heading}', '{$news_content}', '{$news_date}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'News Added Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'News Adding Failed.',
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
function get_news($news_id=0)
	{
		global $mysqli;

		$query="SELECT * FROM 21css_news ORDER BY news_date desc";
		if($news_id != 0)
		{
			$query="SELECT * FROM 21css_news WHERE news_id=".$news_id." LIMIT 1";
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
function update_news($news_id)
{
	global $mysqli;
	parse_str(file_get_contents("php://input"),$post_vars);
		$news_content=mysqli_real_escape_string($mysqli,$post_vars["news_content"]);
		$news_heading=mysqli_real_escape_string($mysqli,$post_vars["news_heading"]);
		$news_date=mysqli_real_escape_string($mysqli,$post_vars["news_date"]);
		$news_status=mysqli_real_escape_string($mysqli,$post_vars["news_status"]);
		
		$query="UPDATE 21css_news SET news_heading='{$news_heading}', news_content='{$news_content}',news_date='{$news_date}',news_status='{$news_status}', news_modified=now() WHERE news_id=$news_id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'News Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'News Update Failed.'
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
		if(!empty($_GET["news_id"]))
			{
				$news_id=intval($_GET["news_id"]);
				get_news($news_id);
			}
			else
			{
				get_news();
			}
		break;
	case 'POST':
		insert_news();
		break;
	case 'PUT':
		$news_id=intval($_GET["news_id"]);
		update_news($news_id);
		break;
	case 'DELETE':
		$news_id=intval($_GET["news_id"]);
		delete_news($news_id);
		break;
	default:
		http_response_code(405);
		break;
}

}
?>