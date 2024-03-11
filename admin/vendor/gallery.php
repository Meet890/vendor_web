<?php
require 'config.php';

require '../session.php';




if(isset($_POST["submit"])){
	
	if($_FILES["image"]["error"] == 4){
	  echo
	  "<script> alert('Image Does Not Exist'); </script>"
	  ;
	}
	else{
	  $fileName = $_FILES["image"]["name"];
	  $fileSize = $_FILES["image"]["size"];
	  $tmpName = $_FILES["image"]["tmp_name"];
  
	  $validImageExtension = ['jpg', 'jpeg', 'png'];
	  $imageExtension = explode('.', $fileName);
	  $imageExtension = strtolower(end($imageExtension));
	  if ( !in_array($imageExtension, $validImageExtension) ){
		echo
		"
		<script>
		  alert('Invalid Image Extension');
		</script>
		";
	  }
	  else if($fileSize > 20000000){
		echo
		"
		<script>
		  alert('Image Size Is Too Large');
		</script>
		";
	  }
	  else{
		$newImageName = uniqid();
		$newImageName .= '.' . $imageExtension;
  
		move_uploaded_file($tmpName, 'img/' . $newImageName);
		$v_id = $_SESSION["id"];
		$query = "INSERT INTO gallery(v_id,g_photo) values ('$v_id','$newImageName') ";
		
		mysqli_query($conn, $query);
		echo
		"
		
		";
	  }
	}
  }
  
if(isset($_POST["submit2"])){
	
	if($_FILES["image"]["error"] == 4){
	  echo
	  "<script> alert('Image Does Not Exist'); </script>"
	  ;
	}
	else{
	  $fileName = $_FILES["image"]["name"];
	  $fileSize = $_FILES["image"]["size"];
	  $tmpName = $_FILES["image"]["tmp_name"];
  
	  $validImageExtension = ['jpg', 'jpeg', 'png'];
	  $imageExtension = explode('.', $fileName);
	  $imageExtension = strtolower(end($imageExtension));
	  if ( !in_array($imageExtension, $validImageExtension) ){
		echo
		"
		<script>
		  alert('Invalid Image Extension');
		</script>
		";
	  }
	  else if($fileSize > 20000000){
		echo
		"
		<script>
		  alert('Image Size Is Too Large');
		</script>
		";
	  }
	  else{
		$newImageName = uniqid();
		$newImageName .= '.' . $imageExtension;
  
		move_uploaded_file($tmpName, 'img/' . $newImageName);
		$v_id = $_SESSION["id"];
		$query = "UPDATE vendor SET v_photo='$newImageName' WHERE v_id='$v_id'";
		
		mysqli_query($conn, $query);
		echo
		"
		
		";
	  }
	}
  }
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<style>
		.img1{
			align-self: center;
		width: auto;
		height: 100%;
		
		}
		.imgholder{
			height: 240px;
			width: auto;
			overflow: hidden;
			
		}
		.pro{
			margin-left: 23px;
    		font-weight: 700;
		}
	</style>
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
					<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Update Profile Photo :</div>
									</div>
					<!-- <h4 class="page-title mt-4 pro">Update Profile Photo :</h4> -->
                        
						
								<div class="col-12 ml-3 mb-3 mt-4">
								<form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
							      <label for="image">Image : </label>
							      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="">
							      <button type = "submit" name = "submit2">Submit</button>
							    </form>
								</div>
								</div>
	</div>
	</div>
	</div></div></div></div></div>
								<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
					<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Update Profile Photo :</div>
									</div>
						<h4 class="page-title mt-5 pro">Add new photo</h4>
                        
						<div class="row">
								<div class="col-12">
								<form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
							      <label for="image">Image : </label>
							      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
							      <button type = "submit" name = "submit">Submit</button>
							    </form>
								</div>
								<div class="col-12">
								<?php
									include 'showphoto.php';
								?>
								</div>
						</div>
						
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
	
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<!-- <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> -->
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<!-- <script src="assets/js/plugin/chartist/chartist.min.js"></script> -->
<!-- <script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script> -->
<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<!-- <script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script> -->
<!-- <script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script> -->
<!-- <script src="assets/js/plugin/chart-circle/circles.min.js"></script> -->
<!-- <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->
<!-- <script src="assets/js/ready.min.js"></script> -->
<!-- <script src="assets/js/demo.js"></script> -->
</html>