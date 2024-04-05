<?php
require '../config.php';
require '../session.php';
if(!isset($_SESSION["username"])){
	header("location:../login.php");
}



$today=$_15=$_10=$_3_2_1=$over='';
?>
  

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Vendor Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
    <link href="test.css" rel="stylesheet">

</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<?php
                include 'header.php';
            ?>
			</div>
			<div class="sidebar">
                <?php
                include 'slidebar.php';
                ?>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
                        <?php
if(isset($_SESSION["username"])){
$v_username = $_SESSION["username"];
}
else{
    $v_username = $_GET['username'];
}
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
$result = mysqli_query($conn, "SELECT v_photo FROM vendor WHERE v_username ='$v_username' ");

while($row = $result->fetch_assoc()) {
    if($row['v_photo']==""){
        $img ="../../user2.png";
        //echo '<script>  alert("hello"); </script>';
    }
    else{
        $img = "img/".$row["v_photo"];
        //echo $img;
        //echo '<script>  alert("1"); </script>';
    }
}

$sql = "SELECT v_id, v_name, v_username, v_profession, v_address, v_phoneno, v_discription, v_comp,v_iglink,v_fblink ,v_reg_end_time FROM vendor where v_username = '$v_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    $id = $row['v_id'];
    $name= $row["v_name"];
    $username= $row["v_username"];
    $services=$row["v_profession"];
    $city=$row["v_address"];
    $phone=$row["v_phoneno"];
    $about=$row["v_discription"];
    $comp=$row["v_comp"];
    $ig=$row["v_iglink"];
    $fb=$row["v_fblink"];
    $end=$row["v_reg_end_time"];
    $start =$row["v_reg_time"];
    //  echo $end;
    $today = date("Y-m-d");
    // echo $today;
    $_15 = date( "Y-m-d", strtotime( $end . "-15 day"));
    // echo $_15;
    $_10 =  date( "Y-m-d", strtotime( $end . "-10 day"));
    // echo $_10;
    $_3_2_1 =  date( "Y-m-d", strtotime( $end . "-3 day"));
    // echo $_3_2_1;
    $over =  date( "Y-m-d");
    // echo $over;
    if(date('Y-m-d')==$_15){
         echo '<div class="alert alert-danger "> Dear vendor , Your subcription is over on '.$end.', Only 15 Days left </div>';
    }
    elseif(){
        echo '<div class="alert alert-danger"> Dear vendor , Your renew request is in process which will be done within 3 days ... </div>';
    }
    elseif(date('Y-m-d')==$_10){
        echo '<div class="alert alert-danger"> Dear vendor , Your subcription is over on '.$end.', Only 10 Days left  </div>';
    }
    elseif(date('Y-m-d')>=$end){
        // date('Y-m-d')  upar ni condition ma aa nakhvanu che ....
        echo '<div class="alert alert-danger"> Dear vendor , Your subcription is over Please renew subcription <button class="btn submit mx-2" onclick="redirect()">Renew</button> </div>';
    }
    elseif(date('Y-m-d')<=$_3_2_1){
        echo '<div class="alert alert-danger"> Dear vendor , Your subcription is over on '.$end.'  </div>';  
    }
    else{

    }
}
} else {
    
echo "0 results";
}


?>
	<section>
        <img src="<?php echo  $img; ?>" alt="User Profile Picture" class="pro_img">
        <div class="detail">
            <div class="post">
              <!-- <h2>14</h2>
              <p>post</p> -->
            </div>
            <div class="followers">
                <!-- <h2>30</h2>
                <p>Post</p> -->
            </div>
            <!-- <div class="following">
                <img src="rating.png" alt="Location Icon" class="star"> -->
                <!-- <h2><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"> -->
                <!-- <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>4.3</h2>
                <p>1 Review</p>
            </div> -->
            <div class="followers">
                <h2><span id="imageCount"></span></h2>
                <p>Post</p>
            </div>
        </div>    
        <h2 class="mt-3"><?php echo $comp ?></h2>
        <div class="about">
        <h4><?php echo $name ?><h4>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-6">
        <ul>
            <li>
                <img src="assets/img/location.png" alt="Location Icon" class="png">
                <h5 class="city h"><?php echo $city ?></h5>
            </li>
            <li>
                <img src="assets/img/calling.png" alt="Phone Icon" class="png">
                <h5 class="call h"><?php echo $phone ?></h5>
            </li>
        </ul>
        </div>
        <div class="col-6">
        <ul>
            <li>
                <img src="assets/img/Facebook.png" alt="Phone Icon" class="png">
                <h5 class="city h"><?php echo $fb ?></h5>
            </li>
            
            <li>
                <img src="assets/img/insta.jpg" alt="Location Icon" class="png">
                <h5 class="call h"><?php echo $ig ?></h5>
            </li>   
        </ul>
    </div>
