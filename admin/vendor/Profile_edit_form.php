
<?php
require '../session.php';
if(!isset($_SESSION["username"])){
	header("location:../login.php");
}
require 'profile_update.php';
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
						<h4 class="page-title">Dashboard</h4>
						<div class="row">
							<div class="col-10">
							<form action="Profile_update.php" method="post">


								

										

										<!-- email -->
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email" placeholder="Enter Email" name="v_email">
											<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
										</div>
										<!-- <div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password" placeholder="Password">
										</div> -->
										<!-- <div class="form-group form-inline">
											<label for="inlineinput" class="col-md-3 col-form-label">Inline Input</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="inlineinput" placeholder="Enter Input">
											</div>
										</div> -->

										<!-- address -->
										<div class="form-group ">
											<label for="successInput">Address</label>
											<input type="text" id="Address" value="" class="form-control" name="v_address">
											<!-- <p class="err-msg">
												<?php if($AddErr!=1){ echo $AddErr; }?>
											   </p> -->
										</div>

										<!-- phone no -->
										<div class="form-group">
											<label for="errorInput">Phone no.</label>
											<input type="text" id="Phone no" value="" class="form-control" name="v_phoneno">
											 <!-- <p class="err-msg"> 
												  <?php if($phoneErr!=1){ echo $phoneErr; } ?> 
											</p> -->
										</div>

										<!-- gender -->
										

											<!-- profile photo -->
											<div class="form-group">
												<label for="exampleFormControlFile1">Choose profile photo</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1" name="v_photo">
											</div>

											<!-- about -->
											<!-- <div class="form-group">
												<label for="comment">About us</label>
												<textarea class="form-control" id="comment" rows="5" name="p_about">

												</textarea>
											</div> -->

											<!-- ig id -->
											<div class="form-group">
												<label for="email">Instagram Id link</label>
												<input type="email" class="form-control" id="email" placeholder="Enter Instagram id" name="v_iglink">
												<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
											</div>

											<!-- fb id -->
											<div class="form-group">
												<label for="email">Face book Id link</label>
												<input type="email" class="form-control" id="email" placeholder="Enter Facebook id" name="v_fblink">
												<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
											</div>


											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="">
													<span class="form-check-sign">Agree with terms and conditions</span>
												</label>
											</div>
										</div>
										<div class="card-action">
											<button class="btn btn-success" name="edit">Submit</button>
											<button class="btn btn-danger">Cancel</button>
										</div>
								<!-- <input type="submit" name="edit"> -->

								</form>

							</div>					
						</div>
						
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
	
</body>
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
</html>