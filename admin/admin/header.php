<?php 
session_start();
if(!isset($_SESSION["a_id"]) && $_SESSION["loggedin"] === true){
    header("location: ../login.php");
    exit;
}elseif(isset($_SESSION["c_username"])&& $_SESSION["loggedin"] = true){
	header("location:../../client/login/login.php");
}
elseif(!isset($_SESSION["a_username"])&& $_SESSION["loggedin"] = false){
	header("location:../../index.php");
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
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/profileimg.png" alt="user-img" width="36" class="img-circle"><span ><?php echo $_SESSION['a_username'];?></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="assets/img/profileimg.png" alt="user"></div>
										<div class="u-text">
											<h4><?php echo $_SESSION['a_username'];?></h4>
											
									
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../Logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>