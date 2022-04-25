<?php 
    session_start();
    require 'dbconnection.php';
    $_SESSION['username']='';
    unset($_SESSION['username']); 
    session_unset();
    session_destroy();
    header('Location : login.php');
?>