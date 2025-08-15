<?php
require 'config.php';
session_start();
$username = $_SESSION["username"];
session_destroy();
// echo $username;
$uppercasePassword = "/(?=.*?[A-Z])/";
$lowercasePassword = "/(?=.*?[a-z])/";
$digitPassword = "/(?=.*?[0-9])/";
$spacesPassword = "/^$|\s+/";
$symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
$minEightPassword = "/.{8,}/";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $password = $_POST["password"];
if(empty($password)){
    echo '<script>  alert("Enter password"); </script>';
  } 
  elseif (!preg_match($uppercasePassword,$password) || !preg_match($lowercasePassword,$password) || !preg_match($digitPassword,$password) || !preg_match($symbolPassword,$password) || !preg_match($minEightPassword,$password) || preg_match($spacesPassword,$password)) {
    echo '<script>  alert("Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length"); </script>';
    // $password_err="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
  }
  else{
    // $password = $_POST["password"];
    $sql = "UPDATE  vendor SET v_password='$password' WHERE v_username = '$username'";
    if(mysqli_query($conn,$sql)){
        header("Location: login.php");
    }
  }

    
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
  
    <link rel="stylesheet" href="reg.css">    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="bg-img"></div>
    <div id="main-container">
        <div class="form-container">
            <div class="login-form">
                <div class="image">
                    
                </div>
                <div class="title">Enter New Password</div>
                <?php
                  if(!empty($login_err)){
                         echo '<div class="alert alert-danger">' . $login_err . '</div>';
                     }
                ?>
                <form class="form" action="" method="post">
                    

                    <div class="field">
                    <img src="eye-close.png" onclick="pass3()" class="pass-icon" id="pass-icon3">
                        <input type="password" id="pass" name="password" required placeholder=" " autocomplete="on">
                        <label for="create-pass">New Password</label>
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        <!-- <i class="fa fa-lock"></i> -->
                        
                    </div>
                    
                   
                     <br>
                    <button class="login-btn" name="submit">Login</button>
                </form>
                
                <div class="bottom">
                    <div class="other">
                        <div class="or">
                            <span></span>Or<span></span>
                        </div>

                        
                    </div>
                    <div>Don't have an Account?&nbsp;<a class="signup-switch" href="reg_vendor.php">Sign up</a></div>
                </div>
            </div>




            
        </div>
        <button type="button" class="btn-close bg-white m-2 background cencel" aria-label="Close" onclick="redirect()"></button>
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
    function redirect()
    {
        window.location.href = "../index.php";
    }
        </script>
        
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap.bundle.min.js"></script> 
</body>
</html>
