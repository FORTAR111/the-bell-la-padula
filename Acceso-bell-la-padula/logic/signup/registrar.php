<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style type="text/css">
<!--
body{
    background-image: url(" ../../img/foto1.jpg") ;
    background-size: 100%; 
}

 h2{
  width: 800px;
  background-color: #24303c;
  padding: 50px;
  margin:auto;
  margin-bottom: 100px;
  margin-top: 100px;
  border-radius: 100px;
  font-family: 'Times New Roman', Times, serif;
  color: white;
  box-shadow: 0px 10px 100px white; 

}

a{
text-decoration: none;
color: white;
}

a:hover{
	color: red;
	text-decoration: underline;
	
}

-->
</style>
</head>
<body>

    
</body>

<?php

include("../conexion.php");
$con = connection();   

$name = $_POST['name'];
$user = $_POST['user'];
//$email = $_POST['email'];
$pass = $_POST['pass'];


$insertar = "INSERT INTO usuarios (name, user, pass) VALUES ('$name', '$user', '$pass')";

if($con -> query($insertar) === TRUE){
    echo "<h2> Datos Registrados correctamente, Click <a href='../login/login.php'>  AQUI  </a> Para acceder </h2>";
}
else{
	echo "Error al conectar";
}

$con -> close();

?>
</html>