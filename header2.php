<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" constant="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!--BS 5 css link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!--extranal css file-->
    
  <style>
  </style>
    
    
</head>
<body>
<!--navbar-->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="img/logo2.png" class="logo">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="iindex.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#event">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">About us</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="images/download.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php if(isset($_SESSION["user"])){ echo "profile.php";}else{ echo "register.php";} ?>"><?php if(isset($_SESSION["user"])){ echo "Profile";}else{ echo "Register";} ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php if(isset($_SESSION["user"])){ echo "logout.php";}else{ echo "login.php";} ?>"><?php if(isset($_SESSION["user"])){ echo "Logout";}else{ echo "Login";} ?></a></li>
           <li></li>
          </ul>
        </li>
        </ul>
      </div>
  </div>
</nav>
<script src="js/bootstrap.bundle.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
