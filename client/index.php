<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page

if(!isset($_SESSION["c_username"])&& $_SESSION["loggedin"] = "false"){
	header("location:login/login.php");
 
}
else if(isset($_SESSION["username"])){
  header("location:.././admin/vendor/index.php");
}
elseif(isset($_SESSION["a_id"])){
	header("location:../admin/admin/");
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--BS 5 js link-->
    <script src="../js/bootstrap.min.js"></script>
    <!--extranal css file-->
    
    <link href="style.css" rel="stylesheet">
    
    
    
</head>
<body>

<!--navbar-->

<?php include 'header.php' ?>
 
<center>
<img src ="../img/w.png" class="v">
</center>

<!-- card -->
<section class="event" id="event">

        <div class="title mt-5" >
            <h1 class="heding" id="event">Services</h1>
        </div>
  <div class="container mt-2">
    <div class="row justify-content-center">

            <div class="col-md-4  col-sm-6  ">
            <a href="profile_card_getdata.php?service=<?php echo "decoration";
            ?>" id="Decoration" class="a1">
                <div class="card b-2 text-white">
                  <div class="imgholder">
                   <img src="../img/wedding-arch.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">Decoration</h4>
                   <p class="title">Creativity at its finest.</p>
                  
                 </div>
              
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "photographer";
            ?>" id="photographer" class="a1">
                 <div class="card b-2 text-white">
                 <div class="imgholder">
                   <img src="../img/camera.png" class="card-img img1 p-2" alt="...">
                 </div>
                   <h4 class="titleh3">photographers</h4>
                   <p class="title">Preserve your memories.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "videographer";
            ?>" id="vieographer" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="../img/production.png" class="card-img img1 p-2" alt="...">
                   </div>
                   <h4 class="titleh3">videographers</h4>
                   <p class="title">Moments well Shared.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Bakery";
            ?>" id="bakery" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="../img/birthday-cake (1).png" class="card-img img1 p-2" alt="...">
                   </div>
                   <h4 class="titleh3">bakery</h4>
                   <p class="title">Sweetness Readfined.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "flowers";
            ?>" id="flowers" class="a1">
                 <div class="card b-2  text-white">
                 <div class="imgholder"> 
                 <img src="../img/flower-shop.png" class="card-img img1 p-2" alt="...">
                 </div> 
                 <h4 class="titleh3">flowers</h4>
                   <p class="title">Make your life colorful.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "event clothes";
            ?>" id="event clothes" class="a1">
                 <div class="card b-2   text-white">
                 <div class="imgholder">
                   <img src="../img/boutique.png" class="card-img img1 p-2" alt="...">
                 </div>
                   <h4 class="titleh3">event clothes</h4>
                   <p class="title">Dress Your Dreams.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "jewellery";
            ?>" id="jewellery" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="../img/display.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">jewellery</h4>
                   <p class="title">Jewelryize me.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "invitation card";
            ?>" id="invitation card" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="../img/wedding-invitation.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">invitation cards</h4>
                   <p class="title">Invite in style.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "sound system";
            ?>" id="sound" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="../img/sound-system.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">sound</h4>
                   <p class="title">Audio you can rely on.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "makeup artist";
            ?>" id="makeup artist" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="../img/makeup.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">makeup artist</h4>
                   <p class="title">Ready, Set, Glow!.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "venues";
            ?>" id="venues" class="a1">
                 <div class="card text-white">
                  <div class="imgholder">
                   <img src="../img/venue.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">venues</h4>
                   <p class="title">	Where memories are made.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "gifts";
            ?>" id="gifts" class="a1">
                  <div class="card text-white">
                  <div class="imgholder">
                   <img src="../img/presents.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">gifts</h4>
                   <p class="title">More than just a gift.</p>
                 </div>
              </a>
            </div> 
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Catering";
            ?>" id="Catring" class="a1">
                  <div class="card text-white">
                  <div class="imgholder">
                   <img src="../img/banquet.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">Catering</h4>
                   <p class="title">More than just a gift.</p>
                 </div>
              </a>
            </div> 
    </div>      
  </div>
</section>   

<!-- registration section ....-->

</body>

<script src="../js/bootstrap.min.js"></script>  
<script src="js/bootstrap.bundle.min.js"></script> 

</html>
<section class="footer" id="footer">
<?php 
    include("footer.php");

?>

</section>

