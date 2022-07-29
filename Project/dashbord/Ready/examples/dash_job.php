<?php
		include_once('../../includes/DB_connection.php');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
  
            $job_name = $_POST['job_name'];
            $job_description= $_POST['job_description'];
            $img_fine = $_FILES['image']['name'];
            $img_tmp_fine = $_FILES['image']['tmp_name'];
            $img_extt = strtolower(pathinfo($img_fine, PATHINFO_EXTENSION));
            $img_new_fine = strval(time() + rand(1, 1000000000). ".$img_extt");
            $img_pathh = '../../uploads/images/' .$img_new_fine;
            move_uploaded_file($img_tmp_fine, $img_pathh);
    
            $inser = "INSERT INTO jobs( job_name ,job_description , image) VALUES ( '$job_name', '$job_description' ,'$img_new_fine')";
            $resut = mysqli_query($connection, $inser);

            if ($resut) {
                echo '<div class="row ind"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';				
            } else {
                echo '<div class="row ind"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';				
            }
        }
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
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="../../uploads/images/nmm.jpeg" alt="user-img" width="36" class="img-circle"><span >Ghadeer</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="../../uploads/images/nmm.jpeg" alt="user"></div>
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
							<img src="../../uploads/images/nmm.jpeg">
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
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="">
								<i class="la la-dashboard"></i>
								<p>jobs</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="">
								<i class="la la-dashboard"></i>
								<p>show jobs</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="">
								<i class="la la-dashboard"></i>
								<p>skills</p>
							 
							</a>
						</li>
						<li class="nav-item">
							<a href="">
								<i class="la la-dashboard"></i>
								<p>show skills</p>
							 
							</a>
						</li>
					 
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">jobs</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									 
									<div class="card-body">
										<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id=664544';?>" method="POST" id="my-form" enctype="multipart/form-data" >   
												<div class="form_group">
													<label for="job_name">name of job</label>
													<input type="text" name="job_name" class="form-control"   >
												</div>
												<div class="form_group">
													<label for="job_description">description of job</label>
													<input type="text" name="job_description" class="form-control"   >
												</div>
												<div class="form_group">
													<label for="image">image for the job</label>
													<input type="file" name="image" class="form-control" >
												</div>
											
												<br>
												<button class="btn btn-success" type="submit" id="save-btn">Add</button>
										</form>
									 
									</div>
								</div>
							</div>
						</div>
					</div>
			 
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	
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




