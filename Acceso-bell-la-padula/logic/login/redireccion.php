
<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

session_start();
$_SESSION['user']=$user;

include("../conexion.php");
$con = connection();

$sql="SELECT*FROM usuarios where user='$user' and pass='$pass'";
$query=mysqli_query($con,$sql);

$filas=mysqli_fetch_array($query);

if($filas['id_range']==1){ //administrador
    header("location:../levels/admin/admin.php");

}else
if($filas['id_range']==2){ //cliente
header("location:../levels/user/user.php");
}else
if($filas['id_range']==3){ //cliente
header("location:../levels/guest/guest.php");
}
else{
	echo "password or user incorrects";
    include("login.php");
    ?>
    <?php
}
mysqli_free_result($query);
mysqli_close($con);
?>
