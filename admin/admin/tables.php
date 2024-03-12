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
	<link rel="stylesheet" href="tables.css">
	<style>
		
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
						<h4 class="page-title">Tables</h4>
						<div class="row">
							<div class="col">
								
									
								<div class="card">
									<div class="card-header">
										<div class="card-title">client record table</div>
									</div>
									<div class="card-body">
										
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr class="thh">
														<th>id</th>
														<th>Client Name</th>
														<th>Client Username</th>
														<!-- <th>Client Password</th> -->
														<th>Client Email</th>
														<th>Client City</th>
														<th>Client Joined Time</th>
														<!-- <th>Edit</th> -->
														<th>delete</th>

													</tr>
												</thead>
												<tbody>
													<?php
														

														$sql = "SELECT * FROM client";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
														
														    // output data of each row
														    while($row = mysqli_fetch_assoc($result)) {
															  $id=$row["c_id"];
														      $name= $row["c_name"];
														      $username= $row["c_username"];
															  $password=$row["c_password"];
														      $email=$row["c_email"];
														      $city=$row["c_city"];
														      $time =$row["c_time"];

															
														      ?>
													<tr>
														<th scope="row"><?php echo $id ?></th>
														<td><?php echo $name  ?></td>
														<td><?php echo $username  ?></td>
														<!-- <td><?php echo $password  ?></td> -->
														<td><?php echo $email  ?></td>
														<td><?php echo $city  ?></td>
														<td><?php echo $time  ?></td>	
														<!-- <td>
														  <a href = 'update_client.php?id=<?php echo $id ?>'>Edit
														</td> -->
														<td>
														  <a href = 'delete.php?id=<?php echo $id ;?>?client' class="tdd">Delete
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




								<div class="card">
									<div class="card-header">
										<div class="card-title">Vendor record table</div>
									</div>
									<div class="card-body">
										
										<div class="table-responsive">
											<table class="table table-bordered">
											<thead>
													<tr class="thh">
														<th>id</th>
														<th>Vendor Name</th>
														<th>Vendor Username</th>
														<!-- <th>Vendor Password</th> -->
														<th>Vendor Email</th>
														<th>Vendor City</th>
														<th>Vendor Gender</th>
														<!-- <th>Vendor Service places</th> -->
														<th>Vendor Profession</th>
														<th>Instagram Link</th>
														<th>Facebook Link</th>
														
														<th>Vendor Joined Time</th>
														<th>Edit</th>
														<th>View</th>
														<th>delete</th>

													</tr>
												</thead>
												<tbody>
													<?php
														

														$sql = "SELECT * FROM vendor";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
														
														    // output data of each row
														    while($row = mysqli_fetch_assoc($result)) {
																$table= "vendor";
															  $id=$row["v_id"];
														      $name= $row["v_name"];
														      $username= $row["v_username"];
															//   $password=$row["v_password"];
														      $email=$row["v_email"];
														      $city=$row["v_address"];
															  $gender=$row["v_gender"];
															//   $serplc=$row["v_ser_places"];
															  $profession=$row["v_profession"];
															 
															  $ig=$row["v_iglink"];
															  $fb=$row["v_fblink"];
															
															  $dis=$row["v_discription"];
														      

															
														      ?>

													<tr>
														<th scope="row"><?php echo $id ?></th>
														<td><?php echo $name  ?></td>
														<td><?php echo $username  ?></td>
														<!-- <td><?php echo $password  ?></td> -->
														<td><?php echo $email  ?></td>
														<td><?php echo $city  ?></td>
														<td><?php echo $gender  ?></td>
														<!-- <td><?php echo $serplc  ?></td> -->
														<td><?php echo $profession  ?></td>	
														<td><?php echo $ig  ?></td>
														<td><?php echo $fb  ?></td>
														
														<td><?php echo $dis  ?></td>												
														<td class="tda">
														  <a href = 'update.php?rn=$result[name]'onclick='return
														  checkdelete()' class="tda">Edit
														</td>
														<td class="tda">
														  <a href = 'profile.php?id=<?php echo $id;?>'onclick='return
														  checkdelete()' class="tda">View Profile
														</td>
														<td class="tdd">
														  <a href = 'deletev.php?id=<?php echo $id?>?table=<?php echo $table; ?>' class="tdd">Delete
														</td>
													</tr>
															
															
														      <?php
														    }
														
														  } else {
														
														    echo "0 results";
														  }

														  mysqli_close($conn);
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
<script>
	$('#displayNotif').on('click', function(){
		var placementFrom = $('#notify_placement_from option:selected').val();
		var placementAlign = $('#notify_placement_align option:selected').val();
		var state = $('#notify_state option:selected').val();
		var style = $('#notify_style option:selected').val();
		var content = {};

		content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
		content.title = 'Bootstrap notify';
		if (style == "withicon") {
			content.icon = 'la la-bell';
		} else {
			content.icon = 'none';
		}
		content.url = 'index.html';
		content.target = '_blank';

		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
			time: 1000,
		});
	});
</script>
</html>