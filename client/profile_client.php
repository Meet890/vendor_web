<?php
// require 'config.php';
// require 'session.php';

// error_reporting(0);
// $username = $_SESSION["username"];
// $sql = "SELECT c_id, c_username, FROM client where c_username='$username";
// $result = $conn->query($sql);
// if($row = $result->fetch_assoc())
// {
//     $username= $row["v_username"];
// }
// ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<style>
    body{
        background-image: url("img/backpro.jpg");
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
    <div class="col-9 col-md-6 col-sm-6 col-lg-3">
      <div class="row mt-5">
        <div class="col bg-white text-dark rounded shadow p-3">
          <img src="img/pro.jpg" alt="Avatar" style="width:100%">
  
          <h6>username</h6> 
          <h6>name</h6> 
          <h6>email</h6>
          <h6>city</h6> 
          <h6>password</h6> 
          <br>
          <a href="">Update profile?</a>

      </div>
    </div>
      
    </div>
  </div>
</div>


</body>
</html> 
