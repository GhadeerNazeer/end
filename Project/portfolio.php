<!DOCTYPE html>
<html lang="en">

<?php
    include_once('dashbord/includes/DB_connection.php');

  ?>  
<!-- Mirrored from retrina.com/demo/arshia/cv/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 04:54:51 GMT -->
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
        <link rel="stylesheet" href="assets/css/color/blue-color.css" id="option-color">
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
            <a class="navbar-brand" href="colorfull.php"><b>A</b><span>Arshia</span></a>
            <ul class="list-group menu text-center" id="menu">
                <li class="list-group-item"><a href="colorfull.php"><i class="fa fa-home"></i><span>home</span></a></li>
                <li class="list-group-item"><a class="active" href="portfolio.php"><i class="fa fa-briefcase"></i><span>works</span></a></li>
                <li class="list-group-item"><a href="blog.php"><i class="fa fa-file-text"></i><span>blog</span></a></li>
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

        <!-- Portfolio Start -->
        <section id="portfolio" class="portfolio active">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center title">
                                    <h2 class="text-dark">My <span class="base-color">Works</span></h2>
                                    <?php
                                        $import_desc="SELECT description from main";
                                        $outtt= mysqli_query($connection ,$import_desc);
                                        $row =mysqli_fetch_assoc($outtt);
                                        echo '<p class="text-muted max-width-450 mb-5">'.$row['description'].'</p>';
                                        
                                    ?>                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--   Portfolio Filters   -->
                            <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 text-center portfolio-filter">
                                <li class="button-border list-inline-item">
                                    <a href="#" data-filter="*" class="pill-button active">All</a>
                                </li>
                                <li class="button-border list-inline-item">
                                    <a href="#" data-filter=".webdesign" class="pill-button">Web Design</a>
                                </li>
                                <li class="button-border list-inline-item">
                                    <a href="#" data-filter=".mobiledesign" class="pill-button">Mobile Design</a>
                                </li>
                                <li class="button-border list-inline-item">
                                    <a href="#" data-filter=".seo" class="pill-button">Seo</a>
                                </li>
                                <li class="button-border list-inline-item">
                                    <a href="#" data-filter=".graphic" class="pill-button">Graphic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-items row">
                            <!-- Item 01 -->
                            <?php 
                                    $import_job="SELECT * from works";
                                    $out= mysqli_query($connection ,$import_job);
                                    while( $row = mysqli_fetch_assoc($out)){
                                        echo '<div class="col-lg-4 portfolio-item webdesign">
                                <div class="image-border">
                                    <div class="portfolio-item-content">';
                                        echo '<img src="dashbord/uploads/images/nm.png" class="img-fluid">';
                                        echo '<div class="img-overlay text-center">
                                            <div class="img-overlay-content">
                                                <div class="portfolio-icon">';


                                       echo '<a href="elan/'.$row['link'].'" ><i class="lni-link"></i></a>' ;  
                                     
                                        
                                       echo '<a href="dashbord/uploads/images/'.$row['image'].'" class="js-zoom-gallery">';
                                        
                                        echo' <i class="lni-search"></i>
                                               </a>
                                              </div>
                                                <h5 class="mt-3 mb-0">My Work</h5>';
                                               
                                        echo '</div>
                                        </div>
                                    </div>
                                </div>
                            </div> ';  
                              
                                

                                    }
                                                            
                                ?>  
                         
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center pt-2">
                                <div class="button-border d-inline-block">
                                    <button class="pill-button showMore" id="showMore">Show More</button>
                                    <span id="showMore-initials" class="d-none" class="d-none" data-initial="6" data-next="3"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Portfolio End  -->

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

<!-- Mirrored from retrina.com/demo/arshia/cv/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 04:54:51 GMT -->
</html>