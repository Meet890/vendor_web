<?php 

if(!isset($_SESSION["a_id"]) ||( $_SESSION["loggedin"] === true)){
    header("location: ../login.php");
    exit;
}
?>
<div class="scrollbar-inner sidebar-wrapper text-black">
					
					<ul class="nav">
						<li class="nav-item ">
							<a href="index.php">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
								<span class="badge badge-count"></span>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="register.php">
								<i class="la la-keyboard-o"></i>
								<p>Register</p>
								<span class="badge badge-count">50</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="tables.php">
								<i class="la la-th"></i>
								<p>Tables</p>
								<span class="badge badge-count">6</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="vendor.php">
								<i class="la la-table"></i>
								<p>Vendor</p>
								<span class="badge badge-count"></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="add.php">
								<i class="la la-user-plus"></i>
								<p>Add New Admin</p>
								<span class="badge badge-count">14</span>
							</a>
						</li>
					</ul>
				</div>