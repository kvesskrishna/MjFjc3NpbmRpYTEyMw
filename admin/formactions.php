<?php
session_start();
function createservice(){

if (isset($_POST['additem'])) {
	$filename  = $_FILES['uploadedfile']['name'];
	$filedata  = $_FILES['uploadedfile']['tmp_name'];
 	$handle    = fopen($filedata, "r");
 	$data      = fread($handle, filesize($filedata));
 	$POST_DATA = array(
   'service_image_data' => base64_encode($data),
   'service_category' => $_POST['service_category'],
   'service_name' => $_POST['service_name'],
   'about' => $_POST['about'],
   'key_offerings' => $_POST['key_offerings'],
   'implementation_services' => $_POST['implementation_services'],
   'service_image_name' => $filename
 );
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.21cssindia.com/webservices/services?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:services.php');
}

}

function updateservice(){

if (isset($_POST['edititem'])) {
		
 	
 	$POST_DATA = array(
  'service_category' => $_POST['service_category'],
   'service_name' => $_POST['service_name'],
   'about' => $_POST['about'],
   'key_offerings' => $_POST['key_offerings'],
   'implementation_services' => $_POST['implementation_services']
  );
 	//var_dump($POST_DATA);
 	$ch = curl_init();
 	curl_setopt($ch, CURLOPT_URL, 'http://www.21cssindia.com/webservices/services?api_key=160e64f13691a2f59d34492dc238f98e&service_id='.$_POST['service_id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($POST_DATA));
$response = curl_exec($ch);
 $result = json_decode($response,TRUE);

 $_SESSION['message'] = $result['status_message'];
	header('Location:services.php');
}
}

function createnews(){

if (isset($_POST['additem'])) {
 	$POST_DATA = array(
   'news_heading' => $_POST['news_heading'],
   'news_content' => $_POST['news_content'],
   'news_date' => $_POST['news_date']
 );
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.21cssindia.com/webservices/news?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
//var_dump($result);
	header('Location:news.php');
}

}

function updatenews(){

if (isset($_POST['edititem'])) {
		
 	
$POST_DATA = array(
   'news_heading' => $_POST['news_heading'],
   'news_content' => $_POST['news_content'],
   'news_date' => $_POST['news_date'],
   'news_status' => $_POST['news_status']
 );
 	//var_dump($POST_DATA);
 	$ch = curl_init();
 	curl_setopt($ch, CURLOPT_URL, 'http://www.21cssindia.com/webservices/news?api_key=160e64f13691a2f59d34492dc238f98e&news_id='.$_POST['news_id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($POST_DATA));
$response = curl_exec($ch);
 $result = json_decode($response,TRUE);

 $_SESSION['message'] = $result['status_message'];
	header('Location:news.php');
}
}

function createcareer(){

if (isset($_POST['additem'])) {
 	$POST_DATA = array(
   'career_title' => $_POST['career_title'],
   'career_experience' => $_POST['career_experience'],
   'career_location' => $_POST['career_location'],
   'career_department' => $_POST['career_department'],
   'career_description' => $_POST['career_description']
 );
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.21cssindia.com/webservices/careers?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
//var_dump($result);
	header('Location:careers.php');
}

}

function updatecareer(){

if (isset($_POST['edititem'])) {
		
 	
$POST_DATA = array(
   'career_title' => $_POST['career_title'],
   'career_department' => $_POST['career_department'],
   'career_description' => $_POST['career_description'],
   'career_location' => $_POST['career_location'],
   'career_experience' => $_POST['career_experience'],
   'career_status' => $_POST['career_status']
 );
 	//var_dump($POST_DATA);
 	$ch = curl_init();
 	curl_setopt($ch, CURLOPT_URL, 'http://www.21cssindia.com/webservices/careers?api_key=160e64f13691a2f59d34492dc238f98e&career_id='.$_POST['career_id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($POST_DATA));
$response = curl_exec($ch);
 $result = json_decode($response,TRUE);

 $_SESSION['message'] = $result['status_message'];
	header('Location:careers.php');
}
}

$action = $_POST['action'];

switch ($action) {
	case 'createservice':
		# code...
	createservice();
		break;
	case 'updateservice':
		# code...
	updateservice();
		break;
	case 'createnews':
		# code...
	createnews();
		break;
	case 'updatenews':
		# code...
	updatenews();
		break;
		case 'updatecareer':
		# code...
	updatecareer();
		break;
		case 'createcareer':
		# code...
	createcareer();
		break;
	
	default:
		# code...
		break;
}
?>