<?php
require_once "registerphp.php"
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
           
            <div class="signup-form">
                <div class="title">Sign-up as client</div>
                <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                    <div class="field">
                        <input type="text" id="name" name="name" placeholder=" " required>
                        <label for="name">Name</label>
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        <!-- <i class="fa fa-user"></i> -->
                    </div>

                    <div class="field">
                    <label for="city" class="city"> city </label>
                        <select name="select" id="" >
                            
                            <option value="Bhuj">Bhuj</option>
                            <option value="Gandhidham">Gandhidham</option>
                            <option value="Anjar">Anjar</option>
                            <option value="Mandvi">Mandvi</option>
                            <option value="Mundra">Mundra</option>
                            <option value="Naliya">Naliya</option>
                            <option value="Lakhpat">Lakhpat</option>
                            <option value="Khavda">Khavda</option>
                            
                        </select>
                        
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>

                    <div class="field email">
                        <input type="email" name="email" id="email" placeholder=" " required autocomplete="on">
                        <label for="email">Email</label>
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>
                    <div class="field">
                        <input type="username" name="username" id="username" placeholder=" " required autocomplete="on">
                        <label for="username">Username</label>
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>

                    <div class="field">
                        <img src="eye-close.png" onclick="pass2()" class="pass-icon" id="pass-icon1">
                        <input type="password" name="password" id="password" required placeholder=" " autocomplete="off">
                        <label for="password">Password</label>
                        
                        <!-- <i class="fa fa-lock"></i> -->
                    </div>

                    <div class="field">
                    <img src="eye-close.png" onclick="pass()" class="pass-icon" id="pass-icon2">
                        <input type="password" name="confirm_password" id="confirm-pass" required placeholder=" " autocomplete="off">
                        
                        <label for="confirm-pass">Confirm Password</label>
                       
                        <!-- <i class="fa fa-lock"></i> -->
                    </div>

                    <section>
                        <label for="agree"><input type="checkbox" name="checkbox" id="agree">I agree to all&nbsp;<a href="#">Terms &
                                Conditions</a></label>
                    </section>
                    <button class="signup-btn">Register</button>
                </form>

                <div class="bottom">
                    <span>Already Registered?&nbsp;<a class="login-switch" href="login.php">Login</a></span>
                </div>
            </div>
        </div>
    </div>
    <script>
        
const loginForm = document.querySelector('.login-form')
const signupForm = document.querySelector('.signup-form')


function swapPos() {
    loginForm.classList.toggle('above')
    loginForm.classList.toggle('below')
    signupForm.classList.toggle('above')
    signupForm.classList.toggle('below')

}
// function setFocus() { 
//     signupForm.classList.toggle('above')
//     document.querySelectorAll('.signup-form')[0].focus();
// } 
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
var a;
    function pass()
    {
        if(a==1)
        {
            document.getElementById('confirm-pass').type='password';
            document.getElementById('pass-icon2').src='eye-close.png';
            a=0;
        }
        else
        {
            document.getElementById('confirm-pass').type='text';
            document.getElementById('pass-icon2').src='eye-open.png';
            a=1;
            
        }
    }
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