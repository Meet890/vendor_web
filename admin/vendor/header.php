<?php
$ID= $_SESSION["id"];
      
$result = mysqli_query($conn, "SELECT v_photo FROM vendor WHERE v_id = $ID ");

while($row = $result->fetch_assoc()) {
	if($row['v_photo']==""){
		$img ="../../user2.png";
		//echo '<script>  alert("hello"); </script>';
	}
	else{
		$img = "img/".$row["v_photo"];
		//echo $img;
		//echo '<script>  alert("1"); </script>';
	}
}

?>
<div class="logo-header">
				<a href="index.php" class="logo">
				Kachchhivent
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?php echo  $img; ?>" alt="user-img" width="36" height="36" class="img-circle"><span ><?php echo $_SESSION["username"]; ?> </span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="<?php echo  $img; ?>" alt="user"></div>
										<div class="u-text">
											<h4><?php echo $_SESSION["username"]; ?> </h4>
											
									
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>