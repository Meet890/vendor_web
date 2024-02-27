<?php
require_once "loginphp.php";
// include "../header2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
  
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
                <div class="title">LOGIN AS VENDOR</div>
                <?php
                  if(!empty($login_err)){
                         echo '<div class="alert alert-danger">' . $login_err . '</div>';
                     }
                ?>
                <form class="form" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                    <div class="field">
                        <input type="Username" id="Username" name="username" placeholder=" " value="" required autocomplete="on">
                        <label for="Username">Username</label>
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>

                    <div class="field">
                    <img src="eye-close.png" onclick="pass3()" class="pass-icon" id="pass-icon3">
                        <input type="password" id="pass" name="password" required placeholder=" " autocomplete="on">
                        <label for="create-pass">Password</label>
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        <!-- <i class="fa fa-lock"></i> -->
                        
                    </div>
                    <div style="text-align:left;">Forgot Password ?&nbsp;<a class="signup-switch" href="forgotpass.php">Click here</a></div>
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
