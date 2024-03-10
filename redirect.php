<?php
session_start();
$id= $_GET["id"];
// echo $id;
$_SESSION["vid"] =$id;
echo $_SESSION["vid"];
header("Location:client/login/login.php");

?>