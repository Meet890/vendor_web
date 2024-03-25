<?php
include("config.php");
error_reporting(0);
session_start();
$id= $_SESSION['c_id'];
$sql="select c_email,c_password from client where c_id='$id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$a=$row['c_email'];
$b=$row['c_password'];
}
   //input fields are Validated with regular expression
   $validName="/^[a-zA-Z ]*$/";
   $validUserName="/^[A-Za-z0-9_]+$/";
   // $validEmail=; //@gmail.com @yahoo.com @hotmail.com @aol.com @outlook.com;
   $uppercasePassword = "/(?=.*?[A-Z])/";
   $lowercasePassword = "/(?=.*?[a-z])/";
   $digitPassword = "/(?=.*?[0-9])/";
   $spacesPassword = "/^$|\s+/";
   $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
   $minEightPassword = "/.{8,}/";
   $phoneNo="/^[0-9]{10}+$/";
if(isset($_POST['update'])){
  //  First Name Validation
  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
 

  $email=$_POST["email"];
  $email=test_input($_POST["email"]);
  $password= $_POST["password"];


//Email Address Validation
if(empty($email)){
  $emailErr="Email is Required"; 
}
elseif( strpos($email,'@gmail.com') || strpos($email,'@yahoo.com') || strpos($email,'@hotmail.com') || strpos($email,'@aol.com') || strpos($email,'@outlook.com') == True){
   $emailErr="Invalid Domain name";
}
else{
  $emailErr=true;
}
    
// password validation 
if(empty($password)){
  $passErr="Password is Required"; 
} 
elseif (!preg_match($uppercasePassword,$password) || !preg_match($lowercasePassword,$password) || !preg_match($digitPassword,$password) || !preg_match($symbolPassword,$password) || !preg_match($minEightPassword,$password) || preg_match($spacesPassword,$password)) {
  $passErr="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
}
else{
   $passErr=true;
}

  if( $emailErr==1 && $passErr==1)
{
$sql="select c_email,c_password from client where c_id='$id'";
$result = $conn->query($sql);
$username=$email=$city=$name=$id="";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $_SESSION["c_id"];
        // echo $id;
          $email=$row["c_email"];
          $password=$row["c_password"];
    }
        $email=$_POST["email"];
        $password= $_POST["password"];


        $sql = "UPDATE client SET c_email = '$email', c_password='$password' WHERE c_id = '$id'";
        $data = mysqli_query($conn,$sql);
        if($data==1)
       {
         header("location:profile_client.php");
       }
    }
    
    else{
      
    }
   }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="update_client_profile.css">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

</head>

<body>
    <div class="bg-img"></div>
    <div id="main-container">
        <div class="form-container">
       
          <div class="signup-form">
           
                <div class="title">Update your profile</div>
                <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                    <!-- <div class="field">
                        <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder=" " required>
                        <label for="name">Name</label>
                    </div> -->
                    
                    <!-- <div class="field">
                    <input type="text" id="city" name="city" value="<?php echo $city; ?>" placeholder=" " required>
                    <label for="city">city </label>
                    </div> -->

                    <div class="field email">
                        <input type="email" name="email" id="email" value="<?php echo $a; ?>" placeholder=" " required autocomplete="on">
                        <label for="email">Email</label>
                       
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>
                    <p class="err-msg"> 
                 <?php if($emailErr!=1){ echo $emailErr; } ?>
                </p><br>
                    <div class="field email">
                        <input type="text" name="password" id="password" value="<?php echo $b; ?>" placeholder=" " required autocomplete="on">
                        <label for="email">Password</label>
                        
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>
                    <p class="err-msg"> 
                 <?php if($passErr!=1){ echo $passErr; } ?>
                </p>
                    <!-- <div class="field">
                        <input type="username" name="username" id="username" value="<?php echo $username; ?>" placeholder=" " required autocomplete="on">
                        <label for="username">Username</label>
                    </div> -->

                    <button class="signup-btn" name="update">submit</button>
                </form>

                
            </div>
            </div>
            <div class="but">
          <button type="button" class="btn-close bg-white mt-5 b background cencel" aria-label="Close" onclick="redirect()"></button>
          </div>
          </div>

<script>
  function redirect()
    {
        window.location.href = "profile_client.php";
    }
  </script>
</body>
</html>
