<?php
/*receive post variables from form*/
$fullname=$_POST['fullname']="Full Name";
$contact=$_POST['contact']="12dds3456789";
$email=$_POST['email']="test@tesdst.sdtest";
$password=$_POST['password']="password";
/*receive post variables from form end*/
$api_url = 'http://www.21cssindia.com/services/api.php/registrations'; // api url
/*create data array*/
$data = array(
        'reg_fullname' => $fullname,
        'reg_contact' => $contact,
        'reg_email' => $email,
        'reg_password' => $password
);                   
/*create data array end*/
$data_string = json_encode($data); // convert to json and assign to variable                                                                                         
/*curl handle*/
$ch = curl_init($api_url);  
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                            
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                          
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                       
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));       
$result = curl_exec($ch);
curl_close($ch);
/*curl handle end*/
echo $result;   //result
?>