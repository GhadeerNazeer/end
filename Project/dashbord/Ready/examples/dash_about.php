<?php
		 
		include_once('../../includes/DB_connection.php');
     
        $showw= "SELECT * from about";
        $output= mysqli_query($connection, $showw);
        $row = mysqli_fetch_assoc($output);

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $id=$row['id'];

         $n_birth = $_POST['birth'];
         $n_web= $_POST['web'];
         $n_phone = $_POST['phone'];
         $n_city= $_POST['city'];
         $n_age = $_POST['age'];
         $n_degree = $_POST['degree'];
         $n_mail = $_POST['mail'];
         $n_free = $_POST['freelance'];
         
         $fr = $_POST['visit_office'];

         $updat = "UPDATE about SET id='$id' ,birth_day='$n_birth', website='$n_web',phone ='$n_phone',city='$n_city',age= '$n_age', degree= '$n_degree',Mail= '$n_mail', freelance='$n_free',visit_office='$fr'  WHERE id ='$id' ";
         $resu= mysqli_query($connection, $updat);

         if ($resu) {
             echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';				
         } else {
             echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';				
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
<body><div class="wrapper">
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
									<span class="user-level">Web developer</span>		<span class="caret"></span>
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
						<h4 class="page-title">Forms</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Base Form Control</div>
									</div>
									<div class="card-body">
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id=664544';?>" method="POST" id="my-form" >   
                <div class="form_group">
                    <label for="birth">Birthday</label>
                    <input type="text" name="birth" class="form-control" value="<?php echo htmlspecialchars($row['birth_day']); ?>"   >
                </div>
                <div class="form_group">
                    <label for="web">Website</label>
                    <input type="text" name="web" class="form-control"  value="<?php echo htmlspecialchars($row['website']); ?>"  >
                </div>
                <div class="form_group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control"  value="<?php echo htmlspecialchars($row['phone']); ?>"  >
                </div>

                <div class="links">
                    <div class="form_group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" value="<?php echo htmlspecialchars($row['city']); ?>"   >
                    </div>
                    <div class="form_group">
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control"  value="<?php echo htmlspecialchars($row['age']); ?>"  >
                    </div>
                    <div class="form_group">
                        <label for="degree">Degree</label>
                        <input type="text" name="degree" class="form-control" value="<?php echo htmlspecialchars($row['degree']); ?>"  >
                    </div>
                    <div class="form_group">
                        <label for="mail">Mail</label>
                        <input type="text" name="mail" class="form-control"  value="<?php echo htmlspecialchars($row['Mail']); ?>" >
                    </div>
                    <div class="form_group">
                        <label for="freelance">Freelance</label>
                        <input type="text" name="freelance" class="form-control"  value="<?php echo htmlspecialchars($row['freelance']); ?>" >
                    </div>
                    <div class="form_group">
                        <label for="visit_office">visit office</label>
                        <input type="text" name="visit_office" class="form-control"  value="<?php echo htmlspecialchars($row['visit_office']); ?>" >
                    </div>
                    <br>
                    <div class="form_group">
                          <button class="btn btn-primary" type="submit" id="save-btn">Save</button> </form>

                          <a href="../../about_delete.php"> <button class="btn btn-danger" type="submit" id="save-btn">delete</button>
               </a>
                    </div>
                </div>
         
            

            
									</div>
								</div>
							</div>
						</div>
					</div>
					<footer class="footer">
						<div class="container-fluid">
							<nav class="pull-left">
								<ul class="nav">
									<li class="nav-item">
										<a class="nav-link" href="http://www.themekita.com">
											ThemeKita
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
											Help
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
											Licenses
										</a>
									</li>
								</ul>
							</nav>
							<div class="copyright ml-auto">
								2018, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
							</div>				
						</div>
					</footer>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
					<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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



