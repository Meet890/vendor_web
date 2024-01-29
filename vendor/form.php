<?php

include('script.php');
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
  </style>
</head>
<body>

<div class="container-fluid">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">Create a New Account</h4>
      
<p class="text-success text-center"><?php echo $valid; ?></p> <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


        <!--//first name//-->
        <div class="form-group">
           <label for="email">First Name</label>
               <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="<?php echo $set_firstName;?>">
               <p class="err-msg">
                <?php if($fnameErr!=1){ echo $fnameErr; }?>
               </p>
        </div>

        <!--//last name//-->
        <div class="form-group">
           <label for="email">Last Name</label>
               <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" value="<?php echo $set_lastName;?>">
               <p class="err-msg">
                <?php if($lnameErr!=1){ echo $lnameErr; }?>
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
        
 
        <button type="submit" class="btn btn-danger" value="Register" name="register">Register Now</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>

</body>


</html>