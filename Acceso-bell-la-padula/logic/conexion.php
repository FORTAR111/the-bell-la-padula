<?php

	function connection(){
		$user = "root";
		$pass = "";
		$server = "localhost";
		$database = "rol";
	
		$connect=mysqli_connect($server, $user, $pass, $database);
	
		mysqli_select_db($connect, $database);
	
		return $connect;
	
	}
	
	
?>