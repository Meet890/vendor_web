<?php
     require 'config.php';

         $id = $_GET['id'];
        
         echo $id;
        
        $sql ="DELETE FROM registration WHERE reg_id='$id'";
        $res =mysqli_query($conn , $sql );
        if ($res == true) {
            header("Location: register.php");
        }



    ?>