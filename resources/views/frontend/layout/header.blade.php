<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{env('APP_NAME')}} </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/asstes/img/logo/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ url('frontend/asstes/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/asstes/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/asstes/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/asstes/css/mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/asstes/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/asstes/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/asstes/css/default.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/asstes/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/asstes/css/responsive.css') }}">

    </head>
    <body class="white-background">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
        <!-- Preloader -->



          <!-- Mobile Menu  -->
          <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="index.php"><img src="{{ url('frontend/asstes/img/logo/mainlogo.png')}}" alt="" title=""></a>
                                    </div>

                                   
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                         <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="index.php#header" class="section-link">Home</a>
                                            </li>
                                                 
                                            <li><a href="index.php#about" class="section-link">About us</a></li>
                                            <li><a href="index.php#roadmap" class="section-link">Roadmap</a></li>
                                            <li><a href="index.php#highlight" class="section-link">Features</a></li>
                                            <li><a href="index.php#faq" class="section-link">Faq</a></li>
                                            
                                            <li><a href="index.php#contact" class="section-link">Contact us</a></li>
                                            
                                        </ul>

                                    <div class="header-action  ">
                                        <ul>
                                        <li style="margin-right: 35px; margin-left: 30px;" ><a href="login.php" class="btn" style="padding: 10px 10px; font-size: 14px;">Login</a></li>
<li><a href="register.php" class="btn" style="padding: 10px 10px; font-size: 14px;">Register</a></li>


                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <!-- <ul class="clearfix">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul> -->
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->