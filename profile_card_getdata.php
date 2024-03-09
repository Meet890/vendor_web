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
    <title>Booking Card</title>

    <!--BS 5 css link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--BS 5 js link-->
    <script src="js/bootstrap.min.js"></script>
    <!--extranal css file-->
    <link href="client/profile_card.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    include("header.php");

?>

<div class="team mar">
    <div class="container">
     <div class="section-title">
        <h2>Vendors</h2>
        <p>Find the best services</p>
     </div>

     <form method="post" action="test.php">

     <div class="row ">
     

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vendor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($conn){
    echo"<br>";
}
else{
  die("Connection failed: " . mysqli_connect_error());
}
$service = $_GET["service"];
$sql = "SELECT v_name, v_username, v_photo, v_profession, v_address, v_id FROM vendor where v_profession = '$service' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
      $name= $row["v_name"];

      $username= $row["v_username"];
      $image = $row["v_photo"];
      $services=$row["v_profession"];
      $city=$row["v_address"];
      $id=$row["v_id"];
      if($row['v_photo']==""){
        $img ="user2.png";
        //echo '<script>  alert("hello"); </script>';
      }
      else{
        $img = "admin/vendor/img/".$row["v_photo"];
        //echo $img;
        //echo '<script>  alert("1"); </script>';
      }

      ?>

<div class="col-lg-6 mt-4">
      <div class="member">
        <div class="member2 d-flex align-item-start">
             <div class="teampic">
                <img src="<?php echo $img ?>" class="img-fluid" alt="team1">
             </div>
             <div class="member-info">
                <h4><?php echo $name ?></h4>
                <span><?php echo $services ?></span>
                <p><?php echo $city ?></p>
                
              </div>
         </div>
                <div class="d-grid gap-2">

                <button class="btn btn-secondary mt-2 btns" type="button" onclick=""><a href='client/profile.php?id=<?php echo $id ?>' class="a4">More Info</a></button>

                </div>
        </div>   
      </div>
     


      <?php
    }

  } else {

    echo "No vendor available";
  }
  
  mysqli_close($conn);
  ?>
     </div>
     </form>
    </div>
</div>

<?php 

include("footer.php");


?>

    <!--BS 5 js link-->

<script src="/js/bootstrap.min.js"></script>

<script>
  function redirect($test){
    
  }
</script>

</body>   




</html>
