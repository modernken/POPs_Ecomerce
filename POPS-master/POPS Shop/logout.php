<?php 

session_start(); 

session_destroy(); 

echo "<script>alert('Successfully logged-out')</script>";

echo "<script>window.open('index.php','_self')</script>";


?>