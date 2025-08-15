<?php
require 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin -Report</title>
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
						<h4 class="page-title">Reports</h4>
						<div class="row">
							
                        </div>
                        <div class="card">
									
									<div class="card-body">
										
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr class="thh">
														<th>Report Id</th>
														<th>Client</th>
														<th>Vendor</th>
														<th>Title Of Report</th>
														<th>Discription Of Report</th>
														<th>Accept</th>
														<th>Delete</th>

													</tr>
												</thead>
												<tbody>
													<?php
														

														$sql = "SELECT * FROM report order by report_id desc ";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
														
														    // output data of each row
														    while($row = mysqli_fetch_assoc($result)) {
                                                              $id = $row["report_id"];
															  $c_id = $row["c_id"];
														      $v_id= $row["v_id"];
															  $title =$row["report_title"];
															  $dis = $row["report_dis"];
															 
															  $sql2 = "SELECT * FROM client where c_id='$c_id' ";
																$result2 = mysqli_query($conn, $sql2);
																$row2 = mysqli_fetch_assoc($result2);
																$c_name = $row2["c_username"];


																$sql3 = "SELECT * FROM vendor where v_id='$v_id' ";
																$result3 = mysqli_query($conn, $sql3);
																$row3 = mysqli_fetch_assoc($result3);
																$v_name = $row3["v_username"];
														      ?>
													<tr>
														<th scope="row"><?php echo $id ?></th>
														<td> <?php echo $c_id.'( '.$c_name.' )';?> </td>
														<td><?php echo $v_id .'( '.$v_name.' )'; ?></td>
														<td><?php echo $title ?></td>	
														<td><?php echo $dis ?></td>
														
														<td>
														  <a href="emailreport.php?id=<?php echo $id ;?>" class="tda">Accept</a>
														</td>
														<td>
														  <a href="deletereport.php?id=<?php echo $id ;?>" class="tdd">Delete</a>
														</td>
													</tr>
															
															
														      <?php
														    }
														
														  } else {
														
														    echo "0 results";
														  }

														  
														  ?>
												</tbody>
											</table>
										</div>
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