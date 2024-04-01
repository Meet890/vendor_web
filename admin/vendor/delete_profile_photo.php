<?php
require 'config.php';
    $id = $_GET['id'];
    $sql = "UPDATE vendor SET v_photo='' WHERE v_id=$id";

    if(mysqli_query($conn,$sql)){;
        header("location: gallery.php");
    }
    else{
        echo mysqli_error($conn);
    }

?>