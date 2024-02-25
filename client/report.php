<?php
require 'config.php';
session_start();

if(isset($_POST["Submit"]))
{
    // echo "<script> alert('3'); </script>";
    $v_id =$_GET["id"];
    $c_id =$_SESSION['c_id'];
    $t =$_POST["title"];
    $d =$_POST["dis"];
    $sql ="INSERT INTO report VALUES('','$c_id','$v_id','$t','$d')" ;
    $result =mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script> alert('done'); </script>";
        header("Location:profile.php?id=".$v_id);
    }
}


?>