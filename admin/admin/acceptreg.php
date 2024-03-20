<?php
require 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM registration WHERE reg_id =$id  " ;
    $query = mysqli_query($conn, $sql);
     if($query){
        while ($row=mysqli_fetch_array($query)) { 
            $set_id= $row['reg_id'];
            $set_name= $row['reg_name'];
            $set_username= $row['reg_username'];
            $set_password= $row['reg_pass'];
            $set_PhoneNo= $row['reg_phone'];
            $set_email= $row['reg_email'];
            $set_add= $row['reg_add'];
            if($row['reg_gen']=='m'){
            $set_Gender= "Male";
            }else{
                $set_Gender="Female";  
            }
            $set_ComName= $row['reg_com'];
            $set_traid= $row['reg_tra_id'];
            $set_accept= $row['reg_accept'];
            
           // echo $set_password;
            
    }
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['add']))
    {
   
           
            $set_name= $_POST['name'];
            $set_username= $_POST['username'];
            $set_PhoneNo= $_POST['Phone_no'];
            $set_email= $_POST['email'];
            $set_add= $_POST['Address'];
            if($_POST['gender']=='Male'){
                $set_Gender= "m";
                }else{
                    $set_Gender="f";  
                }
             
            $set_ComName= $_POST['comp'];
            $set_traid= $_POST['tra_id'];
            $set_accept= '1';

            // echo $set_name . "     ";
            // echo $set_username. "     "; 
            // echo $set_pass. "     ";
            // echo $set_PhoneNo. "     " ;
            // echo $set_email. "     "; 
            // echo $set_add. "     " ;
            // echo $set_Gender. "     "; 
            // echo $set_ComName. "     " ;
            // echo $set_traid. "     "; 
            // echo $set_accept. "     "; 
           
$sql ="UPDATE  registration SET reg_name='$set_name', reg_username='$set_username', reg_phone='$set_PhoneNo', reg_email='$set_email', reg_add='$set_add' ,reg_gen='$set_Gender', reg_com='$set_ComName', reg_tra_id='$set_traid', reg_accept='1'  WHERE reg_id=$id  ";
     $result = mysqli_query($conn,$sql);      
     if($result==1)
     {  $currentdate = date("Y-m-d");

        $set_days= $_POST['days'];
        // Add 30 days to the current date
        $newdate = date("Y-m-d", strtotime($currentdate . " +$set_days days"));
        $id = $_GET['id'];
        $sql = "INSERT INTO vendor(reg_id,v_name,v_username,v_password,v_email,v_phoneno,v_address,v_gender,v_comp,v_reg_end_time) VALUES ('$id','$set_name','$set_username','$set_password','$set_email','$set_PhoneNo','$set_add','$set_Gender','$set_ComName','$newdate')";
        $result = mysqli_query($conn,$sql);      
        if($result==1)
        {
            
          
            echo '<script>  alert("Added New vendor successfully!"); </script>'; 
            header('Location: Register.php');
        }


     }
     



   

    }
    elseif(isset($_POST['cancle'])){
        header("Location:register.php");

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="accetpreg.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!--BS 5 js link-->
    <script src="../../js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container-fluid">
 <div class="row">
   <div class="col-1 col-sm-3 col-lg-4 col-md-3">
   </div>
   <div class="col-10 col-sm-6 col-lg-4 col-md-6 card mt-4 " style="margin-bottom: 100px;">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center mt-2">Create a new account</h4>
  <form action="" method="post">


        <!--//first name//-->
        <div class="form-group">
           <label>Name</label>
               <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $set_name;?>">
              
        </div>

        <!--//Username//-->
        <div class="form-group">
           <label >Username</label>
               <input type="text" class="form-control" placeholder="Enter username" name="username" value="<?php echo $set_username;?>">
              
        </div>

        <!--//Phone no//-->
        <div class="form-group">
            <label>Phone no</label>
                <input type="text" class="form-control" placeholder="Enter Phone no" name="Phone_no" value="<?php echo $set_PhoneNo;?>">
                
        </div>
        
        <!--// Email//-->
        <div class="form-group">
            <label >Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $set_email;?>">
              
        </div>
        
        

       

        <!-- Address -->
        <div class="form-group">
        <label >Address</label>
               <input type="text" class="form-control" placeholder="Enter Address" name="Address" value="<?php echo $set_add;?>">
               
        </div>

        <!-- Gender -->
        <div class="form-group">
           <label >Gender</label>
           <input type="text" class="form-control" placeholder="Enter gender" name="gender" value="<?php echo $set_Gender;?>">
               
        </div>

        <!--//compony name//-->
        <div class="form-group">
           <label >Compony name</label>
               <input type="text" class="form-control" placeholder="Enter Compony Name" name="comp" value="<?php echo $set_ComName;?>">
               
        </div>
        <div class="form-group">
           <label >Transection id</label>
               <input type="text" class="form-control" placeholder="Enter Trasection id" name="tra_id" value="<?php echo $set_traid;?>">
               
        </div>
        <hr>
        <div class="form-group">
        <label >Select days for activation</label>
        <select class="form-control p-0 ps-1" name="days" >
              <option selected disabled ></option>
				      <option class="pb-2" value="30">1 Month</option>
				      <option class="pb-2" value="91">3 Month</option>
                      <option class="pb-2" value="182">6 Month</option>
                      <option class="pb-2" value="365">12 Month</option>

            </select>
        </div>
        
        <div class="col-12">
        <button type="submit" class="btn btn-danger my-2 "  name="add">Add</button>
        <button type="submit" class="btn btn-danger my-2 "  name="cancle">Cancle</button>
        </div>
      </form>
    </div>
   </div>
 
 </div>
  
</div>

</body>
</html>