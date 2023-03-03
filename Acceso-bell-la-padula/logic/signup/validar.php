<?php

if(isset($_POST['submit'])){
    if(empty($user)){
        echo" <p class='error'> *add your user </p>";
    }else{
        if(strlen($user) > 10){
        echo" <p class='error'> *user too long </p>";
        }
    }
    if(empty($pass)){
        echo" <p class='error'> *add your password </p>";
}
}

?>