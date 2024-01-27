<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="test.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
require '../login/config.php';
    $v_username = $_GET["username"];
    echo $v_username;

$sql = "SELECT * FROM vendor where v_username = '$v_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["v_id"] ."    ".$row["v_email"];
  }
} else {
  echo "0 results";
}


    ?>

    <section>
        <img src="f1.jpg" alt="User Profile Picture" class="pro_img">
        <div class="detail">
            <div class="post">
              <!-- <h2>14</h2>
              <p>post</p> -->
            </div>
            <div class="followers">
                <h2>30</h2>
                <p>Post</p>
            </div>
            <div class="following">
               <!-- <img src="rating.png" alt="Location Icon" class="star"> -->
                <h2><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>4.3</h2>
<p>1 Review</p>
            </div>
</div>    
        <h2 class="mt-3">Services & Events</h2>
        <div class="about">
        <h4>Web Developer<h4>
        </div>

        <ul>
            <li>
                <img src="location.png" alt="Location Icon" class="png">
                <h5 class="city">City, Country</h5>
            </li>
            <!-- <li>
                <img src="email-icon.png" alt="Email Icon">
                <p>john.doe@example.com</p>
            </li> -->
            <li>
                <img src="calling.png" alt="Phone Icon" class="png">
                <h5 class="call">(123) 456-7890</h5>
            </li>
        </ul>
        <div class="about center">
            <h3 class="mt-4">About us</h3>
            <p>ukgb dbxs wdwkhdndsd hkns hksn k ukgb dbxs wdwkhdndsd hkns hksn k ukgb dbxs wdwkhdndsd hkns hksn k ukgb dbxs wdwkhdndsd hkns hksn kukgb dbxs wdwkhdndsd hkns hksn k</p>
            <span></span>
        </div>
        <div class="heading">
            <h3 class="mt-4 about">Photo Albums</h3>
        </div>
        <div class="gallery">
            <img src="f1.jpg" onclick="openModal('f1.jpg')" alt="Gallery Image 1">
            <img src="f2.jpg" onclick="openModal('f2.jpg')" alt="Gallery Image 2">
            <img src="f3.jpg" onclick="openModal('f3.jpg')" alt="Gallery Image 3">
            <img src="f1.jpg" onclick="openModal('f1.jpg')" alt="Gallery Image 1">
            <img src="f2.jpg" onclick="openModal('f2.jpg')" alt="Gallery Image 2">
            <img src="f3.jpg" onclick="openModal('f3.jpg')" alt="Gallery Image 3">
            <img src="unnamed.jpg" onclick="openModal('unnamed.jpg')" alt="Gallery Image 3">
            <img src="f3.jpg" onclick="openModal('f3.jpg')" alt="Gallery Image 3">
            <img src="f3.jpg" onclick="openModal('f3.jpg')" alt="Gallery Image 3">
            <!-- Add more images as needed -->
        </div>

        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImg">
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

</body>
</html>