</div>
        <div class="about center">
            <h3 class="mt-4">About Us</h3>
            <pre class="Info"><?php echo $about ?></pre>
            <span></span>
        </div>
        <div class="heading">
            <h3 class="mt-4 about">Photo Albums</h3>
        </div>
        <div class="gallery mb-5" id="gallery">
        <?php
            
            $rows = mysqli_query($conn, "SELECT * FROM gallery WHERE v_id = $id ");
      
      
       foreach ($rows as $row) : ?>
              <img src="img/<?php echo $row['g_photo']; ?>"  class="col-4 pa" onclick="openModal('img/<?php echo $row['g_photo']; ?>')" alt="Gallery Image">
              
          <?php endforeach; ?>
        </div>

        <div id="myModal" class="modal" onclick="closeModal()">
            
            <img class="h-auto modal-content "  id="modalImg">
        </div>

        

    </section>
						
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<!-- dynamic post -->
    <script>
            document.addEventListener("DOMContentLoaded", function() {
            var gallery = document.getElementById("gallery");
            var images = gallery.getElementsByTagName("img");
            var imageCount = images.length;
            document.getElementById("imageCount").textContent = imageCount;
            });
        </script>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<!-- <script src="assets/js/plugin/chartist/chartist.min.js"></script> -->
<!-- <script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script> -->
<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<!-- <script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script> -->
<!-- <script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script> -->
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<!-- <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>

<script>
        function openModal(imageSrc) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("modalImg");
        modal.style.display = "block";
        modalImg.src = imageSrc;
        }

        function closeModal() {
         var modal = document.getElementById("myModal");
        modal.style.display = "none";
        }
    </script>
    <script>
        const stars = document.querySelectorAll(".star");
        const rating = document.getElementById("rating");
        const reviewText = document.getElementById("review");
        const submitBtn = document.getElementById("submit");
        const reviewsContainer = document.getElementById("reviews");

        stars.forEach((star) => {
	    star.addEventListener("click", () => {
		const value = parseInt(star.getAttribute("data-value"));
		rating.innerText = value;

		// Remove all existing classes from stars
		stars.forEach((s) => s.classList.remove("one", 
												"two", 
												"three", 
												"four", 
												"five"));

		// Add the appropriate class to 
		// each star based on the selected star's value
		stars.forEach((s, index) => {
			if (index < value) {
				s.classList.add(getStarColorClass(value));
			}
		});

		// Remove "selected" class from all stars
		stars.forEach((s) => s.classList.remove("selected"));
		// Add "selected" class to the clicked star
		star.classList.add("selected");
	     });
        });

        submitBtn.addEventListener("click", () => {
	    const review = reviewText.value;
	    const userRating = parseInt(rating.innerText);

	    if (!userRating || !review) {
		alert(
        "Please select a rating and provide a review before submitting."
			);
		return;
	}

	if (userRating > 0) {
		const reviewElement = document.createElement("div");
		reviewElement.classList.add("review");
		reviewElement.innerHTML = 
        `<p><strong>Rating: ${userRating}/5</strong></p><p>${review}</p>`;
		reviewsContainer.appendChild(reviewElement);

		// Reset styles after submitting
		reviewText.value = "";
		rating.innerText = "0";
		stars.forEach((s) => s.classList.remove("one", 
												"two", 
												"three", 
												"four", 
												"five", 
												"selected"));
	    }
        });

    function getStarColorClass(value) {
	switch (value) {
		case 1:
			return "one";
		case 2:
			return "two";
		case 3:
			return "three";
		case 4:
			return "four";
		case 5:
			return "five";
		default:
			return "";
	    }
    }
    function redirect()
    {
        window.location.href = "renewScanner.php";
    }
    </script>


</body>
</html>