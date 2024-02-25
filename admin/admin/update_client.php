<?php
include("config.php");
// error_reporting(0);

$id= $_GET['id'];

    
if(isset($_POST['update']))
{
  $name=$_POST['name'];
  $city=$_POST['city'];
  $email=$_POST['email'];
  $username=$_POST['username'];

  $sql = "UPDATE client SET c_username = '$username', c_name = '$name', c_city = '$city', c_email = '$email' WHERE c_id = '$id'";
  $data = mysqli_query($conn,$sql);
  if(isset($data))
  {
      echo "record updated";
      //echo $name;
    ////header("location:tables.php");
  }
}
$sql="select c_id,c_name,c_username,c_email,c_city from client where c_id='$id'";
$result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {
          $id =$row["c_id"];
          $name= $row["c_name"];
          $city=$row["c_city"];
          $email=$row["c_email"];
          $username= $row["c_username"];
          
      }



?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
  
    <link rel="stylesheet" href="update_client.css">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

</head>

<body>
    <div class="bg-img"></div>
    <div id="main-container">
        <div class="form-container">
           
            <div class="signup-form">
                <div class="title">changes in client</div>
                <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                    <div class="field">
                        <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder=" " required>
                        <label for="name">Name</label>
                    </div>
                    
                    <div class="field">
                   
                    <input type="text" id="city" name="city" value="<?php echo $city; ?>" placeholder=" " required>
                    <label for="city">city </label>
                        
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>

                    <div class="field email">
                        <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder=" " required autocomplete="on">
                        <label for="email">Email</label>
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>
                    <div class="field">
                        <input type="username" name="username" id="username" value="<?php echo $username; ?>" placeholder=" " required autocomplete="on">
                        <label for="username">Username</label>
                        <!-- <i class="fa fa-envelope"></i> -->
                    </div>

                    <button class="signup-btn" name="update">submit</button>
                </form>

                
            </div>
        </div>
</div>
</body>
</html>
