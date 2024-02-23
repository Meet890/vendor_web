<?php
require 'config.php';

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
							
							<div class="col-md-4">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-bar-chart"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
                                                <?php
                                                    $sql = "SELECT * FROM vendor";
                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        $a=0;
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                            $a += 100;
                                                        }
                                                    ?>
													<p class="card-category">Earning</p>
													<h4 class="card-title"><?php echo $a ?></h4>
                                                    <?php
                                                    } else {
                                                        ?>
                                                        <p class="card-category">Earning</p>
													    <h4 class="card-title">0</h4>
                                                        <?php
                                                        
                                                    }

                                                    ?>

												
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-stats card-danger">
                                <a href = "tables.php#vendors">
									<div class="card-body">

										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-newspaper-o"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
                                                
                                                    <?php
                                                    $sql = "SELECT * FROM vendor";
                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        $a=0;
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                            $a += 1;
                                                        }
                                                    ?>
													<p class="card-category">Vendors</p>
													<h4 class="card-title"><?php echo $a ?></h4>
                                                    <?php
                                                    } else {
                                                        ?>
                                                        <p class="card-category">Vendors</p>
													    <h4 class="card-title">0</h4>
                                                        <?php
                                                        
                                                    }

                                                    ?>
                                            
												</div>
											</div>
										</div>
									</div>
                                </a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-stats card-primary">
								<a href = "tables.php#vendors">	
                                <div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-check-circle"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
                                                <?php
                                                    $sql = "SELECT * FROM client";
                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        $a=0;
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                            $a += 1;
                                                        }
                                                    ?>
													<p class="card-category">Users</p>
													<h4 class="card-title"><?php echo $a ?></h4>
                                                    <?php
                                                    } else {
                                                        ?>
                                                        <p class="card-category">Users</p>
													    <h4 class="card-title">0</h4>
                                                        <?php
                                                        
                                                    }

                                                    ?>
												</div>
											</div>
										</div>
									</div>
                                </a>
								</div>
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
<!-- <script src="assets/js/plugin/chart-circle/circles.min.js"></script> -->
<!-- <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>