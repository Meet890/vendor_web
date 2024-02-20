<?php
    require "../config.php";

       
            $username =$_SESSION["username"];  //session username
     if(isset( $_POST['submit'])){
      $text = $_POST['about'];
      echo  $text;
      // $sql = "UPDATE vendor SET v_discription = '$text' WHERE v_username ='$username' ";
      // if (mysqli_query($conn, $sql)) {
      //    echo "<script>alert('update successfully');</script>";
      //    // header('Location: about.php');
      // }
      // else{
      //    echo "Oops! Something went wrong. Please try again later." .mysqli_error($conn);
      // }
   }
  
?>