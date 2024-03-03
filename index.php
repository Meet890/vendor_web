<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page

if(isset($_SESSION["c_username"])){
	header("location:client/index.php");
 
}
elseif(isset($_SESSION["username"])){
	header("location:admin/vendor/");
}
else{

}

?>
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
    
    <!--extranal css file-->
    
    <link href="style.css" rel="stylesheet">
    
    
    
</head>

<body>
  <!--navbar-->
  <?php include 'header3.php' ?>

  <!-- <video controls>
  <source src="img/v.mp4" type="video/mp4" class="v">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video> -->
<img src ="img/w.png" class="v">

<!--slider-->
  <!-- <div class="row justify-content-center " >
  
  <section class="slider col-11 mt-5" id="slider">

<div class="hight">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" id="event"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/decoration2.jpg" class="d-block w-100" alt="img1">
      <div class="carousel-caption a2">
        <h5>FIND THE BEST DECORATION</h5>
        <p>Your Choise Your Budget.</p>
        <!-- <p><a href="" class="btn btn btn-warning mt-3">FIND VENDOR</a></p> -->
      <!-- </div>
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
    <span class="visually-hidden" >Next</span>
  </button>
</div>
</div>
</section>

</div>-->

<!-- about -->
 <!-- <section class="about_us">

 <center>

 <div class="title mt-5">
     <h1 class="heding">About us</h1>
  </div>

     <h3>We help vendor to grow up his business.<br> We provide the pletform for a vendor for grow his business.<br> 
      The client can easilly find his choise vendors.</h3>
      <h4>We are provide vendor to customer, but we have never lost sight of our core values. We believe in <br>
        collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our 
        vendor.</h4>
</center>
</section> -->
  <!-- card -->
  <section class="event">

    <div class="title mt-5">
      <h1 class="heding">Services</h1>
    </div>
    <div class="container mt-2">
      <div class="row">

            <div class="col-md-4  col-sm-6  ">
            <a href="client/profile_card_getdata.php?service=<?php echo "Decoration";?>" id="Decoration" class="a1">
                <div class="card text-white">
                  <div class="imgholder">
                   <img src="img/wedding-arch.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">Decoration</h4>
                   <p class="title">Creativity at its finest.</p>
                  
                 </div>
              
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "photographer";?>" id="photographer" class="a1">
                 <div class="card b-2 text-white">
                 <div class="imgholder">
                   <img src="img/camera.png" class="card-img img1 p-2" alt="...">
                 </div>
                   <h4 class="titleh3">photographers</h4>
                   <p class="title">Preserve your memories.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "videographer";?>" id="vieographer" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="img/production.png" class="card-img img1 p-2" alt="...">
                   </div>
                   <h4 class="titleh3">videographers</h4>
                   <p class="title">Moments well Shared.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "Bakery";?>" id="bakery" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="img/birthday-cake (1).png" class="card-img img1 p-2" alt="...">
                   </div>
                   <h4 class="titleh3">cake</h4>
                   <p class="title">Sweetness Readfined.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "flowers";?>" id="flowers" class="a1">
                 <div class="card b-2  text-white">
                 <div class="imgholder"> 
                 <img src="img/flower-shop.png" class="card-img img1 p-2" alt="...">
                 </div> 
                 <h4 class="titleh3">flowers</h4>
                   <p class="title">Make your life colorful.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "wedding wear";?>" id="wedding wear" class="a1">
                 <div class="card b-2   text-white">
                 <div class="imgholder">
                   <img src="img/boutique.png" class="card-img img1 p-2" alt="...">
                 </div>
                   <h4 class="titleh3">wedding wear</h4>
                   <p class="title">Dress Your Dreams.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "jewellery";?>" id="jewellery" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="img/display.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">jewellery</h4>
                   <p class="title">Jewelryize me.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "invitation card";?>" id="invitation card" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="img/wedding-invitation.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">invitation cards</h4>
                   <p class="title">Invite in style.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "sound";?>" id="sound" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="img/sound-system.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">sound</h4>
                   <p class="title">Audio you can rely on.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "makeup artist";?>" id="makeup artist" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="img/makeup.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">makeup artist</h4>
                   <p class="title">Ready, Set, Glow!.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "venues";?>" id="venues" class="a1">
                 <div class="card text-white">
                  <div class="imgholder">
                   <img src="img/venue.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">venues</h4>
                   <p class="title">	Where memories are made.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="client/profile_card_getdata.php?service=<?php echo "gifts";?>" id="gifts" class="a1">
                
                 <div class="card text-white">
                  <div class="imgholder">
                   <img src="img/presents.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">gifts</h4>
                   <p class="title">More than just a gift.</p>
                 </div>
              </a>
            </div> 
    </div>      
  </div>
</section>   


  <!-- registration section ....-->


<script src="js/bootstrap.min.js"></script>  
<script src="js/bootstrap.bundle.min.js"></script> 

<section class="footer" id="footer">
  <?php
  include("footer.php");

  ?>

</section>

</body>


</html>
