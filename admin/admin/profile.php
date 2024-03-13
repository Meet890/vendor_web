<?php
require '../config.php';

?>
  

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin -Vendor profile</title>
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


    
        $v_id = $_GET['id'];
  
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
$result = mysqli_query($conn, "SELECT v_photo FROM vendor WHERE v_id = $v_id ");

while($row = $result->fetch_assoc()) {
    if($row['v_photo']==""){
        $img ="../../user2.png";
        //echo '<script>  alert("hello"); </script>';
    }
    else{
        $img = "../vendor/img/".$row["v_photo"];
        //echo $img;
        //echo '<script>  alert("1"); </script>';
    }
}

$sql = "SELECT v_id, v_name, v_username, v_profession, v_address, v_phoneno, v_discription, v_comp,v_iglink,v_fblink FROM vendor where v_id = $v_id ";
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
                <h2>30</h2>
                <p>Post</p>
            </div>
            
        </div>    
        <h2 class="mt-3"><?php echo $comp ?></h2>
        <div class="about">
        <h4><?php echo $name ?><h4>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
        <ul>
            <li>
                <img src="img/location.png" alt="Location Icon" class="png">
                <h5 class="city"><?php echo $city ?></h5>
            </li>
            <li>
                <img src="img/calling.png" alt="Phone Icon" class="png">
                <h5 class="call"><?php echo $phone ?></h5>
            </li>
            
        </ul>
        </div>
        <div class="col-6">
        <ul>
            <li>
                <img src="img/Facebook.png" alt="Phone Icon" class="png">
                <h5 class="city"><?php echo $fb ?></h5>
            </li>
            
            <li class="mt-1">
                <img src="img/insta.jpg" alt="Location Icon" class="png">
                <h5 class="call"><?php echo $ig ?></h5>
            </li>   
        </ul>
    </div>
        </div>
        <div class="about center">
            <h3 class="mt-4">About us</h3>
            <p><?php echo $about ?></p>
            <span></span>
        </div>
        <div class="heading">
            <h3 class="mt-4 about">Photo Albums</h3>
        </div>
        <div class="gallery">
        <?php
            
            $rows = mysqli_query($conn, "SELECT * FROM gallery WHERE v_id = $id ");
      
      
       foreach ($rows as $row) : ?>
              <img src="../vendor/img/<?php echo $row['g_photo']; ?>" onclick="openModal('../vendor/img/<?php echo $row['g_photo']; ?>')" alt="Gallery Image 2">
              
          <?php endforeach; ?>
        </div>

        <div id="myModal" class="modal" onclick="closeModal()">
            
            <img class="w-auto modal-content "  id="modalImg">
        </div>

        

    </section>
						
					</div>
				</div>
			
			</div>
		</div>
	</div>
	

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

    </script>


</body>
</html>