<?php
     require 'config.php';

         $id = $_GET['id'];
        
         echo $id;
       
        $sql ="DELETE FROM admin_tbl WHERE a_id='$id'";
        $res =mysqli_query($conn , $sql );
        if ($res == true) {
            header("Location: add.php");
        }



    ?>