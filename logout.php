<?php
session_start(); 

$row="logout";
unset($_SESSION['user']);
session_destroy(); // destroy session
header("location:index.php?logout=".$row); 
?>

