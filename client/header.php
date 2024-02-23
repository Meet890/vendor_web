<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" constant="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!--BS 5 css link-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  
    <script src="./js/bootstrap.bundle.js"></script> 
    <!--extranal css file-->
    
</head>
<body>
<!--navbar-->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top px-5">
 
    <a class="navbar-brand" href="index.php"><span class="text-warning">VENDOR</span> PARTNERS
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../client/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#event">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#footer">About us</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            vendor
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profile_card_getdata.php?service=<?php echo "decorator";?>">Decorators</a></li>
            <li><a class="dropdown-item" href="profile_card_getdata.php?service=<?php echo "photographer";?>">photographers</a></li>
            <li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "videographer";?>">vediographers</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Bakery";?>">cake</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "flowers";?>">flowers</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "wedding wear";?>">wedding wear</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "jewellery";?>">jewellery</a></li>
						<li><a class="dropdown-item"  href="#">invitation cards</a></li>
						<li><a class="dropdown-item"  href="#">sound</a></li>
						<li><a class="dropdown-item"  href="#">planners</a></li>
						<li><a class="dropdown-item"  href="#">makeup artist</a></li>
						<li><a class="dropdown-item"  href="#">venues</a></li>
						<li><a class="dropdown-item"  href="#">gifts</a></li>
          </ul>
        </li>
       
        <li>
        <div class="dropdown text-end ms-2">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../user.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(-111px, 34px, 0px);" data-popper-placement="bottom-end">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="login/Logout.php">Sign out</a></li>
          </ul>
        </div>
        </li>

        </ul>
      </div>

</nav>
<script src="../js/bootstrap.min.js"></script>  
<script src="../js/bootstrap.bundle.js"></script>  
</body>
</html>
