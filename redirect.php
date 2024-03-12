<?php
session_start();
$id= $_GET["id"];
$_SESSION["vid"]=$id;

header("Location:client/login/login.php");

?>