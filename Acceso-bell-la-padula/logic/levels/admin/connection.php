<?php

	function connection(){
		$user = "root";
		$pass = "";
		$server = "localhost";
		$database = "users_crud_php2";
	
		$connect=mysqli_connect($server, $user, $pass, $database);
	
		mysqli_select_db($connect, $database);
	
		return $connect;
	
	}
	
	
?>