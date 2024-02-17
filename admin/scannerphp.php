<?php
    // Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["v_username"]) &&( $_SESSION["loggedin"] === true)){
    header("location: vendor/");
    exit;
}
// Include config file
require_once "config.php";

$tra_id = $_POST["tra_id"];
echo $tra_id ;

?>