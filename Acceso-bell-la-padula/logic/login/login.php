<!DOCTYPE html>
<html lang="en">
    <link rel="shortcut icon" href="../../img/sat.png">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About StelStar.com, Learn about us! Gallery">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Sebastian Ortiz">
    <meta name=”robots” content=”noindex, nofollow”>
    <meta name=”robots” content=”index, follow”>
    
    <title>Login</title>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../../main.js"></script>

     <!-- FONT AWESOME-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
     <!--FONT OSWALD-->
     <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
     <!--CUSTOM CSS -->
     <link rel="stylesheet" href="../../CSS/style.css">


</head>


<body>
  
    <!-- LOGIN -->

  <section class="form-login"> 
  <h4>Login</h4>
  <?php
  require '../conexion.php';

  if(isset($_POST['submit'])){
    $user=$conexion->real_escape_string($_POST['user']);
    $pass=$conexion->real_escape_string($_POST['pass']);
  }
  ?>
  <?php
  include ("validar.php")
  ?>
  <!-- ACTION loguear.php -->
  <form  action="redireccion.php" method="POST">
  LOGIN:<input class="controls" type="text" name="user"  placeholder="Insert your username" value="<?php 
  if(isset($user)) echo $user?>"><br>
  PASSWORD:<input class="controls" type="password" name="pass"  placeholder="Insert your Password "value="<?php 
  if(isset($pass)) echo $pass?>"><br>

  <button class="botons" type="submit" name="submit"> ENTER </button>

  </form>
  <p> Aun no te has registrado? <a href="../signup/register.php"> Sign in </a> </p>
  <p> Go back <a href="../../index.php"> Here </a> </p>
  

         
    
</body>
</html>