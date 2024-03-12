<?php
require 'config.php';


   
    if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$validUserName="/^[A-Za-z0-9_]+$/";
	$uppercasePassword = "/(?=.*?[A-Z])/";
	$lowercasePassword = "/(?=.*?[a-z])/";
	$digitPassword = "/(?=.*?[0-9])/";

    $username =$_POST["username"];
$password= $_POST['pass'];

if(empty($username)){
	$login_err="username is Required"; 
 }
 else if (!preg_match($validUserName,$username)) {
	$login_err="Only characters and digits are allowed";
 }else{

	 $login_err=true;

 }
 if(empty($password)){
	$login_err="Password is Required"; 
  } 
  elseif (!preg_match($uppercasePassword,$password) || !preg_match($lowercasePassword,$password) || !preg_match($digitPassword,$password)) {
	$login_err="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
  }
  else{
	 $login_err=true;
  }

if($login_err==1){

$sql="INSERT INTO admin_tbl(a_username,a_password) VALUES ('$username', '$password')";
   $result= mysqli_query($conn,$sql);
   if($result==false){
    echo mysqli_error($conn);
   }
   else{
    echo '<script>  alert("Added new admin"); </script>';
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
						<h4 class="page-title">Add Admin</h4>

						<div class="row">
                            <div class="col-3"></div>
								<div class="col-3 justify-content-center ">
                                    <div class="card ">
									<?php
                  if(!empty($login_err)){
                         echo '<div class="alert alert-danger">' . $login_err . '</div>';
                     }
                ?>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="p-3">
                                            <label for="username">Username: </label><br>
                                            <input type="text" id="username" name="username"><br><br>
                                            <label for="password">Password: </label><br>
                                            <input type="password" id="pass" name="pass">
                                            <button type="submit" name ="submit">Submit</button>

                                        </form>
                                    </div>
                            </div>
						</div>
                        <div class="card">
									<div class="card-header">
										<div class="card-title">Admin record table</div>
									</div>
									<div class="card-body">
										
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>id</th>
														
														<th>Admin Username</th>
														<th>Admin Password</th>
														<th>delete</th>

													</tr>
												</thead>
												<tbody>
													<?php
														

														$sql = "SELECT * FROM admin_tbl where a_username <> 'admin'";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
														
														    // output data of each row
														    while($row = mysqli_fetch_assoc($result)) {
                                                              $id = $row["a_id"];
														      $username= $row["a_username"];
															  $password=$row["a_password"];
														      ?>
													<tr>
														<th scope="row"><?php echo $id ?></th>
														
														<td><?php echo $username  ?></td>
														<td><?php echo $password  ?></td>
														
														<td>
														  <a href="delete.php?id=<?php echo $id ;?>?table=admin_tbl">Delete</a>
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
<!-- <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>