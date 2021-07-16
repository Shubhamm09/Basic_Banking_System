<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "star_bank";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if(mysqli_connect_error()){
		die("Connection Failed : ".mysqli_connect_error());
	}

?>