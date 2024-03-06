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
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="test.css" rel="stylesheet">
</head>
<body>
<?php 
    include("header.php");

?>
    <?php
    
    $id = $_GET["id"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vendor";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn){
        echo"<br>";
    }
    else{
      die("Connection failed: " . mysqli_connect_error());
    }



    $result = mysqli_query($conn, "SELECT v_photo FROM vendor WHERE v_id = $id ");

    while($row = $result->fetch_assoc()) {
        if($row['v_photo']==""){
            $img ="../user2.png";
            //echo '<script>  alert("hello"); </script>';
        }
        else{
            $img = "../admin/vendor/img/".$row["v_photo"];
            //echo $img;
            //echo '<script>  alert("1"); </script>';
        }
    }



$sql = "SELECT v_id, v_name, v_username, v_profession, v_address, v_phoneno,v_discription, v_comp,v_iglink,v_fblink FROM vendor where v_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $id =$row["v_id"];
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
        <h2 class="mt-3"><?php echo $comp; ?></h2>
        <div class="about">
        <h4 class="name"><?php echo $name; ?><h4>
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
            
            <li>
                <img src="img/insta.jpg" alt="Location Icon" class="png">
                <h5 class="call"><?php echo $ig ?></h5>
            </li>   
        </ul>
    </div>
    <div class="about center">
        <h3 class="mt-4">About us</h3>
            <p><?php echo $about ?></p>
            <span></span>
        </div>
        <div class="heading">
            <h3 class="mt-4 about">Photo Albums</h3>
        </div>
        <div class="gallery mb-5">
        <?php
            
              $rows = mysqli_query($conn, "SELECT * FROM gallery WHERE v_id = $id ");
        
        
         foreach ($rows as $row) : ?>
                <img src="../admin/vendor/img/<?php echo $row['g_photo']; ?>" class="col-4 w-100" onclick="openModal('../admin/vendor/img/<?php echo $row['g_photo']; ?>')" alt="Gallery Image 2"> 
                
            <?php endforeach; ?>   
            </div>
          

        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImg ">
        </div>


        <!-- rateinggg -->

        <div class="col-6 p-0">
        <div class="container3">
        <h1>Rate this profile</h1>
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
        <textarea id="review" placeholder="Write your review here" name="r_discription">
          </textarea>
        <button id="submit" name="submit">Submit</button>
        <div class="reviews" id="reviews">
        </div>
    </div>
        </div>
        <button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                report
            </button>
        <form action="report.php?id=<?php echo $id; ?>" method="post"> 
            <!-- Button trigger modal -->
            
            
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content px-3 py-1 m-4">
                            <div class="row">
                                <div class="col-11">
                            <h5 class="modal-title" id="staticBackdropLabel">report <?php echo $username;?></h5></div><div class="col-1">
                            <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                            
                        
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="dis" class="form-label">Discription</label>
                                <textarea class="form-control" id="dis" rows="3" name="dis"></textarea>
                            </div>
                        
                        
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="Submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        
    </div>

    </section>
    <?php 

include("footer.php");


?>
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
			if (index <= value) {
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