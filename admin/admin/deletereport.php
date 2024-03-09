<?php
     require 'config.php';

         $id = $_GET['id'];
        
         echo $id;
        
        $sql ="DELETE FROM report WHERE report_id='$id'";
        $res =mysqli_query($conn , $sql );
        if ($res == true) {
            header("Location: report.php");
        }



    ?>