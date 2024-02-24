<?php
require 'config.php';
    $id = $_GET['id'];
    $sql = "delete FROM gallery WHERE g_id = $id";

    if(mysqli_query($conn,$sql)){;
        header("location: gallery.php");
    }
    else{
        echo mysqli_error($conn);
    }

?>