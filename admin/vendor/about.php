<?php
require 'config.php';
require '../session.php';
// $about ="";
    $username =$_SESSION["username"];
    error_reporting(0);
    $sql ="SELECT v_discription FROM vendor WHERE v_username= '$username'";
    $result = mysqli_query($conn, $sql); 
   
    while ($row = $result->fetch_assoc()) {
       $about =$row["v_discription"]; 
       }
 

     if(isset($_POST['about']))
     {
      $about=$_POST['v_discription'];
      
      $sql = "UPDATE vendor SET v_discription = '$about' WHERE v_username = '$username'";
     $data = mysqli_query($conn,$sql);
     if(isset($data))
      {
        header("location:about.php");
        }
    }
// require 'aboutphp.php';

if(!isset($_SESSION["username"])){
	header("location:../login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
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
										<h4><p class="err-msg">
                								<?php if($pro!=1){ echo $pro; }?>
               								</p> </h4>

			
                        <div class="form-group">
												<label for="comment">About</label>
												<textarea class="form-control" id="comment" rows="7" name="v_discription" style="white-space: pre-wrap;"><?php echo $about; ?></textarea>
											  </div>

                        <div class="card-action">
											    <button class="btn btn-success" name="about">Submit</button>
											    <!-- <button class="btn btn-danger">Cancel</button> -->
										    </div>
                  </div>
</form> 
                </div>            
                <script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
  </body>
</html>




