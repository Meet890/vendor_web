<div class="scrollbar-inner sidebar-wrapper text-black">
<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="assets/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
								<?php echo $_SESSION["username"]; ?>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" >
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="forms.php">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item ">
							<a href="index.php">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
								<span class="badge badge-count"></span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="components.php">
								<i class="la la-table"></i>
								<p>Components</p>
								
							</a>
						</li> -->
						<!-- <li class="nav-item">
							<a href="forms.php">
								<i class="la la-keyboard-o"></i>
								<p> Edit Profile</p>
								
							</a>
						</li> -->
						<!-- <li class="nav-item">
							<a href="tables.php">
								<i class="la la-th"></i>
								<p>Tables</p>
								
							</a>
						</li> -->
						
                        <li class="nav-item">
							<a href="gallery.php">
								<i class="la la-table"></i>
								<p>gallery</p>
								<span class="badge badge-count"></span>
							</a>
						</li>
						
					</ul>
</div>
</div>
</div>