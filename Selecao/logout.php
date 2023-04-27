<?php  

session_start(); //to ensure you are using same session
unset($_SESSION["id"]);
header('location:login.php');
?>