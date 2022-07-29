
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Forms - Ready Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../assets/css/ready.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>
 
<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="" class="logo">
					Ready Dashboard
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">1</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 1 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										 
										 
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="dashbord/uploads/images/nmm.jpeg" alt="user-img" width="36" class="img-circle"><span >Ghadeer</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="dashbord/uploads/images/nmm.jpeg" alt="user"></div>
										<div class="u-text">
											<h4>Ghadeer Alsersawi</h4>
											<p class="text-muted">Ghadeer@themekita.com</p><a href="colorfull.php" class="btn btn-rounded btn-danger btn-sm">View website</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									 
									 
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar" >
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="dashbord/uploads/images/nmm.jpeg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Ghadeer
									<span class="user-level">Web developer</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="dashbord/main_view.php">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="dashbord/main_edit.php">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									 
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_about.php">
								<i class="la la-dashboard"></i>
								<p>About me</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_job.php">
								<i class="la la-dashboard"></i>
								<p>jobs</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_lang.php">
								<i class="la la-dashboard"></i>
								<p>languges</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_posts.php">
								<i class="la la-dashboard"></i>
								<p>posts</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_works.php">
								<i class="la la-dashboard"></i>
								<p>works</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_skill.php">
								<i class="la la-dashboard"></i>
								<p>skills</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_education.php">
								<i class="la la-dashboard"></i>
								<p>education</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_experience.php">
								<i class="la la-dashboard"></i>
								<p>experience</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_client.php">
								<i class="la la-dashboard"></i>
								<p>clients</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/Ready/examples/dash_cv.php">
								<i class="la la-dashboard"></i>
								<p>cv</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/works_view.php">
								<i class="la la-dashboard"></i>
								<p>show works</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="dashbord/post_view.php">
								<i class="la la-dashboard"></i>
								<p>show posts</p>
							 
							</a>
						</li>
						 
                        <li class="nav-item">
							<a href="dashbord/contact_view.php">
								<i class="la la-dashboard"></i>
								<p>show contacts</p>
							 
							</a>
						</li>
                        <li class="nav-item">
							<a href="dashbord/lang_view.php">
								<i class="la la-dashboard"></i>
								<p>show languages</p>
							 
							</a>
						</li>
					
						<li class="nav-item">
							<a href="dashbord/view_jobs.php">
								<i class="la la-dashboard"></i>
								<p>show jobs</p>
							 
							</a>
						</li>
					
						<li class="nav-item">
							<a href="dashbord/skill.php">
								<i class="la la-dashboard"></i>
								<p>show skills</p>
							 
							</a>
						</li>
					
						<li class="nav-item">
							<a href="dashbord/educa_view.php">
								<i class="la la-dashboard"></i>
								<p>show education</p>
							 
							</a>
						</li>
					
						<li class="nav-item">
							<a href="dashbord/exper_view.php">
								<i class="la la-dashboard"></i>
								<p>show experience</p>
							 
							</a>
						</li>
						<li class="nav-item">
								<a href="dashbord/cv_view.php">
									<i class="la la-dashboard"></i>
									<p>show cv</p>
								
								</a>
							</li>
						<li class="nav-item">
							<a href="dashbord/client_view.php">
								<i class="la la-dashboard"></i>
								<p>show clients</p>
							 
							</a>
						</li>
					
						
					 
					</ul>
				</div>
			</div>
		 
		</div>
	</div>




</body>
<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugin/chartist/chartist.min.js"></script>
<script src="../assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/js/ready.min.js"></script>
</html>



