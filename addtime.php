<?php 
require "conn.php";
//change time to 1year
// $set_days= $_POST['days'];
        $set_days =500;
        $currentdate = date("Y-m-d");
        $newdate = date("Y-m-d", strtotime($currentdate . " +" . $set_days . " days"));
        // $id = $_GET['id'];
        $sql = "UPDATE vendor SET v_reg_end_time='$newdate' ,v_reg_time='$currentdate'  WHERE v_reg_end_time < '$currentdate' ";
    $result = mysql_query($sql);
    if ($result) {
        echo "Vendor registration time updated successfully.";
    } else {
        echo "Error updating vendor registration time: " . mysql_error();
    }
?>