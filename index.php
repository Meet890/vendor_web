<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" constant="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!--BS 5 css link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--BS 5 js link-->
    <script src="js/bootstrap.min.js"></script>
    <!--extranal css file-->
    
    <link href="style.css" rel="stylesheet">
    
    
    
</head>
<body>
<!--navbar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><span class="text-warning">VENDOR</span> PARTNERS
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php#event">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#footer">About us</a>
        </li>
        
        <!-- <li class="nav-item">
          <div class="log_btn">
        <button type="button" class="btn btn-outline-secondary btn-close-white"><a href="login/index.php">login</button></div>
        </li> -->

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Decorators</a></li>
            <li><a class="dropdown-item" href="#">photographers</a></li>
          </ul>
        </li>

      </ul>
      </div>
  </div>
</nav>

<!--slider-->
  <div class="row justify-content-center " >
  
  <section class="slider mt-90 col-11 " id="slider">

<div class="hight">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/decoration2.jpg" class="d-block w-100" alt="img1">
      <div class="carousel-caption a2">
        <h5>FIND THE BEST DECORATION</h5>
        <p>Your Choise Your Budget.</p>
        <p><a href="" class="btn btn btn-warning mt-3">FIND VENDOR</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/catring2.jpg" class="d-block w-100" alt="img2">
      <div class="carousel-caption a2">
        <h5>FIND BEST CATRING SERVICES</h5>
        <p>Your Choise Your Budget.</p>
        <p><a href="" class="btn btn btn-warning mt-3">FIND VENDOR</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/SOUND2.jpg" class="d-block w-100" alt="img3">
      <div class="carousel-caption a2">
        <h5>FIND BEST SOUND</h5>
        <p>Your Choise Your Budget.</p>
        <p><a href="" class="btn btn btn-warning mt-3">FIND VENDOR</a></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</section>

</div>
<!-- card -->
<section class="event" id="event">

        <div class="title mt-5">
            <h1 class="heding"><span>S</span>ervice</h1>
        </div>
  <div class="container mt-2">
      <div class="row">

            <div class="col-md-4  col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card text-white">
                   <img src="img/decoration.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">decorators</h3>
                   <p class="title">Creativity at its finest.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card b-2 text-white">
                   <img src="img/photo.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">photographers</h3>
                   <p class="title">Preserve your memories.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card b-2  text-white">
                   <img src="img/vedio.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">videographers</h3>
                   <p class="title">Moments well Shared.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card b-2  text-white">
                   <img src="img/cake.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">cake</h3>
                   <p class="title">Sweetness Readfined.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card b-2  text-white">
                   <img src="img/flowers.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">flowers</h3>
                   <p class="title">Make your life colorful.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card b-2   text-white">
                   <img src="img/cloth.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">wedding wear</h3>
                   <p class="title">Dress Your Dreams, Feel the Love.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card  b-2 text-white">
                   <img src="img/jwellery.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">jewellery</h3>
                   <p class="title">Jewelryize me.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card b-2  text-white">
                   <img src="img/printing.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">invitation cards</h3>
                   <p class="title">Invite in style.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card  b-2 text-white">
                   <img src="img/sound.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">sound</h3>
                   <p class="title">Audio you can rely on.</p>
                 </div>
              </a>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card  b-2 text-white">
                   <img src="img/makeup.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">makeup artist</h3>
                   <p class="title">Ready, Set, Glow!.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card text-white">
                   <img src="img/vanue.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">venues</h3>
                   <p class="title">	Where memories are made.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="profile_card_getdata.php" id="decorators" class="a1">
                 <div class="card text-white">
                   <img src="img/gift.jpg" class="card-img img1 p-2" alt="...">
                   <h3 class="titleh3">gifts</h3>
                   <p class="title">More than just a gift.</p>
                 </div>
              </a>
            </div> 
    </div>      
  </div>
</section>   

<!-- registration section ....-->






</body>

<script src="project/js/bootstrap.min.js"></script>  
</html>
<section class="footer" id="footer">
<?php 
    include("footer.php");

?>

</section>

