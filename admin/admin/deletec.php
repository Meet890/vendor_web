<?php
     require 'config.php';

         $id = $_GET['id'];
        
         echo $id;
      
        $sql ="DELETE FROM client WHERE c_id='$id'";
        $res =mysqli_query($conn , $sql );
        if ($res == true) {
            header("Location: tables.php");
        }



    ?>