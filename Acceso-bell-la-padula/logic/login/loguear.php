<?php

include("../conexion.php");
$con = connection();
session_start();


//$conexion = conexion();

/* METODO INSEGURO */ 

/*
$user = $_POST['user'];
$pass = $_POST['pass'];
*/

/* METODO SEGURO */

$user=$con->real_escape_string($_POST['user']);
$pass=$con->real_escape_string($_POST['pass']);


/*

$q = "SELECT COUNT(*) as contar from users where user = '$user' and pass = '$pass' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar'] >0){
    $_SESSION['user'] = $user;
    header("location: logged.php");
    
}else{
    echo "<h2> Datos incorrectos, <a href='login.php'> SALIR </a> </h2>";
}

?>
*/

$sql= "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

// sentencia de injeccion sql

//SELECT * FROM  users WHERE user = 'OR'1'='1 and password = 'OR'1'='1

$result=mysqli_query($con,$sql);

if(!empty($result) AND mysqli_num_rows($result) > 0){
    $_SESSION['user']= $user;

    header('location: logged.php');

}else{
    
    echo "password or user incorrects";
}

?>


