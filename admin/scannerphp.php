<?php
    // Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page

// Include config file
require_once "config.php";
$idErr=$tra_id=$username='';

$username = $_SESSION["test_username"];

$number="/^[0-9]{12}/";
if(isset($_POST["submit"]))
{
    $tra_id =$_POST["tra_id"];
if(empty($tra_id)){
    $idErr="transection id  is Required"; 
 }
 else if (!preg_match($number,$tra_id)) {
    $idErr="Enter 12 digit";
 }
 else{
    $idErr=true;
 }

if($idErr==true) 
{
    
    
    
    
    $sql = "UPDATE registration SET reg_tra_id ='$tra_id'  WHERE reg_username= '$username';";
    
    if($result= mysqli_query($conn, $sql))
    {
        header("location: login.php");
    }
    else
    {
        echo mysqli_error($conn);
    }
}
else {
    echo "id error";
}

}




?>