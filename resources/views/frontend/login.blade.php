@extends('frontend.layout.main')

<!-- header-area -->
@section('main-container')
<style>
    .login_inner {
        max-width: 700px;
        margin: auto;
    }

    .contact-form-wrap {
        padding: 0px !important;
    }


    .contact-bg::after,
    .contact-bg::before {
        background-image: none;
    }

    .contact-bg {
        padding: 130px 0 130px;
    }

    .dreamit-auction-box {
        /* background: #2A273E; */
        padding: 16px 20px 20px;


        background: rgba(255, 255, 255, 0.06);
        border: 2px solid rgba(246, 246, 246, 0.06);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);
        border-radius: 11px;
        width: 100%;
        letter-spacing: -0.02em;
        color: #030B15;
        font-weight: 400;
        font-size: 20px;
        padding: 17px 22px;
        line-height: 1.5;
        /* height: 66px; */
        margin-bottom: 20px;
        display: block;
        transition: .3s linear;
    }


    .form-control {
        border: 1px solid rgba(246, 246, 246, 0.06);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);
        border-radius: 11px;
        width: 100%;
        letter-spacing: -0.02em;
        color: #00C4F4 !important;
        background: transparent !important;
    }

    .btn.btn-two {
        background: #564DCA;
        border-radius: 5px;
        padding: 23px 35px !important;
        border: none;
    }

    .dreamit-auction-main-thumb {
        position: relative;
        z-index: 1;
    }

    .dreamit-auction-main-thumb img {
        width: 100%;
        border-radius: 15px;
        position: relative;
        z-index: 1;
    }


    .form-grp {
        margin-bottom: 10px;
        margin-top: 10px;
    }
</style>
<!-- header-area -->
<header id="header">
    <div id="sticky-header" class="menu-area menu-style-two transparent-header ">
        <div class="container custom-container-three">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="index"><img src="{{ url('frontend/asstes/img/logo/mainlogo.png')}}" alt=""></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <!-- <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="#header" class="section-link">Home</a>
                                            </li>
                                                 
                                            <li><a href="#about" class="section-link">About us</a></li>
                                            <li><a href="#roadmap" class="section-link">Roadmap</a></li>
                                            <li><a href="#highlight" class="section-link">Features</a></li>
                                            <li><a href="#faq" class="section-link">Faq</a></li>
                                            
                                            <li><a href="#contact" class="section-link">Contact us</a></li>
                                        </ul> -->
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-lang">

                                    </li>
                                    <li class="header-btn"><a href="register" class="btn">Register</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->


<!-- main-area -->
<main>




    <!-- contact-area -->
    <section id="contact" class="contact-aera contact-bg ">
        <div class="container custom-container-four">
            <div class="contact-inner">
                <div class="row pt-2 ">

                    <div class="d-flex justify-content-center ">
                        <div class="col-lg-6 col-12">
                            <div class="section-title  text-center mb-20">

                                <!-- <span class="sub-title">Login</span> -->
                                <h2 class="title"><span>Login</span> </h2>
                            </div>

                            <div class="dreamit-auction-box">

                                <div class="auction-box-inner">

                                    <div class="sign-in-respond text-center mt-4">
                                        <form method="post" action="login-process" style="margin:25px 0;">
                                            @csrf

                                            <div class="row">


                                                <div class="col-md-12">
                                                    <div class="form-grp ">
                                                        <input name="userid" type="text" class="form-control" placeholder="Enter User ID" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                                    </div>
                                                </div>
                                                <p class="forgot_text"> Forgot password? <a href="forgot" class="link">Remember me</a> </p>

                                            </div>


                                            <div class="submit-btn text-center">
                                                <button type="submit" class="btn btn-two w-100 ">Login</button>
                                            </div>
                                            <p class="forgot_text mt-4 mb-0 text-center">
                                                Don't have an account ? <a class="link" href="register"> Sign Up</a>
                                            </p>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->


</main>
<!-- main-area-end -->
@endsection
<!-- footer-area-end -->