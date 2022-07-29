
<?php
		 
         include_once('../../includes/DB_connection.php');
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
  
            $client_name = $_POST['client_name'];
            $client_description= $_POST['client_description'];
            $client_job= $_POST['client_job'];
            $img_n = $_FILES['image']['name'];
            $img_t = $_FILES['image']['tmp_name'];
            $img_ext = strtolower(pathinfo($img_n, PATHINFO_EXTENSION));
            $img_new_n = strval(time() + rand(1, 1000000000). ".$img_ext");
            $img_path = '../../uploads/images/' .$img_new_n;
            move_uploaded_file($img_t, $img_path);
    
            $inser = "INSERT INTO clients ( client_name,client_description,client_job,image) VALUES ( '$client_name', '$client_description','$client_job','$img_new_n' )";
            $resut = mysqli_query($connection, $inser);

            if ($resut) {
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
									<span class="user-level">Web developer</span>               <span class="caret"></span>
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
                                     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id=664544';?>" method="POST" id="my-form" enctype="multipart/form-data">   
                                        <div class="form_group">
                                            <label for="client_name">name of client</label>
                                            <input type="text" name="client_name" class="form-control"   >
                                        </div>
                                        <div class="form_group">
                                            <label for="client_description">description of client</label>
                                            <input type="text" name="client_description" class="form-control"   >
                                        </div>
                                        <div class="form_group">
                                            <label for="client_job">job of client</label>
                                            <input type="text" name="client_job" class="form-control"   >
                                        </div>
                                        <div class="form_group">
                                            <label for="image">image for the client</label>
                                            <input type="file" name="image" class="form-control"   >
                                        </div>
                                    
                                        <br>
                                        <button class="btn btn-primary" type="submit" id="save-btn">Add</button>
                                    </form>
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
 
 
 
 

