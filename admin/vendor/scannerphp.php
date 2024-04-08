
<?php
    // Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page

// Include config file
require_once "config.php";
$idErr=$tra_id=$username='';

$username = $_SESSION["username"];
$v_id= $_SESSION["v_id"];

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
    $sql ="SELECT * from vendor where v_id='$v_id' ";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) {
$reg_id=$row['reg_id'];
$_SESSION["reg_id"]=$reg_id;

   
    
$sql = "UPDATE vendor SET v_reg_time ='0000-00-00'  WHERE reg_id='$reg_id' ";
    
if($result= mysqli_query($conn, $sql)){
    
    $sql = "UPDATE registration SET reg_tra_id ='$tra_id',reg_accept='3'  WHERE reg_id='$reg_id' ";
    
    if($result= mysqli_query($conn, $sql))
    {
        header("location: emailRenewVendor.php");
        // header("location: login.php");
    }
    else
    {
        echo mysqli_error($conn);
    }
}
    }
}
else {
    echo "id error";
}

}




?>