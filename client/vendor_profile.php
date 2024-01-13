<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/vendor_profile.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="MDB/css/mdb.min.css">
    <link href='css/boxicons.min.css' rel='stylesheet'>
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="font/css/all.css">
    <link rel="stylesheet" href="vendor_style.css">
    <style>
      

.wrapper {
  background: var(--white);
  padding: 2rem;
  max-width: 576px;
  width: 100%;
  border-radius: .75rem;
  box-shadow: var(--shadow);
  text-align: center;
}
.wrapper h3 {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 1rem;
}
.rating {
  display: flex;
  justify-content: center;
  align-items: center;
  grid-gap: .5rem;
  font-size: 2rem;
  color: var(--yellow);
  margin-bottom: 2rem;
}
.rating .star {
  cursor: pointer;
}
.rating .star.active {
  opacity: 0;
  animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
}

@keyframes animate {
  0% {
    opacity: 0;
    transform: scale(1);
  }
  50% {
    opacity: 1;
    transform: scale(1.2);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}


.rating .star:hover {
  transform: scale(1.1);
}
textarea {
  width: 100%;
  background: var(--light);
  padding: 1rem;
  border-radius: .5rem;
  border: none;
  outline: none;
  resize: none;
  margin-bottom: .5rem;
}
.btn-group {
  display: flex;
  grid-gap: .5rem;
  align-items: center;
}
.btn-group .btn {
  padding: .75rem 1rem;
  border-radius: .5rem;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: .875rem;
  font-weight: 500;
}
.btn-group .btn.submit {
  background: var(--blue);
  color: var(--white);
}
.btn-group .btn.submit:hover {
  background: var(--blue-d-1);
}
.btn-group .btn.cancel {
  background: var(--white);
  color: var(--blue);
}
.btn-group .btn.cancel:hover {
  background: var(--light);
}


      </style>
    
    <title>Vendor</title>
  </head>
  <body style="background-color: rgb(205, 213, 214);">
  <?php 
    include("header.php");
?>
 <div class="container-fluid px-0">
      <section class="h-100 gradient-custom-2 .bg-modal ">

        <div class="container py-4 h-100 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 m-3">
              <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color:rgb(66, 80, 145); height:230px;">
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="img/img1.jpeg" alt="Generic placeholder image" class="img-fluid border border-dark img-thumbnail mt-4 bg-dark mb-2 p-0" style="width: 150px; z-index: 1">
                  </div>
                  <div class="ms-3" style="margin-top: 130px;">
                    <h5>Rathod Meet</h5>
                    <p>Bhuj</p>
                  </div>
                </div>
                <div class="p-2 pe-4">
                  <div class="d-flex justify-content-end ">
                    <a href="" class="me-4 text-reset">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
                <div class="card-body p-2 text-black">
                  <div class="mb-5">
                    <p class="lead fw-normal mb-1">About</p>
                    <div class="p-4" style="background-color: #f8f9fa;">
                        <!-- information section  -->
                        <p class="font-italic mb-1">Web Developer</p>
                        <p class="font-italic mb-1">Lives in New York</p>
                        <p class="font-italic mb-0">Photographer</p>
                      </div>
                    </div>
                      
                      
                      <!-- Gallery -->
                      <div class="container-fluid">
                      <div class="d-flex justify-content-between align-items-center mb-4">
    <p class="lead fw-normal mb-0">Recent photos</p>
    <p class="mb-0"><a href="style.css" class="text-muted">Show all</a></p>
  </div>
  
  <div class="row">
    <div class="col-4  p-1 " >
    <!-- <a href="#" id="button" class="button"><img 
      src="img/annie-spratt-ogDort6vKuE-unsplash.jpg"
      class="w-100 shadow-1-strong rounded mb-1"
      alt="Boat on Calm Water"
      /></a>-->
            <img id="myImg" src="img/annie-spratt-ogDort6vKuE-unsplash.jpg"  style="width:100%;max-width:300px"class="mt-2">
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
      <div id="caption"></div>
      </div>

      
      <!-- <a href="#" id="button" class="button"><img
      src="img/leonardo-miranda-dvF6s1H1x68-unsplash.jpg"
      class="w-100 shadow-1-strong rounded mb-1"
      alt="Wintry Mountain Landscape"
      /></a> -->
      <img id="myImg" src="img/leonardo-miranda-dvF6s1H1x68-unsplash.jpg"  style="width:100%;max-width:300px" class="mt-2">
      <div id="myModal" class="modal">
         <span class="close">&times;</span>
        <img class="modal-content mt-2" id="img01">
         <div id="caption"></div>
       </div>

    </div>
    
    <div class="col-4  p-1">
    <!-- <a href="#" id="button" class="button"><img
      src="img/elvis-bekmanis-WJc87MVcDaA-unsplash.jpg"
      class="w-100 shadow-1-strong rounded mb-1"
      alt="Mountains in the Clouds"
      /></a> -->
      <img id="myImg" src="img/elvis-bekmanis-WJc87MVcDaA-unsplash.jpg"  style="width:100%;max-width:300px" class="mt-2">
    <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
      
      <!-- <a href="#" id="button" class="button"><img
      src="img/beatriz-perez-moya-M2T1j-6Fn8w-unsplash.jpg"
      class="w-100 shadow-1-strong rounded mb-1"
      alt="Boat on Calm Water"
      /></a> -->
      <img id="myImg" src="img/beatriz-perez-moya-M2T1j-6Fn8w-unsplash.jpg"  style="width:100%;max-width:300px" class="mt-2">
    <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
    </div>
    
    <div class="col-4 p-1 ">
    <!-- <a href="#" id="button" class="button"> <img
      src="img/drew-coffman-llWjwo200fo-unsplash.jpg"
      class="w-100 shadow-1-strong rounded mb-1"
      alt="Waves at Sea"
      /></a> -->
      <img id="myImg" src="img/drew-coffman-llWjwo200fo-unsplash.jpg" alt="Snow" style="width:100%;max-width:300px" class="mt-2">
     <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
      
      <!-- <a href="#" id="button" class="button"><img
      src="img/photos-by-lanty-O38Id_cyV4M-unsplash.jpg"
      class="w-100 shadow-1-strong rounded mb-1"
      alt="Yosemite National Park"
      /></a> -->
      <img id="myImg" src="img/photos-by-lanty-O38Id_cyV4M-unsplash.jpg" alt="Snow" style="width:100%;max-width:300px" class="mt-2">
    <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
      <!-- <a href="#" id="button" class="button"><img
      src="img/nyegi-Tzu3Qsww1tQ-unsplash (1).jpg"
      class="w-100 shadow-1-strong rounded mb-1"
      alt="Yosemite National Park"
      /> -->
      <img id="myImg" src="img/nyegi-Tzu3Qsww1tQ-unsplash (1).jpg" alt="Snow" style="width:100%;max-width:300px" class="mt-2">
      <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
      
  </div>
</div>

<div class="row justify-content-between align-items-center">
  <div class="col-12 mx-5">
    <div class="wrapper">
		<h3>write your review..</h3>
		<form action="#">
			<div class="rating">
				<input type="number" name="rating" hidden>
				<i class='fa-regular fa-star' style="--i: 0;"></i>
				<i class='fa-regular fa-star' style="--i: 1;"></i>
				<i class='fa-regular fa-star' style="--i: 2;"></i>
				<i class='fa-regular fa-star' style="--i: 3;"></i>
				<i class='fa-regular fa-star' style="--i: 4;"></i>
			</div>
			<textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..."></textarea>
			<div class="btn-group">
				<button type="submit" class="btn submit">Submit</button>
				<button class="btn cancel">Cancel</button>
			</div>
		</form>
	</div>
  </div>
</div>

<!-- <div class="modal-contents">
		<div class="close">+</div>
		<form action="">
      <img src="img/photos-by-lanty-O38Id_cyV4M-unsplash.jpg" alt="">
			<a href="#" class="button">Submit</a>
		</form>
    </div> -->





</div>
 
    
<!-- Gallery -->


</div>



</div>



</div>



</div>
<?php 
    include("footer.php");

    ?>
</div>

</div>

      </section>
</div>
</div>
<script>
  const allStar = document.querySelectorAll('.rating .star')
const ratingValue = document.querySelector('.rating input')

allStar.forEach((item, idx)=> {
	item.addEventListener('click', function () {
		let click = 0
		ratingValue.value = idx + 1

		allStar.forEach(i=> {
			i.classList.replace('fa-solid fa-star', 'fa-regular fa-star')
			i.classList.remove('active')
		})
		for(let i=0; i<allStar.length; i++) {
			if(i <= idx) {
				allStar[i].classList.replace('fa-regular fa-star', 'fa-solid fa-star')
				allStar[i].classList.add('active')
			} else {
				allStar[i].style.setProperty('--i', click)
				click++
			}
		}
	})
})
</script>
<!-- popup -->
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>



<script>
        document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});



const allStar = document.querySelectorAll('.rating .star')
const ratingValue = document.querySelector('.rating input')

allStar.forEach((item, idx)=> {
	item.addEventListener('click', function () {
		let click = 0
		ratingValue.value = idx + 1

		allStar.forEach(i=> {
			i.classList.replace('bxs-star', 'bx-star')
			i.classList.remove('active')
		})
		for(let i=0; i<allStar.length; i++) {
			if(i <= idx) {
				allStar[i].classList.replace('bx-star', 'bxs-star')
				allStar[i].classList.add('active')
			} else {
				allStar[i].style.setProperty('--i', click)
				click++
			}
		}
	})
})
    </script>
    
  </body>
  
  <script src="js/bootstrap.min.js" ></script>
</html>