<?php
     require 'config.php';
         $id = $_GET['id'];
         $table = $_GET['table'];
         echo $id;
         echo $table;
        $sql ="DELETE FROM $table WHERE a_id='$id'";
        $res =mysqli_query($conn , $sql );
        if ($res == true) {
            header("Location: tables.php");
        }



    ?>