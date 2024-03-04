<?php
session_start();
// echo $_SESSION["otp"];
$otp_err="";
$org_otp =$_SESSION["otp"];
$err="OTP is sent into your  registered email id.";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  if(isset($_POST["submit"])){
    $c_otp = $_POST["otp"];
    $digit = "/(?=.*?[0-9])/";
    if( preg_match($digit,$c_otp))
    {
        if($org_otp== $c_otp){
            
           header("location: forgotPass2.php");
        }
        else{
            echo '<script>  alert("Invalid otp"); </script>';
        }
    }
    else
    {
        echo '<script>  alert("Only Digits  are allowed in OTP."); </script>';
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
                  if(!empty($err)){
                         echo '<div class="alert alert-success ">' . $err . '</div>';
                     }
                ?>
                <form class="form" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                    <div class="field">
                        <input type="number" id="otp" name="otp" placeholder=" " value="" required autocomplete="on">
                        <label for="otp">otp</label>
                       
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>
                    
                    <span class="invalid-feedback"><?php echo $otp_err; ?></span>
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
