<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" constant="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <!--BS 5 css link-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  
    
    <!--extranal css file-->
    
</head>
<body>
<!--navbar-->


<nav class="navbar navbar-expand-lg navbar-dark hed fixed-top px-4">
 
    <a class="navbar-brand" href="index.php">
    <span class="text-warning">kachchhi</span>vent</a>

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
          <a class="nav-link" href="about_us.php">About us</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            vendor
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profile_card_getdata.php?service=<?php echo "Decoration";?>">Decoration</a></li>
            <li><a class="dropdown-item" href="profile_card_getdata.php?service=<?php echo "Photographer";?>">Photographers</a></li>
            <li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Videographer";?>">Vediographers</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Bakery";?>">Cake</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Flowers";?>">Flowers</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Event Wear";?>">Event Wear</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Jewellery";?>">Jewellery</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Invitation Card";?>">Invitation Cards</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Sound";?>">Sound</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Makeup Artist";?>">Makeup Artist</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Venues";?>">Venues</a></li>
						<li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Gifts";?>">Gifts</a></li>
            <li><a class="dropdown-item"  href="profile_card_getdata.php?service=<?php echo "Catring";?>">Catring</a></li>

          </ul>
        </li>
       
        <li>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="profile-pic">
                <img src="../user.png" alt="Profile Picture">
             </div>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profile_client.php">Profile</a></li>
            <li><a class="dropdown-item" href="login/Logout.php">Sign out</a></li>
          </ul>
        </li>
        </ul>
        </li>

      </ul>
       
      </div>

</nav>
<script src="../js/bootstrap.min.js"></script>  
<script src="../js/bootstrap.bundle.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>
