<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$dbhost= 'localhost';
$dbuser= 'root';
$dbpass= '';
$dbname= 'vendor';
/* Attempt to connect to MySQL database */
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?> 