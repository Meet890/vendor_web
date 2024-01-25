<?php
require_once "loginphp.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
  
    <link rel="stylesheet" href="reg.css">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

</head>

<body>
    <div class="bg-img"></div>
    <div id="main-container">
        <div class="form-container">
            <div class="login-form">
                <div class="image">
                    
                </div>
                <div class="title">LOGIN</div>

                <form class="form">
                    <div class="field">
                        <input type="Username" id="Username" placeholder=" " required autocomplete="on">
                        <label for="Username">Username</label>
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>

                    <div class="field">
                    <img src="eye-close.png" onclick="pass3()" class="pass-icon" id="pass-icon3">
                        <input type="password" id="pass" required placeholder=" " autocomplete="on">
                        <label for="create-pass">Password</label>
                        <!-- <i class="fa fa-lock"></i> -->
                    </div>
                        <br>
                   

                    <button class="login-btn">Login</button>
                </form>
                
                <div class="bottom">
                    <div class="other">
                        <div class="or">
                            <span></span>Or<span></span>
                        </div>

                        
                    </div>
                    <div>Don't have an Account?&nbsp;<a class="signup-switch" href="reg.php">Sign up</a></div>
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
        </script>

</body>
</html>
