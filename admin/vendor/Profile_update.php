<?php
    $dbservername="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="vendor";
    $conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
    $id = $_SESSION["id"];
    $sql = "select * from vendor where v_id = '$id'";
    $result = mysqli_query($conn ,$sql);
    if($row = mysqli_fetch_assoc($result) )
    {
       
        $setemail = $row["v_email"];
        $setaddress =  $row["v_address"];
        $setphone = $row["v_photo"];
        

    }


 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $vname=$_POST['v_name'];

    $email=$_POST['v_email'];
    $address=$_POST['v_address'];
    $phone=$_POST['v_phoneno'];
    $gender=$_POST['v_gender'];
    $photo=$_POST['v_photo'];
    $IG=$_POST['v_iglink'];
    $FB=$_POST['v_fblink'];
    $select= "select * from vendor where v_id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update vendor set v_name='$fname',v_email='$email',v_address='$address',v_phoneno='$phone',v_gender='$gender', v_iglink='$IG',v_fblink='$FB' where id='$id'";
       $sql2=mysqli_query($conn,$update);
     if($sql2)
       { 
           /*Successful*/
           header('location:Dashboard.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>