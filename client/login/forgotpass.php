<?php
require 'config.php';
$username_err="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
  if(isset($_POST["submit"])){
    if(isset($username) && preg_match("/^[a-zA-Z0-9_]{5,}$/", $username)){
        $sql = "SELECT c_username FROM client WHERE c_username = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s",$param_username);
            // Set parameters
            $param_username = $username;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                   header("location: otp.php?username=$username");
                    
                    
                }else{
                    echo '<script>  alert("This username dose not  exist."); </script>';
                }
            }else{
                echo '<script>  alert("3"); </script>';
            }
        }else{
            echo '<script>  alert("4"); </script>';
        }
    

}
else{
    $username_err = "Enter valid Username";
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
        <div class="form-container mt-5">
            <div class="login-form">
                <div class="image">
                    
                </div>
                <div class="title">Forgot Password</div>
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
                    
                   
                        <br>
                   

                    <button class="login-btn" name="submit">Next</button>
                </form>
                
                    
                    
                </div>
                
                </div>
                <button type="button" class="btn-close bg-white m-2 background cencel mt-5" aria-label="Close" onclick="redirect()"></button>
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
