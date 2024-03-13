<?php
include("config.php");
error_reporting(0);
session_start();
$id= $_SESSION['c_id'];
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
      if(isset($_POST['update'])){

        $email=$_POST["email"];
        $password= $_POST["password"];


        $sql = "UPDATE client SET c_email = '$email', c_password='$password' WHERE c_id = '$id'";
        $data = mysqli_query($conn,$sql);
        if($data==1)
       {
         header("location:profile_client.php");
       }
      }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
  
    <link rel="stylesheet" href="update_client_profile.css">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

</head>

<body>
    <div class="bg-img"></div>
    <div id="main-container">
        <div class="form-container">
           
            <div class="signup-form">
                <div class="title">changes in client</div>
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
                        <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder=" " required autocomplete="on">
                        <label for="email">Email</label>
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div><br>
                    <div class="field email">
                        <input type="text" name="password" id="password" value="<?php echo $password; ?>" placeholder=" " required autocomplete="on">
                        <label for="email">Password</label>
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>
                    <!-- <div class="field">
                        <input type="username" name="username" id="username" value="<?php echo $username; ?>" placeholder=" " required autocomplete="on">
                        <label for="username">Username</label>
                    </div> -->

                    <button class="signup-btn" name="update">submit</button>
                </form>

                
            </div>
        </div>
</div>
</body>
</html>
