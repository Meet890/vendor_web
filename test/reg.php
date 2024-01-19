<?php
// Include config file
require_once "config.php";
// Define variables and initialize with empty values
$username = $name = $city = $email = $password = $confirm_password =$checkbox= "";
$username_err = $name_err = $city_err = $email_err = $password_err = $confirm_password_err = "";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $city = $_POST['select'];
    $email = test_input($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $checkbox = $_POST["checkbox"];
    //echo $checkbox; ON 
// testing values
    // echo $name;
    // echo $city;
    // echo $email;
    // echo $username;
    // echo $password;
    // echo $confirm_password;
    
    if (isset($name) && preg_match("/^[a-zA-Z]{2,}$/", $name)){
        // echo '<script> alert("Welcome");  </script>';
        if (isset($city) && preg_match("/^[a-zA-Z]{2,}$/", $city)){
           // echo '<script> alert("Welcome");  </script>';
           if( strpos($email,'@gmail.com') || strpos($email,'@yahoo.com') || strpos($email,'@hotmail.com') || strpos($email,'@aol.com') || strpos($email,'@outlook.com') != false){
           if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email = test_input($_POST["email"]);
          //  echo '<script> alert("Welcome");  </script>';
            if (isset($username) && preg_match("/^[a-zA-Z0-9_]{5,}$/", $username)){
                //  echo '<script> alert("Welcome");  </script>';
                if (strlen($password) >= 6 && preg_match("/[a-zA-Z_]/", $password) && preg_match("/\d/", $password) && preg_match("/\w/", $password)&& !preg_match("/\s/", $password)) {
                    //  echo '<script> alert("Welcome");  </script>';
                    if(!empty(trim($_POST["confirm_password"]))){
                        $confirm_password = trim($confirm_password);
                        if($password == $confirm_password){
                            if($checkbox = "ON"){
                                $sql = "INSERT INTO client (c_username,c_name,c_city, c_password,c_email) VALUES ('$username','$name','$city','$password','$email')";
                                  
                                          if(mysqli_query($conn, $sql)==true){
                                              // Redirect to login page
                                              mysqli_close($conn);
                                              echo '<script>  alert("connected"); </script>';
                                              header("location: ");
                                          } else{
                                            
                                              echo "Oops! Something went wrong. Please try again later." .mysqli_error($conn);
                                          }
                            }
                            else{
                                echo '<script>  alert("check box"); setFocus();</script>';
                            }

                        }else{
                            echo '<script>  alert("both password shoud be same"); setFocus();</script>';
                        }

                    }else{
                        echo '<script>  alert("conf_password"); setFocus();</script>';
                    }
                    

                } else {
                    // Invalid password
                    echo '<script>  alert("password"); setFocus();</script>';
                }

            }
            else{
                echo '<script>  alert("username"); setFocus();</script>';
            }

           }
           else{
                echo '<script>  alert("email"); setFocus();</script>';
           }
           
        }
           else{
            echo '<script>  alert("enter valid domain name"); setFocus();</script>'; 
           }

        }
        else{
            echo '<script>  alert("city"); setFocus();</script>';
        }

    }
    else{
        echo '<script>  alert("name"); setFocus();</script>';
        

    }

}

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
            <div class="login-form above">
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
                    <div>Don't have an Account?&nbsp;<a class="signup-switch" onclick="swapPos()">Sign up</a></div>
                </div>
            </div>




            <div class="signup-form below">
                <div class="title">Sign-up as client</div>
                <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                    <div class="field">
                        <input type="text" id="name" name="name" placeholder=" " required>
                        <label for="name">Name</label>
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        <!-- <i class="fa fa-user"></i> -->
                    </div>

                    <div class="field">
                    <label for="city" class="city">Select city near you</label>
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
                    <span>Already Registered?&nbsp;<a class="login-switch" onclick="swapPos()">Login</a></span>
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