<!DOCTYPE html>
<html lang="en">
    <link rel="shortcut icon" href="../img/sat.png">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About StelStar.com, Learn about us! Gallery">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Sebastian Ortiz">
    <meta name=”robots” content=”noindex, nofollow”>
    <meta name=”robots” content=”index, follow”>
    
    <title>Register</title>
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
  
    
    <!--- FORM REGISTER -->


  <section class="form-register"> 
  <form action="registrar.php" method="POST">
  <h4>Register</h4>
  NAME:<input class="controls" type="text" name="name"  placeholder="Insert your name"><br> 
  LOGIN:<input class="controls" type="text" name="user"  placeholder="Insert your Login"><br>  
  <!--- EMAIL:<input class="controls" type="email" name="email"placeholder="Insert your email"><br> -->
  PASSWORD:<input class="controls" type="password" name="pass"  placeholder="Insert your password"> <br>    

  <p> Estoy de acuerdo con <a href="#"> Terminos y condiciones </a> </p>
  <button class="botons" type="sumbit"> <p>REGISTER </p> </button>
  <p><a href="../login/login.php">¿Already have account?</a></p>
  <p> Go back <a href="../../index.php"> Here </a> </p>
  </form>

</section>

        
    
</body>
</html>