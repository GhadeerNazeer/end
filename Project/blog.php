
<?php
 
 include_once('dashbord/includes/DB_connection.php');


?>
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from retrina.com/demo/arshia/cv/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 04:54:51 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Arshia - Fully Responsive Personal Template</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Retrina Group" />

        <!--  FavIcon  -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">

        <!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

        <!-- FontAwesome Css -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Line icon Css -->
        <link rel="stylesheet" href="assets/css/LineIcons.css">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- Owl Carousel Css -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Magnific Popup Css -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Colors Css -->
        <link rel="stylesheet" href="assets/css/color/green-color.css" id="option-color">
        <!--  Custom Style CSS  -->
        <link rel="stylesheet" href="assets/css/main.css">

    </head>

    <body data-spy="scroll" data-target="#scrollspy" data-offset="1" class="flat-demo">

    <!--  Pre Loader  -->
    <div id="overlayer"></div>
    <span class="loader"></span>

    <!--   Header Start -->
    <header>
        <div class="header-navbar h-100">
            <a class="navbar-brand" href="colorfull.html"><b>A</b><span>Arshia</span></a>
            <ul class="list-group menu text-center" id="menu">
                <li class="list-group-item"><a href="colorfull.php"><i class="fa fa-home"></i><span>home</span></a></li>
                <li class="list-group-item"><a href="portfolio.php"><i class="fa fa-briefcase"></i><span>works</span></a></li>
                <li class="list-group-item"><a class="active" href="blog.php"><i class="fa fa-file-text"></i><span>blog</span></a></li>
            </ul>
            <div class="menu-toggler">
                <span>
                    <i class="text-white lni-menu"></i>
                </span>
            </div>
        </div>
    </header>
    <!--   Header End   -->

    <main id="main">

        <!--  Blog Start  -->
        <section id="blog" class="section blog active">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center title">
                                    <h2 class="text-dark">News <span class="base-color">Post</span></h2>
                                    <?php
                                        $import="SELECT description from main";
                                        $out= mysqli_query($connection ,$import);
                                        $row =mysqli_fetch_assoc($out);
                                        echo ' <p class="text-muted mb-5 max-width-450"> '.$row['description'].'</p>';
                                        
                                   ?>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--  Item 01 -->
                            <?php 
                                    $import_job="SELECT * from posts";
                                    $out= mysqli_query($connection ,$import_job);
                                    while( $row = mysqli_fetch_assoc($out)){
                                        echo '<div class="col-lg-4">
                                <div class="blog-item box-border">
                                    <div class="blog-image">
                                        <div class="blog-intro">'; 
                                        echo '<img src="dashbord/uploads/images/'.$row['image'].'">';
                                        echo '</div></div> ';
                                        echo '<div class="blog-content">
                                        <ul class="list-inline mt-4">
                                                <li class="list-inline-item">
                                                    <i class="lni-calendar data-text-color" data-color="#ff5380"></i> ';
                                        echo '<span class="text-muted">'.$row['post_date'].'</span></li>';
                                        echo '<li class="list-inline-item">
                                                    <i class="lni-comment data-text-color" data-color="#fbdd62"></i>'; 
                                         
                                        echo '<span class="text-muted">'.$row['number_of_comments'].'</span></li>
                                            </ul>';
                                       echo '<h5 class="mb-3"><a class="text-dark" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single"> '.$row['post_name'].'</a></h5>';
                                       echo '<p">'.$row['post_desc'].'</p>'; 
                                       echo '<div class="blog-link">
                                            <a class="base-color" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                                    }
                                         
                                     ?>     
 
                            <!--  Item 03 -->
                        
                            <!--  Item 04 -->
                            
                            <!--  Item 05 -->
                           
                            <!--  Item 06 -->
                     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Blog End   -->

        <!--   Aside Start   -->
        <aside class="post-sidebar">
            <!-- Toggler Button -->
            <div class="post-sidebar-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="post-sidebar-content">
                <!-- Search -->
                <div class="search">
                    <form action="#" role="search" method="get">
                        <div class="position-relative  form-group">
                            <input type="text" placeholder="Enter your keywords..." id="search" name="s">
                            <button type="submit" id="searchsubmit" class="btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- Recent Posts -->
                <div class="aside-contents">
                    <div class="aside-title">
                        <span class="base-color">Recent Posts</span>
                    </div>
                    <div class="aside-item">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">Be Your Best Version</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">5 Tips In UI/UX Web Design</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">Write Your Dreams</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">Learn HTML5 and CSS3 in 5 days</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">Witch one is better? React or Vue?</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Recent Comments -->
                <div class="aside-contents">
                    <div class="aside-title">
                        <span class="base-color">Recent Comments</span>
                    </div>
                    <div class="aside-item">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">A WordPress Commenter on Hello world!</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">There are 3 ways to know witch one is better? I say Vue</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">Thanks for your Html 5 and Css 3 learning. That was awesome.</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Categories -->
                <div class="aside-contents">
                    <div class="aside-title">
                        <span class="base-color">Categories</span>
                    </div>
                    <div class="aside-item">
                        <ul class="list-unstyled mb-0">
                            <li class="cat-item"><i class="fa fa-circle-o base-color"></i><a href="#">Develop</a></li>
                            <li class="cat-item"><i class="fa fa-circle-o base-color"></i><a href="#">Logo Design</a></li>
                            <li class="cat-item"><i class="fa fa-circle-o base-color"></i><a href="#">UI and UX</a></li>
                            <li class="cat-item"><i class="fa fa-circle-o base-color"></i><a href="#">Web Design</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Archives -->
                <div class="aside-contents">
                    <div class="aside-title">
                        <span class="base-color">Archives</span>
                    </div>
                    <div class="aside-item">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">November 2020</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">October 2020</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">July 2020</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">April 2020</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Tags -->
                <div class="aside-contents">
                    <div class="aside-title">
                        <span class="base-color">Tags</span>
                    </div>
                    <div class="aside-item blog-single-tag mb-0">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">CSS3</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">HTML5</a></li>
                            <li><i class="fa fa-circle-o base-color"></i><a href="#">Web Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!--   Aside End   --> 

        <!-- Contact Start -->
        <section id="contact" class="section contact">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row copy-right">
                            <div class="col-12 text-center">
                                <p>Copyright © 2019. Template has been designed by <span class="base-color">Retrina</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Contact End  -->

    </main>

    <!-- Start Options -->
    <div id="color-switcher" class="color-switcher" >
        <div class="text-center color-pallet hide">
            <h6 class="theme-skin-title">Theme Skin</h6>
            <ul class="theme-skin list-inline">
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="flat-skin active">Flat</a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="neo-skin">Neo</a>
                </li>
            </ul>
            <h6 class="text-center mt-3">Select your color</h6>
            <ul class="pattern">
                <li>
                    <a class="color1" href="#"></a>
                </li>
                <li>
                    <a class="color2" href="#"></a>
                </li>
                <li>
                    <a class="color3" href="#"></a>
                </li>
                <li>
                    <a class="color4" href="#"></a>
                </li>
                <li>
                    <a class="color5" href="#"></a>
                </li>
                <li>
                    <a class="color6" href="#"></a>
                </li>
                <li>
                    <a class="color7" href="#"></a>
                </li>
                <li>
                    <a class="color8" href="#"></a>
                </li>
                <li>
                    <a class="color9" href="#"></a>
                </li>
            </ul>
            <h6 class="my-2 color-scheme-title">Light & Dark Version</h6>
            <ul class="color-scheme list-inline">
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="light-scheme active"><i class="lni-sun"></i> Light</a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="dark-scheme"><i class="lni-night"></i> Dark</a>
                </li>
            </ul>
        </div>
        <div class="pallet-button hide">
            <a href="#" class="cp-toggle"><i class="fa fa-cog fa-spin"></i></a>
        </div>
    </div>
    <!-- End Options -->

    <!--  JavaScripts  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!--  Bootstrap Js  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Easing Js  -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  CountTo Js  -->
    <script src="assets/js/jquery.countTo.js"></script>
    <!--  Typed Js  -->
    <script src="assets/js/typed.js"></script>
    <!--  Magnific Popup Js  -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--  Isotope Js  -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  Owl Carousel Js  -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--  Custom JS  -->
    <script src="assets/js/arshia.js"></script>

    </body>

<!-- Mirrored from retrina.com/demo/arshia/cv/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 04:54:51 GMT -->
</html>