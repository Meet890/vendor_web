<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(isset($_SESSION["c_username"]) || $_SESSION["c_id"] == true){
    header("location: ./client/ ");
    exit;
}
else{
    header("location: ./client/login/login.php");
}
?>