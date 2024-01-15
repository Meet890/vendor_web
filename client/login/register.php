<?php
// Include config file
require_once "config.php";
// Define variables and initialize with empty values
$username = $fname = $lname = $email = $password = $confirm_password = "";
$username_err = $fname = $lname = $email_err = $password_err = $confirm_password_err = "";
//validation
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
// Processing form data when form is submitted
{
 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = test_input($_POST["email"]);
        $password = trim($_POST["password"]);
        $confirm_password = trim($_POST["confirm_password"]);


        if (isset($username) && preg_match("/^[a-zA-Z0-9_]{5,}$/", $username)) {
            //$useranme= "Valid username: " . htmlspecialchars($username);
            if (isset($fname) && preg_match("/^[a-zA-Z]{2,}$/", $fname)) {
                // echo "Valid fname: " . htmlspecialchars($fname);
                 //$cfname =$fname;
                 if (isset($lname) && preg_match("/^[a-zA-Z]{2,}$/", $lname)) {
                    //echo "Valid lname: " . htmlspecialchars($lname);
                    //$clname =$lname;
                        if (empty($_POST["email"])) {
                        $email_err = "Email is required";
                         } else {
                        
                         // check if e-mail address is well-formed
                         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $email = test_input($_POST["email"]);

                            if(!empty(trim($_POST["password"]))){
                                $password = trim($_POST["password"]);

                                if(!empty(trim($_POST["confirm_password"]))){
                                    $confirm_password = trim($_POST["confirm_password"]);
                                    if(empty($password_err) && ($password != $confirm_password)){
                                        $confirm_password_err = "Password did not match.";
                                        
                                    }
                                    else{
                                      if(empty($username_err)  && empty($fname_err) && empty($lname_err)&& empty($email_err) && empty($password_err) && empty($confirm_password_err)){
     
                                          $sql = "INSERT INTO client (c_username,c_fname,c_lname, c_password,c_email) VALUES ('$username','$fname','$lname','$password','$email')";
                                  
                                          if(mysqli_query($conn, $sql)==true){
                                              // Redirect to login page
                                              header("location: login.php");
                                          } else{
                                              echo "Oops! Something went wrong. Please try again later.";
                                          }
                                      
                                          
                                      }
                                   
                                      // Close connection
                                      mysqli_close($conn);
                                    }
                                    
                                  } else{
                                       $confirm_password_err = "Please confirm password.";
                                  }
                                $password_err = "Please enter a password.";
                            } elseif(strlen(trim($_POST["password"])) < 6){
                                $password_err = "Password must have atleast 6 characters.";
                            } else{
                                $password_err = "Please enter a password.";
                            }
                         }
                         else{
                            $email_err = "Invalid email format";    
                         }
                         
                         }
                } else {
                    $lname_err = "invalid lname.";
                  //  echo "Invalid lname. lnames must contain only letters.";
                }
             } else {
                 $fname_err = "Invalide fname.";
                // echo "Invalid fname. fnames must contain only letters.";
             }
        } else {
            $username_err="Invalid Username";
           // echo "Invalid username. Usernames must be at least 5 characters long and can only contain letters, numbers, and underscores.";
        }
    }
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--BS 5 css link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--BS 5 js link-->
    <script src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>

             <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="fname" class="form-control <?php echo (!empty($fname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fname; ?>">
                <span class="invalid-feedback"><?php echo $fname_err; ?></span>
            </div>

             <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lname" class="form-control <?php echo (!empty($lname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lname; ?>">
                <span class="invalid-feedback"><?php echo $lname_err; ?></span>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group password">
                <label>Password</label>
                <input type="password" name="password" id="myInput1" class="form-control onclick="myFunction() <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <img src="eye-close.png" onclick="pass()" class="pass-icon" id="pass-icon">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group password">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" id="myInput2" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <img src="eye-close.png" onclick="pass2()" class="pass-icon" id="pass-icon2">
                <!-- <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span> -->
                <!-- <input type="checkbox" onclick="myFunction()" class="mt-2">Show Password -->
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
<script>
        function myFunction() {
        var x = document.getElementById("myInput1");
        var y = document.getElementById("myInput2");
        if (x.type === "password") {
         x.type = "text";
         y.type="text";
         } else {
         x.type = "password";
         y.type="password";
  }
}
</script>
<script>
    var a;
    function pass()
    {
        if(a==1)
        {
            document.getElementById('myInput1').type='password';
            document.getElementById('pass-icon').src='eye-close.png';
            a=0;
        }
        else
        {
            document.getElementById('myInput1').type='text';
            document.getElementById('pass-icon').src='eye-open.png';
            a=1;
            
        }
    }
    </script>
    <script>
    var b;
    function pass2()
    {
        if(b==1)
        {
            document.getElementById('myInput2').type='password';
            document.getElementById('pass-icon2').src='eye-close.png';
            b=0;
        }
        else
        {
            document.getElementById('myInput2').type='text';
            document.getElementById('pass-icon2').src='eye-open.png';
            b=1;
            
        }
    }
    </script>
    </div>
</body>
</html>