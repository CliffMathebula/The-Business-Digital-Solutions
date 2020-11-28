<?php
session_start();
require_once("models/dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Business Digital Solutions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <script type="text/javascript" src="jquery.min.js"></script>
</head>

<body class="animsition">
    <!-- header fixed -->
    <div class="wrap_header fixed-header2 trans-0-4">
        <!-- Logo -->
        <a href="index.php">
            <img src="images/icons/tbds.jpeg" width="200" height="65" alt="IMG-LOGO">
        </a>
        <!-- Menu -->
        <div class="wrap_menu">
            <nav class="menu">
                <ul class="main_menu">
                    <li>
                        <a href="#Products">Shop</a>
                    </li>
                    <li>
                        <a href="#book-us">Book-Us</a>
                    </li>
                    <li>
                        <a href="blog.html">FAQs</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="topbar-child2">
            <!--  -->
            <a href="login/login.php" class="header-wrapicon1 dis-block m-l-30">
                <img src="images/icons/icon-header-01.png" class="header-icon1" alt="login">
            </a>
            <span class="linedivide1"></span>
            <div class="header-wrapicon2 m-r-13">
                <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                <span class="header-icons-noti" id="items">
                </span>
                <!-- Header cart noti -->
                <div class="header-cart header-dropdown" id="cart-content">
                </div>
            </div>
        </div>
    </div>
    <!-- top noti -->
    <div class="flex-c-m size22 bg-info s-text21 pos-relative">
        <p class="text text-white text-center"><strong> We Deliver Cost Effective & High Quality Software! </strong></p>
    </div>
    <!-- Header -->
    <header class="header2">
        <!-- Header desktop -->
        <div class="container-menu-header-v2 p-t-26">
            <div class="topbar2">
                <div class="topbar-social">
                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                    <a href="https://api.whatsapp.com/send?phone=+27659056171&text=Hi%20There!, Please send us your message, we will reply to you back as soon as possible" class="topbar-social-item fa fa-whatsapp"></a>
                    <a href="#" class="topbar-social-item fa fa-linkedin"></a>

                    <!--<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a> -->
                </div>
                <!-- Logo2 -->
                <a href="index.php">
                    <img src="images/icons/tbds.jpeg" width="250" height="100" alt="IMG-LOGO">
                </a>
                <div class="topbar-child2">
                    <!--  -->
                    <a href="login/login.php" class="header-wrapicon1 dis-block m-l-30">
                        <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                    <span class="linedivide1"></span>
                    <div class="header-wrapicon2 m-r-13">
                        <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti" id="items2">
                        </span>
                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown" id="cart-content2">
                        </div>
                    </div>
                </div>
            </div>


            <div class="wrap_header">
                <!-- Menu Desktop-->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="#Products">Shop </a>
                            </li>
                            <li>
                                <a href="#book-us">Book Us</a>
                            </li>
                            <li>
                                <a href="blog.html">FAQs</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Header Icon -->
                <div class="header-icons">

                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="index.php" class="logo-mobile">
                <img src="images/icons/tbds.jpeg" alt="IMG-LOGO">
            </a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <div class="header-icons-mobile">
                    <a href="login/login.php">
                        <img src="images/icons/icon-header-01.png" width="100%">
                    </a>
                    <span class="linedivide2"></span>
                    <div class="header-wrapicon2">
                        <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti js-show-header-dropdown" id="items3">
                        </span>
                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown" id="cart-content3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                            <span class="topbar-email">
                                <small> info@thebusinessdigitalsolutions.co.za</small>
                            </span>
                        </div>
                    </li>

                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="#" class="topbar-social-item fa fa-facebook"></a>
                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                            <a href="https://api.whatsapp.com/send?phone=+27659056171&text=Hi%20There!, Please send us your message, we will reply to you back as soon as possible" class="topbar-social-item fa fa-whatsapp"></a>
                            <a href="#" class="topbar-social-item fa fa-linkedin"></a>

                            <!--
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a> -->
                        </div>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="#Products">Shop</a>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="#book-us">Book-US</a>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="blog.html">FAQs</a>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="about.html">About</a>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Slide1 -->
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(images/item-02.jpeg.jpeg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22 text-warning" data-appear="fadeInUp">
                            <strong> Website Development </strong>
                        </h2>
                        <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33 text-warning" data-appear="fadeInDown">
                            <STRONG>We Design Beautiful Websites For All Types Of Devices</STRONG>
                        </span>
                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="#Products" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4 ">
                                Get Quote
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-slick1 item2-slick1" style="background-image: url(images/mobile.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22 text-warning" data-appear="rollIn">
                            <strong> Mobile App Development </strong>
                        </h2>
                        <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33 text-warning" data-appear="lightSpeedIn">
                            <strong> We Design Mobile Apps For Play Store & Apple Store </strong>
                        </span>
                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                            <!-- Button -->
                            <a href="#Products" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Get Quote
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-slick1 item3-slick1" style="background-image: url(images/domain.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22 text-warning" data-appear="rotateInDownLeft">
                            <strong> Domain Names </strong>
                        </h2>
                        <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33 text-warning" data-appear="rotateInUpRight">
                            <strong> Get A New Domain Or Transfer Your Existing One</strong>
                        </span>
                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->
                            <a href="#domains" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Order Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-slick1 item3-slick1" style="background-image: url(images/slide2.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22 text-warning" data-appear="rotateInDownLeft">
                            <strong> Hosting Services </strong>
                        </h2>
                        <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33 text-warning" data-appear="rotateInUpRight">
                            <strong> Get Reliable Hosting With Us </strong>
                        </span>
                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->
                            <a href="#domains" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Order Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our product -->
    <section id="Products" class="bgwhite p-t-45 p-b-58">
        <div class="container">
            <div class="sec-title p-b-22">
                <h3 class="m-text5 t-center">
                    Products & Services
                </h3>
            </div>
            <p class="text text-success text-center">Select Product Category Below To Order or Get Quote!</p>
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#" role="tab">
                            Products Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" data-toggle="tab" href="#web-development" role="tab">Web
                            Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" data-toggle="tab" href="#app-development" role="tab">App Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" data-toggle="tab" href="#domains" role="tab">Domains</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" data-toggle="tab" href="#hosting" role="tab">Hosting</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-t-35">
                    <!-- Web Development -->
                    <div class="tab-pane fade show active" id="web-development" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="block2-txt p-t-20 bg-default">
                                                <a href="#" class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                    Mobile Friendly Web Applications
                                                </a>
                                                <br />
                                                <span class="block2-name dis-block s-text3 p-b-5 bg-success">
                                                </span>
                                                <p class="block2-name dis-block s-text3 p-b-5 text text-primary text-center bg-warning  ">
                                                    From R1000.00 Per Design </p>
                                                <p class="block2-name dis-block s-text3 p-b-5 text text-white text-center bg-success">
                                                    <small><strong>R120.00 Per Month</strong></small>
                                                </p>
                                                <br /><br />
                                                <p class="block2-name dis-block s-text3 p-b-5 ">
                                                    <i class="ti-cloud text-success"></i> &nbsp; 10 Gig
                                                    Hosting Space</p>
                                                <p class="block2-name dis-block s-text3 p-b-5 "><i class="ti-world text-success"></i> &nbsp; Free
                                                    Domain Name
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5"><i class="ti-search text-success"></i> &nbsp; Free SEO
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5"><i class="ti-lock text-success"></i> &nbsp; Free SSL
                                                    Certificate</p>
                                                <p class="block2-name dis-block s-text3 p-b-5"><i class="ti-email text-success"></i> &nbsp;
                                                    Unlimited
                                                    Emails</p>
                                                <p class="block2-name dis-block s-text3 p-b-5"><i class="ti-book text-success"></i> &nbsp; Maximum
                                                    of 15 Pages
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5"><i class="ti-server text-success"></i>
                                                    &nbsp;Unlimited Databases
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5"><i class="ti-cloud-down  text-success"></i> &nbsp;Weekly
                                                    Backups</p>
                                                <div class="block2-overlay trans-0-4">
                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Get A Quote
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="block2-txt p-t-20 bg-default">
                                                <p class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                    E-Commerce Web Applications
                                                </p>
                                                <br />
                                                <span class="block2-name dis-block s-text3 p-b-5 bg-success">
                                                </span>
                                                <p class="block2-name dis-block s-text3 p-b-5 text text-primary text-center bg-warning ">
                                                    From R2000.00 Per Design
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5 text text-white text-center bg-success">
                                                    <small><strong>R150.00 Per Month </strong></small>
                                                </p>
                                                <br /><br />
                                                <p class="block2-name dis-block s-text3 p-b-5 ">
                                                    <i class="ti-cloud text-success"></i> &nbsp; 20 Gig
                                                    Hosting Space</p>
                                                <p class="block2-name dis-block s-text3 p-b-5 ">
                                                    <i class="ti-world text-success"></i> &nbsp; Free
                                                    Domain Name
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-lock text-success"></i> &nbsp; Free SSL
                                                    Certificate</p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-search text-success"></i> &nbsp; Free SEO
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-email text-success"></i> &nbsp;
                                                    Unlimited
                                                    Emails</p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-book text-success"></i> &nbsp; Maximum
                                                    of 20 Pages
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-server  text-success"></i>
                                                    &nbsp;Unlimited Databases
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-cloud-down  text-success"></i> &nbsp;Weekly
                                                    Backups</p>
                                            </div>
                                            <div class="block2-overlay trans-0-4">
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Get A Quote
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="block2-txt p-t-20 bg-default">
                                                <p class="block2-name dis-block s-text3 text-dark p-b-5 text-center ">
                                                    Commercial CRM Web Applications
                                                </p>
                                                <br />
                                                <span class="block2-name dis-block s-text3 p-b-5 bg-success">
                                                </span>
                                                <p class="block2-name dis-block s-text3 p-b-5 text text-primary text-center bg-warning ">
                                                    From R3000.00 Per Design
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5 text text-white text-center bg-success">
                                                    <small><strong>R200.00 Per Month</strong></small>
                                                </p>
                                                <br /><br />
                                                <p class="block2-name dis-block s-text3 p-b-5 ">
                                                    <i class="ti-cloud text-success"></i> &nbsp; 30 Gig
                                                    Hosting Space
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5 ">
                                                    <i class="ti-world text-success"></i> &nbsp; Free
                                                    Domain Name
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-lock text-success"></i> &nbsp; Free SSL
                                                    Certificate</p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-search text-success"></i> &nbsp; Free SEO
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-email text-success"></i> &nbsp;
                                                    Unlimited
                                                    Emails</p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-book text-success"></i> &nbsp; Unlimited Pages
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-server  text-success"></i>
                                                    &nbsp;Unlimited Databases
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-cloud-down  text-success"></i> &nbsp;Weekly
                                                    Backups</p>
                                            </div>
                                            <div class="block2-overlay trans-0-4">
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Get A Quote
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="block2-txt p-t-20 bg-default">
                                                <p class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                    Company Internal System Web Application
                                                </p>
                                                <br />
                                                <span class="block2-name dis-block s-text3 p-b-5 bg-success">
                                                </span>
                                                <p class="block2-name dis-block s-text3 p-b-5 text text-primary bg-warning text-center  ">
                                                    From R5000.00 Per Design
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5 text text-white  text-center bg-success">
                                                    <small><strong>From R250.00 Per Month</strong></small>
                                                </p>
                                                <br /><br />
                                                <p class="block2-name dis-block s-text3 p-b-5 ">
                                                    <i class="ti-cloud text-success"></i> &nbsp; 50 Gig
                                                    Hosting Space</p>
                                                <p class="block2-name dis-block s-text3 p-b-5 ">
                                                    <i class="ti-world text-success"></i> &nbsp; Free
                                                    Domain Name
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-lock text-success"></i> &nbsp; Free SSL
                                                    Certificate
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-search text-success"></i> &nbsp; Free SEO
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-email text-success"></i> &nbsp;
                                                    Unlimited
                                                    Emails</p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-book text-success"></i> &nbsp; Unlimited Pages
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-server  text-success"></i>
                                                    &nbsp;Unlimited Databases
                                                </p>
                                                <p class="block2-name dis-block s-text3 p-b-5">
                                                    <i class="ti-cloud-down  text-success"></i> &nbsp;Weekly
                                                    Backups
                                                </p>
                                            </div>
                                            <div class="block2-overlay trans-0-4">
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Get A Quote
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- App Development Products - -->
                    <div class="tab-pane fade" id="app-development" role="tabpanel">
                        <p class="text text-center text-dark mt-4"><strong>WE DESIGN IOS & ANDROID MOBILE APPS FOR COMMERCIAL SERVICES</strong>
                        </p>
                        <br />
                        <br />
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="block2-txt p-t-20 bg-default">
                                                <a href="#" class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                    Office Productivity Apps
                                                </a>
                                                <br />
                                                <span class="block2-name dis-block s-text3 p-b-5 bg-info">
                                                </span>
                                                <br />
                                                <br />
                                            </div>
                                            <div class="block2-overlay trans-0-4">
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size4 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Get A Quote
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="block2-txt p-t-20 bg-default">
                                                <a href="#" class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                    Travel Apps
                                                </a>
                                                <br />
                                                <span class="block2-name dis-block s-text3 p-b-5 bg-warning">
                                                </span>
                                                <br /><br />
                                            </div>
                                            <div class="block2-overlay trans-0-4">
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size4 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Get A Quote
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="block2-txt p-t-20 bg-default">
                                                <a href="#" class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                    Tools & Utility Apps
                                                </a>
                                                <br />
                                                <span class="block2-name dis-block s-text3 p-b-5 bg-primary">
                                                </span>
                                                <br />
                                                <br />
                                            </div>
                                            <div class="block2-overlay trans-0-4">
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size4 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Get A Quote
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="block2-txt p-t-20 bg-default">
                                            <a href="#" class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                Enterprise-Specific Apps
                                            </a>
                                            <br />
                                            <span class="block2-name dis-block s-text3 p-b-5 bg-success">
                                            </span>
                                            <br /><br />
                                        </div>
                                        <div class="block2-overlay trans-0-4">
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size4 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Get A Quote
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="block2-txt p-t-20 bg-default">
                                            <a href="#" class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                Communication Apps
                                            </a>
                                            <br />
                                            <span class="block2-name dis-block s-text3 p-b-5 bg-danger">
                                            </span>
                                            <br /><br />
                                        </div>
                                        <div class="block2-overlay trans-0-4">
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size4 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Get A Quote
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="block2-txt p-t-20 bg-default">
                                            <a href="#" class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                Mobile Payment Apps
                                            </a>
                                            <br />
                                            <span class="block2-name dis-block s-text3 p-b-5 bg-primary">
                                            </span>
                                            <br /><br />
                                        </div>
                                        <div class="block2-overlay trans-0-4">
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size4 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Get A Quote
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="block2-txt p-t-20 bg-default">
                                            <a href="#" class="block2-name dis-block s-text3 p-b-5 text-center ">
                                                Mind-Mapping Apps
                                            </a>
                                            <br />
                                            <span class="block2-name dis-block s-text3 p-b-5 bg-info">
                                            </span>
                                            <br /><br />
                                        </div>
                                        <div class="block2-overlay trans-0-4">
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size4 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Get A Quote
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Domains Section -->
                    <div class="tab-pane fade" id="domains" role="tabpanel">
                        <div class="container">
                            <div class="row">
                                <div class="col align-self-center">
                                    <div class="text-center">
                                        <form class="leave-comment" id="domain_form">
                                            <h4 class="m-text26 p-b-36 p-t-15">
                                                Check Domain Availability
                                            </h4>
                                            <p class="flex-c-m size22 bg-dark text-xl pos-relative " id="domain_status">
                                            </p><br />
                                            <div class="form-group row flex-v-center">
                                                <div class="col-md-10">
                                                    <p class="input-group text-center">
                                                        <input id="searchBar" class="form-control text-dark border border-dark text-xl" type="text" name="domain" placeholder="Search domain name..." value="
                                                        <?php if (isset($_GET['domain'])) {
                                                            echo $_GET['domain'];
                                                        } ?>">
                                                        <span>
                                                            <select name="name" id="name" class="sizefull s-text7 p-l-22 p-r-22 ">
                                                                <option value=".co.za">.co.za</option>
                                                                <option value=".com">.com</option>
                                                                <option value=".net">.net</option>
                                                                <option value=".org">org</option>
                                                                <option value=".info">.info</option>
                                                                <option value=".mobi">.mobi</option>
                                                            </select>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="w-size25">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size4 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                                        Search &nbsp; <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <p class="flex-c-m size22 bg-dark s-text21 pos-relative mt-4" id="suggested1">
                            <strong class="text text-warning text-lg">Suggested Domain Names </strong>
                        </p>
                        <br />
                        <table class="table table-striped bg-secondary" id="suggested2">
                            <thead class="bg-dark">
                                <tr>
                                    <th scope="col">
                                        <p class="text text-white"> Domain Names </p>
                                    </th>
                                    <th scope="col">
                                        <p class="text text-white"> Price </p>
                                    </th>
                                    <th scope="col">
                                        <p class="text text-white"> Billing Cycle </p>
                                    </th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="suggested" class="col-6">
                            </tbody>
                        </table>
                    </div>
                    <!-- Hosting Products -->
                    <div class="tab-pane fade" id="hosting" role="tabpanel">
                        <div class="row" id="hosting_packages">
                            <?php
                            include 'hosting_packages.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner video -->
    <section class="parallax0 parallax100" style="background-image: url(images/bg-video-01.jpg);">

        <div class="overlay0 p-t-190 p-b-200">
            <div class="flex-col-c-m p-l-15 p-r-15">
                <span class="m-text9 p-t-45 fs-20-sm">
                    Book Us For A Meeting
                </span>
                <h3 class="l-text1 fs-35-sm">
                    book now

                </h3>
                <span class=" s-text4 hov5 cs-pointer p-t-25">

                    Book Us for zoom meeting
                </span>
                <input type="date" class="form-control" />
                <input type="time" class="form-control" />

            </div>
        </div>
    </section>
    <!-- contact us -->
    <section>
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <div class="sec-title p-b-52">
                <br /><br />
                <h1 class="m-text5 t-center">
                    Contact Us
                </h1><br />

                <p class="text text-center text-lg">
                    <a href="https://www.facebook.com/thebusinessdigitalsolutions" class="topbar-social-item fa fa-facebook"></a>
                    <a href="https://api.whatsapp.com/send?phone=+27659056171&text=Hi%20There! Please Send Us Your Message, We Will Reply To your Message As Soon as Possible." class="topbar-social-item fa fa-whatsapp"></a>
                    <a href="https://www.linkedin.com/company/The-Business-Digital-Solutions/" class="topbar-social-item fa fa-linkedin"></a>
                    <a href="tel:+27659056171" class="topbar-social-item fa fa-phone"><small><strong> +27 65 905
                                6171</strong></small></a>
                    <a href="mail:info@thebusinessdigitalsolutions.co.za">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                        </svg>
                        <small><strong> info@thebusinessdigitalsolutions.co.za</strong></small></a>
                </p>
            </div>
            <div class="sec-title p-b-52">
                <p class="m-text6 t-center">
                    <strong>Our Location</strong>
                </p>
            </div>
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3578.8054584655642!2d27.
				92930631503072!3d-26.235509983423835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
				1!2m1!1s1805%20Msimang%20Street%20Orlando%20east%20Soweto%201804!5e0!3m2!1sen!2sza!4v1602323850190!5m2!1sen!2sza" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <!-- contact us form -->
    <section>
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <form class="leave-comment" id="email_form">
                <h4 class="m-text26 p-b-36 p-t-15 t-center">
                    Send us your message
                </h4>
                <div class="flex-c-m size22 bg0 s-text21 pos-relative" id="email_message">
                </div>
                <div class="bo4 of-hidden size15 m-b-20">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
                </div>
                <div class="bo4 of-hidden size15 m-b-20">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Phone Number">
                </div>
                <div class="bo4 of-hidden size15 m-b-20">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                </div>
                <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>
                <div class="w-size25">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!-- refund -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Domains Refund
                </h4>
                <span class="s-text11 t-center">
                    Please Note There's No Refund For Domains Registered As The Domains Are Charged Annually and The Fee
                    For Domain
                    Registration Will Be Deducted If You Decide To Cancel The Web Development Service Included In The
                    Packages.
                </span>
            </div>
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    Software Development Refund.
                </h4>
                <span class="s-text11 t-center">
                    Simply contact us before receiving notification of the beginning of the Development of your
                    website or mobile app as there can be charges of the work done on your application development if
                    you decide to cancel the order.
                </span>
            </div>
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Operating Hours
                </h4>
                <span class="s-text11 t-center">
                    Our Business is Open Monday to Sunday 24 Hours a day.
                </span>
            </div>
        </div>
    </section>
    <!--- footer section --->
    <?php
    include 'footer.php';
    ?>