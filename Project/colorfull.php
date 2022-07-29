
<?php
 
    include_once('dashbord/includes/DB_connection.php');
 

?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from retrina.com/demo/arshia/cv/colorfull.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 04:54:26 GMT -->
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
        <!-- Colorfull Css -->
        <link rel="stylesheet" href="assets/css/color/colorfull-main.css">
    </head>
    <body class="flat-demo">

    <!--  Pre Loader  -->
    <div id="overlayer"></div>
    <span class="loader"></span>

    <!-- Portfolio Single Modal Start -->
    <div class="portfolio-single modal fade" id="portfolio-single" tabindex="-1" role="dialog" aria-labelledby="portfolioModalScrollable" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content text-muted">
                <div class="modal-header">
                    <h5 class="modal-title" id="portfolioModalScrollable">My Work</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="pt-4 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-10 mx-auto">
                                    <div class="text-center">
                                        <h2 class="mb-3">Single <span class="base-color"> Portfolio</span></h2>
                                        <p class="max-width-450">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                    <div class="row contact-info mt-5">
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <div>
                                                    <h6>Created by:</h6>
                                                    <p class="mb-0">Jessy Doe</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 p-title-border mt-3 mt-md-0">
                                            <div class="text-center">
                                                <div>
                                                    <h6 class="contact_detail-title">Completed on:</h6>
                                                    <p class="mb-0">September 30, 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3 mt-md-0">
                                            <div class="text-center">
                                                <div>
                                                    <h6>Skills:</h6>
                                                    <p class="mb-0">HTML5 / PHP / CSS3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <div class="portfolio-single-item image-border">
                                            <img src="assets/img/portfolio-01.jpg" class="d-block" alt="...">
                                        </div>
                                    </div>
                                    <div class="text-md-left mt-5">
                                        <p class="my-3">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                        <p class="mt-3 mb-0">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Portfolio Single Modal End  -->

    <!-- Blog Single Modal Start -->
    <div class="blog-single modal fade" id="blog-single" tabindex="-1" role="dialog" aria-labelledby="blogModalScrollable" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModalScrollable">Blog Single Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--   Blog-single   Start -->
                    <div class="pt-4 pb-5 text-muted">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 mx-auto blog">
                                    <div class="rounded">
                                        <div class="text-md-left">
                                            <h1 class="mb-4 h4">The best way to become a good web designer</h1>
                                            <div class="entry-meta mb-4">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="base-color" href="blog.php"><i class="fa fa-calendar"></i>21 Jul 2020</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="base-color" href="blog.php" title="Posts by admin" rel="author"><i class="fa fa-user"></i>admin</a>                                    
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="base-color" href="blog.php" rel="category tag"><i class="fa fa-folder-open"></i>Logo Design</a>                                    
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="base-color" href="blog.php"><i class="fa fa-comments"></i>No Comments.</a>                                 
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry-image image-border mb-4">
                                                <img src="assets/img/blog-01.jpg" alt="">
                                            </div>
                                            <div class="entry-content box-border p-3">
                                                <p>These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                                <div class="px-md-5 px-3 py-4 quotation">
                                                    <i class="base-color lni-quotation size-md"></i>
                                                    <h6 class="base-color font-italic mb-0">We Love Buna, lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper.</h6>
                                                </div>
                                                <p class="my-3">This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                                <ul class="mt-4 checkmark-list mb-0">
                                                    <!-- Item-01 -->
                                                    <li class="mb-2">
                                                        <span>The purpose of lorem ipsum is to create</span>
                                                    </li>
                                                    <!-- Item-02 -->
                                                    <li class="mb-2">
                                                        <span>In particular, the garbled words of lorem ipsum</span>
                                                    </li>
                                                    <!-- Item-03 -->
                                                    <li class="">
                                                        <span>occasionally circumstances occur in which toil</span>
                                                    </li>
                                                </ul>
                                                <p class="mt-3 mb-0">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                            </div>
                                            <!-- Comments -->
                                            <h2 class="text-left my-4">Comments</h2>
                                            <div id="user-comments" class="comments mt-4 box-border">
                                                <ul class="comment even thread-even depth-1 list-unstyled comments-list m-0" id="comment-1">
                                                    <li id="div-comment-1" class="p-3">
                                                        <div class="comment-wrap">
                                                            <div class="comment-image float-left">
                                                                <div class="commnet-image-border">
                                                                    <img alt="/" src="assets/img/woman.png" class="avatar avatar-65 photo" height="65" width="65">
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    <span>Jessy Doe</span>
                                                                    <p class="text-muted comment-date">July 23, 2020 at 9:32 am</p>
                                                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <span>Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id="div-comment-1-2" class="reply-comment p-3">
                                                        <div class="comment-wrap">
                                                            <div class="comment-image float-left">
                                                                <div class="commnet-image-border">
                                                                    <img alt="/" src="assets/img/woman-avator.png" class="avatar avatar-65 photo" height="65" width="65">
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    <span>Marry Doe</span>
                                                                    <p class="text-muted comment-date">July 23, 2020 at 9:32 am</p>
                                                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <span>Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="comments-devider"></div>
                                                <ul class="comment even thread-even depth-1 list-unstyled comments-list m-0" id="comment-2">
                                                    <li id="div-comment-2" class="p-3">
                                                        <div class="comment-wrap">
                                                            <div class="comment-image float-left">
                                                                <div class="commnet-image-border">
                                                                    <img alt="/" src="assets/img/man.png" class="avatar avatar-65 photo" height="65" width="65">
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    <span>Michael Anderson</span>
                                                                    <p class="text-muted comment-date">July 23, 2020 at 9:32 am</p>
                                                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <span>Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="comments-devider"></div>
                                                <ul class="comment even thread-even depth-1 list-unstyled comments-list m-0" id="comment-3">
                                                    <li id="div-comment-3" class="p-3">
                                                        <div class="comment-wrap">
                                                            <div class="comment-image float-left">
                                                                <div class="commnet-image-border">
                                                                    <img alt="/" src="assets/img/woman-avator.png" class="avatar avatar-65 photo" height="65" width="65">
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    <span>Olivia Anderson</span>
                                                                    <p class="text-muted comment-date">July 23, 2020 at 9:32 am</p>
                                                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <span>Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--Blog Reply-->
                                            <div class="contact mt-4">
                                                <div class="contact-form">
                                                    <h2 class="text-left mb-4">Leave a reply</h2>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 form-item">
                                                                <div class="form-group">
                                                                    <input name="name" id="blog-name" type="text" class="form-control" placeholder="Your Name*" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 form-item">
                                                                <div class="form-group">
                                                                    <input name="email" id="blog-email" type="email" class="form-control" placeholder="Your Email*" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-item">
                                                                <div class="form-group">
                                                                    <textarea name="comments" id="blog-comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-4 text-left">
                                                                <div class="button-border">
                                                                    <button type="submit" class="pill-button" id="blog-submit-btn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
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
            </div>
        </div>
    </div>
    <!--  Blog Single Modal End  -->

    <!--   Header Start -->
    <header>
        <div class="header-navbar h-100">
            <a class="navbar-brand" href="#"><b>A</b><span>Arshia</span></a>
            <ul class="list-group menu text-center" id="menu">
                <li class="list-group-item"><a class="active" href="#hero"><i class="fa fa-home"></i><span>home</span></a></li>
                <li class="list-group-item"><a href="#about"><i class="fa fa-user"></i><span>about</span></a></li>
                <li class="list-group-item"><a href="#resume"><i class="fa fa-address-book"></i><span>resume</span></a></li>
                <li class="list-group-item"><a href="#portfolio"><i class="fa fa-briefcase"></i><span>works</span></a></li>
                <li class="list-group-item"><a href="#blog"><i class="fa fa-file-text"></i><span>blog</span></a></li>
                <li class="list-group-item"><a href="#contact"><i class="fa fa-envelope-open"></i><span>contact</span></a></li>
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

        <!--  Hero Start  -->
        <section id="hero" class="section hero-06 active">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="hero-content">
                                    
                                  
                                  <?php
                                    $import="SELECT name from main";
                                    $out= mysqli_query($connection ,$import);
                                    $row =mysqli_fetch_assoc($out);
                                    echo '<h1 class="mb-3">I am '.$row['name'].'</h1>';
                                    
                                    ?>
                                    <?php
                                    $import_job="SELECT job from main";
                                    $outt= mysqli_query($connection ,$import_job);
                                    $row =mysqli_fetch_assoc($outt);
                                    echo '<h4 class="text-capitalize mb-0"><span class="base-color">A  </span> '.$row['job'].'</h4>';
                                    
                                    ?>
                         
                                    <?php
                                    $import_desc="SELECT description from main";
                                    $outtt= mysqli_query($connection ,$import_desc);
                                    $row =mysqli_fetch_assoc($outtt);
                                    echo '<p class="max-width-450 mx-0 my-4">'.$row['description'].'</p>';
                                    
                                    ?>
                          
                                    <ul class="list-inline hero-social">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);">
                                                <img src="assets/img/facebook.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);">
                                                <img src="assets/img/twitter.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);">
                                                <img src="assets/img/github.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);">
                                                <img src="assets/img/linkedin.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="hero-images">
                                    <div class="square">
                                        
                                        <img src="assets/img/element_square.png" alt="/">
                                    </div>
                                    <div class="circle"></div>
                                    <div class="circle-2"></div>
                                    <div class="circle-3"></div>
                                    <div class="floating"></div>
                                    <div class="rounded-circle">
                                    <?php
                                        $import_img="SELECT image from main";
                                        $outs= mysqli_query($connection ,$import_img);
                                        $row =mysqli_fetch_assoc($outs);
                                        echo '<img src="dashbord/uploads/images/'.$row['image'].'"class ="rounded-circle img-fluid">';
                                        
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Hero End  -->

        <!--   About Start   -->
        <section id="about" class="section about">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center title">
                                    <h2 class="text-dark">About <span class="base-color">Me</span></h2>
                                    <?php
                                        $import_desc="SELECT description from main";
                                        $outtt= mysqli_query($connection ,$import_desc);
                                        $row =mysqli_fetch_assoc($outtt);
                                        echo '<p class="text-muted max-width-450 mb-5">'.$row['description'].'</p>';
                                        
                                    ?>
                                        <?php
                                        /*
                                           $import_des="SELECT description from main";                                  
                                           $out= mysqli_query($connection ,$import);
                                           $row =mysqli_fetch_assoc($out);
                                          echo '<p class="max-width-450 mx-0 my-4" '.$row['description'].'</p>';*/
                                        ?> 
                             
  
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-border">
                                <?php
                                        $import_img="SELECT image from main";
                                        $outs= mysqli_query($connection ,$import_img);
                                        $row =mysqli_fetch_assoc($outs);
                                        echo '<img src="dashbord/uploads/images/'.$row['image'].'">';
                                        
                                    ?>
                                     
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="personal-item ">
                                 <?php
                                        $import_job ="SELECT job from main";
                                        $outtt= mysqli_query($connection ,$import_job);
                                        $row =mysqli_fetch_assoc($outtt);
                                        echo '<h3 class="text-dark mt-4 mt-lg-0"><span class="base-color"> '.$row['job'].'</span></h3>';
                                        
                                    ?>
                                  
                                    <div class="row">
                                        <div class="col-6 personal-info">
                                            <ul class="list-unstyled pt-4">
                                                <li>
                                                    <?php
                                                        $import="SELECT birth_day from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<p> Birthday : <span>  '.$row['birth_day'].'</span></p>';
                                                        
                                                    ?>
                                                 </li>
                                                <li>
                                                <?php
                                                        $import="SELECT website from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<p> website : <span>  '.$row['website'].'</span></p>';
                                                        
                                                    ?>
                                                 </li>
                                                <li>
                                                <?php
                                                        $import="SELECT phone from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<p>  Phone : <span> '.$row['phone'].'</span></p>';
                                                        
                                                    ?>
                                                 </li>
                                                <li>
                                                <?php
                                                        $import="SELECT city from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<p>  City :  <span> '.$row['city'].'</span></p>';
                                                        
                                                ?>
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 personal-info">
                                            <ul class="list-unstyled pt-4">
                                                <li>
                                                <?php
                                                        $import="SELECT age from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<p>  Age : <span> '.$row['age'].'</span></p>';
                                                        
                                                    ?>
                                                 </li>
                                                <li>
                                                <?php
                                                        $import="SELECT degree from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<p> Degree : <span>  '.$row['degree'].'</span></p>';
                                                     
                                                ?>
                                                     
                                                </li>
                                                <li>
                                                    <p>Mail : <span> <a href="https://retrina.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1467757964787154667160667d7a753a777b79">[email&#160;protected]</a></span></p>
                                                </li>
                                                <li>
                                                <?php
                                                        $import="SELECT freelance from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<p>  Freelance :  <span>'.$row['freelance'].'</span></p>';
                                                        
                                                    ?>
                                                  
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-border mt-3 mb-lg-0 mr-4">
                                    <a href="javascript:void(0);" class="pill-button" id="cv">Download Cv</a>
                                </div>
                                <div class="button-border mt-3 mb-lg-0 to-contact">
                                    <a href="#contact" class="pill-button">Hire Me</a>
                                </div>
                            </div>
                        </div>
                        <!-- Count up Start -->
                        <div id="count-up" class="count-up text-center box-border">
                            <div class="row">
                                <!-- Item-01 -->
                                <div class="col-6 col-lg-3 my-3 count-item ">
                                    <div class="count-icon">
                                        <img src="assets/img/folder.svg" alt="">
                                    </div>
                                    <div class="my-3">
                                                <?php
                                                        $import="SELECT files_download from cv";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<span class="timer count-number" data-from="0" data-to="  '.$row['files_download'].' " data-speed="5000">0</span>';
                                                        
                                                    ?>
                                     </div>
                                    <p class="mb-0">Files Download</p>
                                </div>
                                <!-- Item-02 -->
                                <div class="col-6 col-lg-3 my-3 count-item ">
                                    <div class="count-icon data-text-color" data-color="#fbdd62">
                                        <img src="assets/img/project.svg" alt="">
                                    </div>
                                    <div class="my-3">
                                               <?php
                                                        $import="SELECT project_done from cv";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<span class="timer count-number" data-from="0" data-to="  '.$row['project_done'].' " data-speed="5000">0</span>';
                                                        
                                                    ?>
                                     </div>
                                    <p class="mb-0">Project Done</p>
                                </div>
                                <!-- Item-03 -->
                                <div class="col-6 col-lg-3 my-3 count-item ">
                                    <div class="count-icon data-text-color" data-color="#0bceaf">
                                        <img src="assets/img/medal.svg" alt="">
                                    </div>
                                    <div class="my-3">
                                                <?php
                                                        $import="SELECT get_awared from cv";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<span class="timer count-number" data-from="0" data-to="  '.$row['get_awared'].' " data-speed="5000">0</span>';
                                                        
                                                    ?>
                                         
                                    </div>
                                    <p class="mb-0">Get Award</p>
                                </div>
                                <!-- Item-04 -->
                                <div class="col-6 col-lg-3 my-3 count-item ">
                                    <div class="count-icon data-text-color" data-color="#0cc0de">
                                        <img src="assets/img/happy.svg" alt="">
                                    </div>
                                    <div class="my-3">
                                              <?php
                                                        $import="SELECT Happy_client from cv";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<span class="timer count-number" data-from="0" data-to="  '.$row['Happy_client'].' " data-speed="5000">0</span>';
                                                        
                                                    ?>
  
                                    </div>
                                    <p class="mb-0">Happy Client</p>
                                </div>
                            </div>
                        </div>
                        <!--  Count up End  -->
                        <!--  Service Start  -->
                        <div class="services colorfull-service">
                            <div class="row mt-5 ">
                                <div class="col-12">
                                    <h3 class="mb-0 text-dark">What <span class="base-color">I'm Doing</span></h3>
                                </div>
                            </div>
                            
                            <div class="row">

                                <?php 
                                    $import_job="SELECT * from jobs";
                                    $out= mysqli_query($connection ,$import_job);
                                    while( $row = mysqli_fetch_assoc($out)){
                                        echo '<div class="col-lg-4 text-left">
                                        <div class="image-border">
                                            <div class="services-item box-hover-border data-background" data-color="#ff5380">
                                                <div class="float-left mt-lg-1 d-inline-block services-icon">';
                                        echo '<img src="dashbord/uploads/images/'.$row['image'].'">';
                                        echo '</div>
                                        <div class="services-content">';
                                        echo '<h5 class="mb-3 text-white"> '.$row['job_name'].'</h5>';
                                        echo '<p class="text-white mb-0"> '.$row['job_description'].'</p>';

                                        echo '</div>
                                        </div>
                                    </div>
                                </div>'; 


                                    }
                                                            
                                ?>

                            </div>

                        </div>
                        <!--   Service End   -->
                        <!--   Client Start  -->
                        <div class="testimonial mt-5">
                            <div class="col-12">
                                <h3 class="mb-0 text-dark">Client <span class="base-color">Says</span></h3>
                            </div>
                            <div class="owl-carousel">
                                <!-- Testimonial Item-01 --> 
                                <?php 
                                    $import_job="SELECT * from clients";
                                    $out= mysqli_query($connection ,$import_job);
                                    while( $row = mysqli_fetch_assoc($out)){
                                        echo '<div class="testimonial-item box-border">
                                    <div class="testimonial-image">
                                        <div class="testimonial-image-border">';
                                        echo '<img src="dashbord/uploads/images/'.$row['image'].'"class ="rounded-circle img-fluid" >';
                                        echo '</div><div>';
                                      
                                        echo '<p class="mb-0 mt-2 text-muted">'.$row['client_description'].'</p>';
                                        echo '<span class="d-block mt-3 font-weight-bold mr-2">'.$row['client_name'].'<small class="text-muted">'.$row['client_job'].'</small></span>' ;

                                        echo '</div>
                                        </div></div>'; 
                              
                                

                                    }
                                                            
                                ?>   
                                
                            
                            </div>
                        </div>
                        <!--    Client End   -->
                    </div>
                </div>
            </div>
        </section>
        <!--    About End    -->

        <!--    Resume Start   -->
        <section id="resume" class="section resume">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center title">
                                    <h2 class="text-dark">My <span class="base-color">Resume</span></h2>
                                    <?php
                                        $import_desc="SELECT description from main";
                                        $outtt= mysqli_query($connection ,$import_desc);
                                        $row =mysqli_fetch_assoc($outtt);
                                        echo '<p class="text-muted max-width-450 mb-5">'.$row['description'].'</p>';
                                        
                                    ?>
                          
                                </div>
                            </div>
                        </div>
                        <!--    TimeLine Start   -->
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="text-dark">
                                    <i class="lni-graduation base-color"></i>
                                    Education
                                </h3>
                                <div class="timeline-items box-border colorfull-timeline">
                                    <!--    Item 01   -->
                                    
                                    <?php 
                                    $import_job="SELECT * from education";
                                    $out= mysqli_query($connection ,$import_job);
                                    while( $row = mysqli_fetch_assoc($out)){
                                        echo '<div class="timeline-item timeline-border" data-color="#ff5380">
                                        <div class="timeline-icon data-background" data-color="#ff5380"></div>
                                        <div class="timeline-contents">
                                            <div class="time-line-header">';
                                        echo '<h6 class="timeline-title">'.$row['educational_level'].'</h6>';
                                        echo '<p class="timeline-year">'.$row['period'].'</p></div>';
                                      
                                        echo '<div class="timeline-content">';
                                        echo '<p> '.$row['description'].'</p>';
 
                                        echo '</div>
                                        </div></div>'; 
                              
                                

                                    }
                                                            
                                ?>   
                                     
                                    <!--    Item 03   -->
                                 
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <h3 class="text-dark">
                                    <i class="lni-pencil base-color"></i>Experience
                                </h3>
                                <div class="timeline-items box-border colorfull-timeline">
                                    <!--    Item 01   -->
                                    <?php 
                                    $import_job="SELECT * from experience";
                                    $out= mysqli_query($connection ,$import_job);
                                    while( $row = mysqli_fetch_assoc($out)){
                                        echo '<div class="timeline-item timeline-border" data-color="#ff5380">
                                        <div class="timeline-icon data-background" data-color="#ff5380"></div>
                                        <div class="timeline-contents">
                                            <div class="time-line-header">';
                                        echo '<h6 class="timeline-title">'.$row['educational_level'].'</h6>';
                                        echo '<p class="timeline-year">'.$row['period'].'</p></div>';
                                      
                                        echo '<div class="timeline-content">';
                                        echo '<p> '.$row['description'].'</p>';
 
                                        echo '</div>
                                        </div></div>'; 
                              
                                

                                    }
                                                            
                                ?>  
                    
                                </div>
                            </div>
                        </div>
                        <!--    TimeLine End   -->
                        <!--  Skill Start  -->
                        <div class="row mt-5">
                            <!-- Skill -->
                            <div class="col-lg-6">
                                <div>
                                    <h3 class="mb-0">Work <span class="base-color"> Skills</span></h3>
                                </div>
                                <div id="skills" class="skill-box box-border">
                                <?php 
                                    $import_job="SELECT * from skills";
                                    $out= mysqli_query($connection ,$import_job);
                                    while( $row = mysqli_fetch_assoc($out)){
                                        echo '<div class="skillbar clearfix" data-percent="'.$row['skill_progress'].'%">';

                                        echo '<div class="skillbar-title"><span>'.$row['skill_name'].'</span></div>';
                                        echo '<div class="skillbar-bar fill-skillbar data-background" data-color="#ff5380"></div>';
                                        echo '<div class="skill-bar-percent">'.$row['skill_progress'].'%</div>';
             
                                        echo '</div>'; 
                                         

                                    }
                                         
                                     ?>  
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <h3 class="mb-0 mt-5 mt-lg-0">Language <span class="base-color"> Skills</span></h3>
                                </div>
                                <div class="language-bar box-border">
                                <?php 
                                    $import_job="SELECT * from lang";
                                    $out= mysqli_query($connection ,$import_job);
                                    while( $row = mysqli_fetch_assoc($out)){
                                        echo '<div class="language-skill row">';
                                        echo '<h4 class="col-6 text-left mb-0">'.$row['lang_name'].' <span> '.$row['lang_desc'].'</span></h4>';
                                        echo '<ul class="col-6 list-inline text-right mb-0">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star data-text-color" data-color="#ff5380"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star data-text-color" data-color="#ff5380"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star data-text-color" data-color="#ff5380"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star data-text-color" data-color="#ff5380"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-empty data-text-color" data-color="#ff5380"></i>
                                        </li>
                                    </ul>';
                                        echo '</div>'; 
                                         

                                    }
                                         
                                     ?>  
                                    
                                
                                </div>
                            </div>
                        </div>
                        <!--   Skill End   -->
                    </div>
                </div>
            </div>
        </section>
        <!--     Resume End    -->

        <!-- Portfolio Start -->
        <section id="portfolio" class="section portfolio">
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
                                        
                                    ?>
                                 </div>
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
                                        
                                        
                            <!-- Item 02 -->
                            
                            <!-- Item 10 -->
                            
                            <!-- Item 11 -->
                         
                            <!-- Item 12 -->
                        
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center pt-2">
                                <div class="button-border d-inline-block mr-2 mr-sm-4">
                                    <button class="pill-button showMore" id="showMore">Show More</button>
                                    <span id="showMore-initials" class="d-none" class="d-none" data-initial="6" data-next="3"></span>
                                </div>
                                <div class="button-border d-inline-block">
                                    <a href="portfolio.php" class="pill-button">Portfolio Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Portfolio End  -->

        <!--  Blog Start  -->
        <section id="blog" class="section blog">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center title">
                                    <h2 class="text-dark">News <span class="base-color">Post</span></h2> 
                                    <?php
                                        $import_desc="SELECT description from main";
                                        $outtt= mysqli_query($connection ,$import_desc);
                                        $row =mysqli_fetch_assoc($outtt);
                                        echo '<p class="text-muted max-width-450 mb-5">'.$row['description'].'</p>';
                                        
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
                               
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="button-border">
                                    <a href="blog.php" class="pill-button">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Blog End   -->

       <!-- Contact Start -->
       <section id="contact" class="section contact">
        <div class="display-table">
            <div class="display-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center title">
                                <h2 class="text-dark">Get <span class="base-color">in Touch</span></h2>
                                <?php
                                        $import_desc="SELECT description from main";
                                        $outtt= mysqli_query($connection ,$import_desc);
                                        $row =mysqli_fetch_assoc($outtt);
                                        echo '<p class="text-muted max-width-450 mb-5">'.$row['description'].'</p>';
                                        
                                    ?>
                             </div>
                        </div>
                    </div>
                    <div class="row contact-info">
                        <div class="col-lg-4 mt-5">
                            <div class="text-center">
                                <div class="base-color">
                                    <img src="assets/img/phone.svg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h5 class="text-dark mb-0">Call Us On</h5>
                                    <?php
                                                        $import="SELECT phone from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<small class="text-muted"> '.$row['phone'].'</small> ';
                                                        
                                   ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5">
                            <div class="text-center">
                                <div class="base-color">
                                    <img src="assets/img/location.svg" alt="">
                                </div>
                                <div class="mt-3">
                            
                                    <h5 class="text-dark mb-0 contact_detail-title">Visit Office</h5>
                                    <?php
                                                        $import="SELECT visit_office from about";
                                                        $out= mysqli_query($connection ,$import);
                                                        $row =mysqli_fetch_assoc($out);
                                                        echo '<small class="text-muted"> '.$row['visit_office'].'</small> ';
                                                        
                                   ?>
                                 </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5">
                            <div class="text-center">
                                <div class="base-color">
                                    <img src="assets/img/send.svg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h5 class="text-dark mb-0">Email Us At</h5>
                                    <small class="text-muted"><a href="https://retrina.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5637343516313b373f3a7835393b">[email&#160;protected]</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
  
                    <div class="row">
                        <div class="col-lg-12 mt-5 contact-form">
                            <form id="contactForm" action='action.php' method='POST'>
                                <div class="row">
                                         <div class="col-lg-6 form-item">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-item">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required >
                                            </div>
                                        </div>
                                        <div class="col-12 form-item">
                                            <div class="form-group">
                                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Subject*" required >
                                            </div>
                                        </div>
                                        <div class="col-12 form-item">
                                            <div class="form-group">
                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
            
                                        <div class="col-sm-12 mt-4 text-left">
                                            <div class="button-border">
                                                <input type="submit" style="background-color: #1ab394 !important;" class="pill-button" id="submit-btn" value="Send Message">
                                            </div> 
                                            <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                                <div class="toast-body d-inline-block"></div>
                                                <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true" class="lni-close size-xs "></span>
                                                </button>
                                            </div>
                                        </div>
                                    
                                
                                </div>
                            </form>
                        </div>
                    </div>
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

    <!--   Next and Prev Page -->
    <div class="next-prev-page">
        <button type="button" class="prev-page bg-base-color"><i class="fa fa-angle-up text-white"></i></button>
        <button type="button" class="next-page bg-base-color mt-3"><i class="fa fa-angle-down text-white"></i></button>
    </div>

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
     
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.4.1.min.js"></script>
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

<!-- Mirrored from retrina.com/demo/arshia/cv/colorfull.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 04:54:45 GMT -->
</html>