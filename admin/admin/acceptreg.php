<?php
require 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM registration WHERE reg_id =$id";
    $query = mysqli_query($conn, $sql);
     if($query){
        while ($row=mysqli_fetch_array($query)) { 
            $set_id= $row['reg_id '];
            $set_name= $row['reg_name'];
            $set_username= $row['reg_username '];
            $set_pass= $row['reg_pass'];
            $set_PhoneNo= $row['reg_phone '];
            $set_email= $row['reg_email '];
            $set_add= $row['reg_add'];
            $set_Gender= $row['reg_gen'];
            $set_ComName= $row['reg_com'];
            $set_ComName= $row['reg_tra_id '];
            $set_ComName= $row['reg_accept'];

            
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container-fluid">
 <div class="row">
   <div class="col-1 col-sm-3 col-lg-4 col-md-3">
   </div>
   <div class="col-10 col-sm-6 col-lg-4 col-md-6 card mt-4 " style="margin-bottom: 100px;">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center mt-2">Create a New Account</h4>
      
<p class="text-success text-center"><?php echo $valid; ?></p> <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


        <!--//first name//-->
        <div class="form-group">
           <label>Name</label>
               <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $set_Name;?>">
               <p class="err-msg">
                <?php if($nameErr!=1){ echo $nameErr; }?>
               </p>
        </div>

        <!--//last name//-->
        <div class="form-group">
           <label >username</label>
               <input type="text" class="form-control" placeholder="Enter username" name="username" value="<?php echo $set_username;?>">
               <p class="err-msg">
                <?php if($usernameErr!=1){ echo $usernameErr; }?>
               </p>
        </div>

        <!--//Phone no//-->
        <div class="form-group">
            <label for="email">Phone no</label>
                <input type="text" class="form-control" placeholder="Enter Phone no" name="Phone_no" value="<?php echo $set_PhoneNo;?>">
                <p class="err-msg"> 
                 <?php if($phoneErr!=1){ echo $phoneErr; } ?>
                </p>
        </div>
        
        <!--// Email//-->
        <div class="form-group">
            <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $set_email;?>">
              <p class="err-msg">
                <?php if($emailErr!=1){ echo $emailErr; } ?>
              </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control"  placeholder="Enter password" name="password">
            <p class="err-msg">
                <?php if($passErr!=1){ echo $passErr; } ?>
            </p>
        </div>

        <!--//Confirm Password//-->
        <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" placeholder="Enter Confirm password" name="cpassword">
            <p class="err-msg">
              <?php if($cpassErr!=1){ echo $cpassErr; } ?>
            </p>
        </div>

        <!-- Address -->
        <div class="form-group">
        <label for="email">Address</label>
               <input type="text" class="form-control" placeholder="Enter Address" name="Address" value="<?php echo $set_add;?>">
               <p class="err-msg">
                <?php if($AddErr!=1){ echo $AddErr; }?>
               </p>
        </div>

        <!-- Gender -->
        <div class="form-group">
           <label for="email">Gender</label>
           <select class="form-control" placeholder="Select Gender" name="v_gender" value="<?php echo $set_Gender;?>">
              <option selected disabled value=""></option>
				      <option value="m">Male</option>
				      <option value="f">Female</option>
            </select>
               <p class="err-msg">
                <?php if($GenErr!=1){ echo $GenErr; }?>
               </p>
        </div>

        <!--//compony name//-->
        <div class="form-group">
           <label for="email">Compony Name</label>
               <input type="text" class="form-control" placeholder="Enter Compony Name" name="compony_name" value="<?php echo $set_ComName;?>">
               <p class="err-msg">
                <?php if($cnameErr!=1){ echo $cnameErr; }?>
               </p>
        </div>
        
        <div class="col-12">
        <button type="submit" class="btn btn-danger my-1" value="Register" name="register">Add</button>
        <button type="submit" class="btn btn-danger my-1" value="Register" name="register">Cancle</button>
        </div>
      </form>
    </div>
   </div>
 
 </div>
  
</div>

</body>
</html>