<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page

if(!isset($_SESSION["c_username"])&& $_SESSION["loggedin"] = "false"){
	header("location:login/login.php");
 
}
else if(isset($_SESSION["username"])){
  header("location:.././admin/vendor/index.php");
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="test.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php 
    include("header.php");

?>
    <?php
    
    $v_username = $_GET["username"];
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


$sql = "SELECT v_id, v_name, v_username, v_profession, v_ser_places, v_phoneno,v_discription FROM vendor where v_username = '$v_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $id =$row["v_id"];
        $name= $row["v_name"];
        $username= $row["v_username"];
        $services=$row["v_profession"];
        $city=$row["v_ser_places"];
        $phone=$row["v_phoneno"];
        $about=$row["v_discription"];
    }
  } else {
  echo "0 results";
}


    ?>

    <section>
        <img src="img/f1.jpg" alt="User Profile Picture" class="pro_img">
        <div class="detail">
            <div class="post">
              <!-- <h2>14</h2>
              <p>post</p> -->
            </div>
            <div class="followers">
                <h4>30</h4>
                <p class="p1">Post</p>
            </div>
            <div class="following">
            <h4><img src="img/star.jpg" alt="Location Icon" class="star">30</h4>
                <!-- <h4><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill star" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>4.3</h4> -->
                <p class="p1">1 Review</p>
            </div>
        </div>    
        <h2 class="mt-3"><?php echo $name ?></h2>
        <div class="about">
        <h4><?php echo $services ?><h4>
        </div>
        <div class="row">
            <div class="col-9">
        <ul>
            <li>
                <img src="img/location.png" alt="Location Icon" class="png">
                <h5 class="city"><?php echo $city ?></h5>
            </li>
            <!-- <li>
                <img src="email-icon.png" alt="Email Icon">
                <p>john.doe@example.com</p>
            </li> -->
            <li>
                <img src="img/calling.png" alt="Phone Icon" class="png">
                <h5 class="call"><?php echo $phone ?></h5>
            </li>
            
        </ul>
        </div>
        <div class="col-3">
        <ul>
            <li> <br></li>
            <li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="img/insta.jpg" alt="Location Icon" class="png">
                <img src="img/Facebook.png" alt="Phone Icon" class="png">
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
                <img src="../admin/vendor/img/<?php echo $row['g_photo']; ?>" onclick="openModal('../admin/vendor/img/<?php echo $row['g_photo']; ?>')" alt="Gallery Image 2">
                
            <?php endforeach; ?>   
            <!-- <img src="img/f1.jpg" onclick="openModal('img/f1.jpg')" alt="Gallery Image 1">
            <img src="img/f3.jpg" onclick="openModal('img/f3.jpg')" alt="Gallery Image 3">
            <img src="img/f1.jpg" onclick="openModal('img/f1.jpg')" alt="Gallery Image 1">
            <img src="img/f2.jpg" onclick="openModal('img/f2.jpg')" alt="Gallery Image 2">
            <img src="img/f3.jpg" onclick="openModal('img/f3.jpg')" alt="Gallery Image 3">
            <img src="img/unnamed.jpg" onclick="openModal('img/unnamed.jpg')" alt="Gallery Image 3">
            <img src="img/f3.jpg" onclick="openModal('img/f3.jpg')" alt="Gallery Image 3">
            <img src="img/f3.jpg" onclick="openModal('img/f3.jpg')" alt="Gallery Image 3"> -->
            <!-- Add more images as needed -->
            </div>

        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImg ">
        </div>


        <!-- rateinggg -->


        <div class="container">
        <h1>Give your reating..</h1>
        <div class="rating">
            <span id="rating" name="r_star">0</span>/5
        </div>
        <div class="stars" id="stars" name="">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
        </div>
        <p>Share your review:</p>
        <textarea id="review"
                  placeholder="Write your review here" name="r_discription">
          </textarea>
        <button id="submit" name="submit">Submit</button>
        <div class="reviews" id="reviews">
        </div>
    </div>

    </section>
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
<?php

    require 'config.php';
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $discription=$_POST["r_discription"];
        $rating= $_POST["r_star"];
        echo $rating;
        // $sql="insert into rating(r_discription,r_star) values($name,$rating)";

        // if($conn->query($sql) === TRUE)
        // {
        //     echo"successfully";
        // }
        // else{
        //     echo"error";
        // }
    }
        mysqli_close($conn);
    

?>