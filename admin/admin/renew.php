<?php
require 'config.php';


?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin Add new vwndor</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="tables.css">

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
						<h4 class="page-title">Renew Vendor</h4>

						
						</div>
                        <div class="card">
									<div class="card-header">
										<div class="card-title"></div>
									</div>
									<div class="card-body">
										
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr class="thh">
														<th>Id</th>
														<th>Name</th>
														<th>Username</th>
														
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
														<th>Gender</th>
														<th>Company</th>
														<th>Transaction Id</th>
														<th>Registered?</th>
														<th>Accept </th>
														
														<th>Delete</th>

													</tr>
												</thead>
												<tbody>
													<?php
														

														$sql = "SELECT * FROM registration where reg_accept='3' order by reg_accept  ";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
														
														    // output data of each row
														    while($row = mysqli_fetch_assoc($result)) {
                                                              $id = $row["reg_id"];
															  $name = $row["reg_name"];
														      $username= $row["reg_username"];
															
															  $phone =$row["reg_phone"];
															  $email = $row["reg_email"];
															  $add = $row["reg_add"];
															  $gender = $row["reg_gen"];
															  $comp = $row["reg_com"];
															  $tra_id = $row['reg_tra_id'];
															  $accept = $row['reg_accept'];
															  if ($accept=="0"){
																$accept ="No";
															  }
															  else if($accept=="1"){
																$accept ="Yes";

															  }elseif($accept=="3"){
                                                                $accept ="Request for renew";
                                                              }
															  
														      ?>
													<tr>
														<th scope="row"><?php echo $id ?></th>
														<td> <?php echo $name;?> </td>
														<td><?php echo $username  ?></td>
														
														<td><?php echo $phone ?></td>	
														<td><?php echo $email ?></td>
														<td><?php echo $add ?></td>
														<td><?php echo $gender ?></td>
														<td><?php echo $comp ?></td>
														<td><?php echo $tra_id ?></td>
														<td><?php echo $accept ?></td>
														<td>
														  <a href="acceptrenew.php?id=<?php echo $id ;?>" class="tda">Accept</a>
														</td>
														<td>
														  <a href="deletereg.php?id=<?php echo $id ;?>" class="tdd">Delete</a>
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
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>