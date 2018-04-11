
<?php  
//error_reporting(0);
function register(){
	
	if($_POST['submit'] == 'register'){
	
	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	
	
	$api_url = 'http://www.21cssindia.com/services/api.php/registrations';
	
	$data = array(
        'reg_fullname' => $fullname,
        'reg_contact' => $mobile,
        'reg_email' => $email,
        'reg_password' => $password
			);   
	
	$data_string = json_encode($data);
	
		$ch = curl_init($api_url);  
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                            
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                          
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                       
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));       
		$result = curl_exec($ch);
		curl_close($ch);
		
			
	}
	
}

?>


