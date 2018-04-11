<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','a21csabs_21cssin','root@21css','a21csabs_21cssindia');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>