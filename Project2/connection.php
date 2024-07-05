<?php 

$servername = 'localhost';
$username = 'root';
$password = 'root';
$db_name = "test_1";

$con = new mysqli($servername, $username, $password, $db_name );

if(!$con){
	echo"not connected".mysqli_connect_error($con);

}

