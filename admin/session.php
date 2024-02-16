<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page

require 'config.php';
if(!isset($_SESSION["username"])){
	header("location:login.php");
}
?>