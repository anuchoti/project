<?php
	$host = "localhost";
	$user = "sqluser";
	$pass = "sqlpass";
	$db = "realanu";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>