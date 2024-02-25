<?php

require 'config.php';
require '../session.php';
if(!isset($_SESSION["username"])){
	header("location:../login.php");
}
$username = $_SESSION["username"];

$sql="select v_id,v_name,v_username,v_phoneno,v_email,v_photo,v_address,v_gender,v_comp,v_iglink,v_fblink from vendor where v_username='$username'";
$result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {
         // $id =$row["v_id"];
          $name= $row["v_name"];
		  $username= $row["v_username"];
		  $phone= $row["v_phoneno"];
		  $email=$row["v_email"];
		  $photo=$row["v_photo"];
		 // $pass=$row["v_pass"];
          $city=$row["v_address"];
		  $gender=$row["v_gender"];
		  $compony=$row["v_comp"];
		  $ig=$row["v_iglink"];
		  $fb=$row["v_fblink"];

        }
		
           
//   if(isset($_POST['reg_user']))
//  {
//  $compony_name =  $_POST['v_name'];
//  $servicse = $_POST['v_services'];
//  $email = $_POST['v_email'];
//  $address = $_POST['v_address'];
//  $m_no = $_POST['v_phoneno'];
//  $gender= $_POST['v_gender'];
//  $photo=$_POST['v_photo'];
// //  $about=$_POST['p_about'];
//  $IG = $_POST['v_iglink'];
//  $FB = $_POST['v_fblink'];
//  echo $compony_name;
//  echo $servicse;
//  echo $email;
//  $services = $_POST['p_ser_places'];
//  $profession = $_POST['p_profession'];
 
//  $experience = $_POST['p_experience'];
  
 // Performing insert query execution
 // here our table name is college
//  $sql = "INSERT INTO vendor(p_compony_name, p_services, p_email, p_address, p_phoneno, p_gender, p_photo, p_about,p_IG_id,p_FB_id)  VALUES ('$compony_name','$servicse','$email','$address','$m_no','$gender','$photo','$about','$IG','$FB')";
  
//  $result = mysqli_query($conn, $sql);
//  if ($result) {
//     echo "";

// 	 //echo nl2br("\n$name\n $username\n "
// 		// . "$pass\n $address\n $gender \n $email\n $services\n $profession\n $m_no\n $experience");
//    } 
//  else{
// 	 echo "ERROR: Hush! Sorry $sql. "
// 		 . mysqli_error($conn);
//    }
// }

 // Close connection
//  mysqli_close($conn);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Forms - Ready Bootstrap Dashboard</title>
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
						<!-- <h4 class="page-title">Forms</h4> -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Create Profile</div>
									</div>
									<p class="text-success text-center"></p> <form method="post">

									<div class="card-body">

 										<!-- compony name -->
										<div class="form-group">
											<label for="Compony name">Compony name</label>
											<input type="text" class="form-control" id="email" name="v_name" value="<?php echo $compony; ?>" placeholder=" " required>
											<!-- <p class="err-msg">
                							  <?php if($fnameErr!=1){ echo $fnameErr; }?>
                                            </p> -->
										</div>

										<!-- services-->
										<div class="form-group" >
											<label for="exampleFormControlSelect1">select service</label>
											<select class="form-control" id="exampleFormControlSelect1" name="v_services">
											 <option selected disabled value="">Choose...</option>
				      						 <option value="Decoration">Decoration</option>
				                             <option value="Sound system">Sound system</option>
				                             <option value="Catering">Catering</option>
				                             <option value="Bakery">Bakery</option>
				                             <option value="Photographer">Photographer</option>
				                             <option value="Videographer">Videographer</option>
				                             <option value="Flowers">Flowers</option>
					                         <option value="Venue">Venue</option>
					                         <option value="Invitation">Invitation Card</option>
											</select>
										</div>
									
										<!-- email -->
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" id="v_email" value="<?php echo $email; ?>" name="p_email">
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
											<input type="text" id="Address" value="<?php echo $city; ?>" class="form-control" name="v_address">
											<!-- <p class="err-msg">
                								<?php if($AddErr!=1){ echo $AddErr; }?>
               								</p> -->
										</div>

										<!-- phone no -->
										<div class="form-group">
											<label for="errorInput">Phone no.</label>
											<input type="text" id="Phone no" value="<?php echo $phone; ?>" class="form-control" name="v_phoneno">
											 <!-- <p class="err-msg"> 
                 								 <?php if($phoneErr!=1){ echo $phoneErr; } ?> 
                							</p> -->
										</div>
										
											<!-- profile photo -->
											<div class="form-group">
												<label for="exampleFormControlFile1">Choose profile photo</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1" name="v_photo" value="<?php echo $photo; ?>">
											</div>

											

											<!-- ig id -->
											<div class="form-group">
												<label for="email">Instagram Id link</label>
												<input type="email" class="form-control" id="email"  name="v_iglink" value="<?php echo $ig; ?>">
												<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
											</div>

											<!-- fb id -->
											<div class="form-group">
												<label for="email">Face book Id link</label>
												<input type="email" class="form-control" id="email"  name="v_fblink" value="<?php echo $fb; ?>">
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
											<button class="btn btn-success" name="reg_user">Submit</button>
											<button class="btn btn-danger">Cancel</button>
										</div>
									</div>
								</div>
								
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
</html>

