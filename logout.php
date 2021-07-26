<?php 
session_start(); 
session_destroy();
header('location:index.php');
?>
<!--destroys the session and returns to home page -->