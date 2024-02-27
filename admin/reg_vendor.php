<?php

include('reg_vendor_php.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Form Validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--BS 5 css link-->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--BS 5 js link-->
    <script src="../js/bootstrap.min.js"></script>
  <!--bootstrap4 library linked-->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 -->


  <style>
    /* .container-fluid{
      border:1px solid black;
      
    } */

     /* Add some basic styling for better visibility */
     body, html {
height: 100%;
margin: 0;
font-family: Arial, Helvetica, sans-serif;
background-image: url("ss.png");
background-size: fill;
background-position: center;
background-repeat: no-repeat;
background-color: rgba(0,0,0, 1);

}
     .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 150px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 8px;
            z-index: 1;
        }

        .dropdown-content label {
            display: block;
            margin-bottom: 8px;
        }
        P{
          color:red;
        }
        .row{
          background: linear-gradient(180deg,rgba(0,0,0,.8),rgba(0,0,0,.4),rgba(0,0,0,.8));
        }
        .pass-icon{
          position: absolute;
          right: 18px;
          width: 23px;
          cursor: pointer;
          bottom: 438px;
    }
    .pass-icon2{
          position: absolute;
          right: 18px;
          width: 23px;
          cursor: pointer;
          bottom: 361px;
    }

    
  </style>
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
        <img src="eye-close.png" onclick="pass3()" class="pass-icon" id="pass-icon3">
            <label for="pwd">Password:</label>
            <input type="password"  id="pass" class="form-control"  placeholder="Enter password" name="password" >
            
            <p class="err-msg">
                <?php if($passErr!=1){ echo $passErr; } ?>
            </p>
        </div>

        <!--//Confirm Password//-->
        <div class="form-group">
        <img src="eye-close.png" onclick="pass2()" class="pass-icon2" id="pass-icon1">
            <label for="pwd">Confirm Password:</label>
            <input type="password" id="password" class="form-control" placeholder="Enter Confirm password" name="cpassword">
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
        <button type="submit" class="btn btn-danger my-1" value="Register" name="register">Register Now</button>
        </div>
        <hr>
        <div>Already have an Account?&nbsp;<a class="signup-switch" href="reg_vendor.php">Login</a></div>
      </form>
    </div>
   </div>
 
 </div>
  
</div>
<script>
        var c;
    function pass3()
    {
        if(c==1)
        {
            document.getElementById('pass').type='password';
            document.getElementById('pass-icon3').src='eye-close.png';
            c=0;
        }
        else
        {
            document.getElementById('pass').type='text';
            document.getElementById('pass-icon3').src='eye-open.png';
            c=1;
            
        }
    }
    var b;
    function pass2()
    {
        if(b==1)
        {
            document.getElementById('password').type='password';
            document.getElementById('pass-icon1').src='eye-close.png';
            b=0;
        }
        else
        {
            document.getElementById('password').type='text';
            document.getElementById('pass-icon1').src='eye-open.png';
            b=1;
            
        }
    }

</script>    

</body>


</html>