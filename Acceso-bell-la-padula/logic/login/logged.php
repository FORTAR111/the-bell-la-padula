<?php
session_start(); 

error_reporting(0);
$varsesion = $_SESSION['user'];

if ($varsesion == null || $varsesion = '') {
	echo "Usted no tiene autorizacion\n";
	echo "Click <a href='salir.php'> Here </a> to exit\n";
	die();
}

$user = $_SESSION['user'];



?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About StelStar.com, Learn about us! Gallery">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Sebastian Ortiz">

	<title>Home</title>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../../main.js"></script>

     <!-- FONT AWESOME-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
     <!--FONT OSWALD-->
     <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
     <!--CUSTOM CSS -->
     <link rel="stylesheet" href="../../css/estilos.css">

</head>
<body>

<header>
        <div class="container2"> 

                <MARQUEE DIRECTION=right scrolldelay=2 ><p>Welcome <?php 
				echo $_SESSION['user'];
				?><p></MARQUEE>
        
            <nav class="menu">
                <ul>
                    <li><img src="../../img/tierra.gif" alt="Logo" class="logo"></li>
                    <li>
                        <a href="../../index.php">Home</a></li>
                    <li>
                        <a href="../../sites/products.html">Products</a>
                        <ul class="menu-vertical">
                            <!-- <li><a href="#">Html</a></li>
                            <li><a href="#">Css</a></li>
                            <li><a href="#">Java</a></li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="../../sites/services.html">Services</a>
                        <ul class="menu-vertical">
                            <!-- <li><a href="#">Mensual</a></li>
                            <li><a href="#">Anual</a></li> -->
                            </ul>
                    </li>
                    <li>
                      <a href="../../sites/aboutus.html">About Us</a>
                      <ul class="menu-vertical">
                       <li><a href="../../sites/gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="../../sites/contact.html">Contact</a></li>
                    <li>
                        <a href="../../sites/login.php">Login</a>
                        <ul class="menu-vertical">
                            <!-- <li><a href="#">Mensual</a></li>
                            <li><a href="#">Anual</a></li> -->
                            </ul>
                    </li>
					<li class="cs"><?php echo "<a href='salir.php'> Exit</a>"?></li>
                </ul>
            </nav>
        </div>
    </header>
	
</body>
</html>
