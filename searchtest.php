<?php
include("header.php");
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
    <link href="profile_card.css" rel="stylesheet">
</head>
<body>

<div class="team mar">
    <div class="container">
     <div class="section-title">
        <h2>Vendors</h2>
        <p>Find the best services</p>
    
     <div class="row">
      <div class ="col-md-7">
      <form action="" method="GET">
      <div class="input-group mb-3">
  <input type="text" class="form-control" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];} ?>" placeholder="Search" >
  <button type="submit" class="btn btn-primary">Search</button>
</div>
</div>
</form>



     

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
$sql = "SELECT v_name, v_profession, v_ser_places FROM vendor";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
      $name= $row["v_name"];
      $services=$row["v_profession"];
      $city=$row["v_ser_places"];

      if(isset($_GET['search']))
      {
        $filtervalues =$_GET['search'];
        $query="SELECT * FROM vendor WHERE CONCAT(v_name,v_profession,v_ser_places) LIKE '% $filtervalues%' ";
        $query_run=mysqli_query($conn,$query);
        if(mysqli_num_rows($query_run)>0)
        {

        }
        else
        {
        
         
        }
      }
    


?>    

<div class="col-lg-6 mt-4">
      <div class="member">
        <div class="member2 d-flex align-item-start">
             <div class="teampic">
                <img src="../img/pro.jpg" class="img-fluid" alt="team1">
             </div>
             <div class="member-info">
                <h4><?php echo $name ?></h4>
                <span><?php echo $services ?></span>
                <p><?php echo $city ?></p>
                
              </div>
         </div>
                <div class="d-grid gap-2">
                <button class="btn btn-primary mt-2" type="button"><a href="profile api/test.php?v_id">More Info</a></button>
                </div>
        </div>   
      </div>

      <?php
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);
  ?>
  <?php 
    include("footer.php");

?>


    <!--BS 5 js link-->
<script src="project/js/bootstrap.min.js"></script>
  <!-- Script -->
  <script src="profile_card.js"></script>
</body>   
</html>
