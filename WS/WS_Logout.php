<?php 
Require("../connections/DAL.php");

session_start(); // Start the session

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Optionally, redirect the user to the homepage or login page
header("Location: ../index.php"); // or replace with your desired URL
exit();


?>