
<?php
 require 'config.php';

session_start();
// Check if the user is logged in, if not then redirect him to login page

if(!isset($_SESSION["c_username"])&& $_SESSION["loggedin"] = "false"){
	header("location:login/login.php");
 
}
else if(isset($_SESSION["username"])){
  header("location:.././admin/vendor/index.php");
}


//  error_reporting(0);
 $username = $_SESSION["c_username"];
 $id = $_SESSION["c_id"];
 $sql = "SELECT * FROM client WHERE c_id ='$id'";
 $result = mysqli_query($conn,$sql);
 if($row = $result->fetch_assoc())
 {
    $username= $row["c_username"];
    $name= $row["c_name"];
    $email= $row["c_email"];
    $city= $row["c_city"];
 }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<style>
    body{
        background-image: url("img/update.jpg");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
 
  
    }
.card {
  box-shadow: 0 5px 9px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  border-radius: 5px;
  left: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 col-md-6 col-sm-6 col-lg-3">
      <div class="row mt-5">
        <div class="col bg-white text-dark rounded shadow p-3">
          <img src="img/pro.jpg" alt="Avatar" style="width:100%">
  
          <h6>username :  <?php echo $username; ?></h6> 
          <h6>name :  <?php echo $name ; ?></h6> 
          <h6>email :  <?php echo $email ; ?></h6>
          <h6>city :  <?php echo $city ; ?></h6> 
          
          <br>
          <a href="update_client_profile.php">Update profile?</a>

      </div>
    </div>
      
    </div>        <button type="button" class="btn-close bg-white mt-5 background cencel" aria-label="Close" onclick="redirect()"></button>

  </div>
</div>

<script>
  function redirect()
    {
        window.location.href = "../index.php";
    }
  </script>
</body>
</html> 
