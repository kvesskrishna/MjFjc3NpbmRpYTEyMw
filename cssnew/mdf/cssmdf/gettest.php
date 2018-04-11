<?php
$api_url = 'http://www.21cssindia.com/services/api.php/registrations?transform=1';
$ch = curl_init($api_url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                            
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                       
$result = curl_exec($ch);
//echo $result;
 $response= json_decode($result);
$users = $response->registrations;
foreach ($users as $user) 
  {
    echo $user->reg_email."<br>";
}
            ?>