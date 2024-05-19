@extends('frontend.layout.main')

<!-- header-area -->
@section('main-container')
<header id="header">
    <div id="sticky-header" class="menu-area menu-style-two transparent-header">
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
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a href="#header" class="section-link">Home</a>
                                    </li>

                                    <li><a href="#about" class="section-link">About us</a></li>
                                    <li><a href="#roadmap" class="section-link">Roadmap</a></li>
                                    <li><a href="#highlight" class="section-link">Features</a></li>
                                    <li><a href="#faq" class="section-link">Faq</a></li>

                                    <li><a href="#contact" class="section-link">Contact us</a></li>



                                </ul>
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

    <!-- banner-area -->
    <section class="banner-area-two">
        <div class="banner-bg-two"></div>
        <div class="container custom-container-four">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="banner-content text-center">
                        <h2 class="title wow fadeInDown" data-wow-delay=".2s">World’s Biggest {{env('APP_NAME')}} Platform for you</h2>
                        <img src="{{ url('frontend/asstes/img/dash1.png')}}" style="width: 55%;" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-social-wrap">
            <ul>
                <li><a href="#" class="banner-social-link"><i class="fab fa-linkedin-in"></i></a><span>LinkedIn</span></li>
                <li><a href="#" class="banner-social-link"><i class="fab fa-twitter"></i></a><span>Twitter</span></li>
                <li><a href="#" class="banner-social-link"><i class="fab fa-pinterest"></i></a><span>Pinterest</span></li>
                <li><a href="#" class="banner-social-link"><i class="fab fa-instagram"></i></a><span>Instagram</span></li>
            </ul>
        </div>
        <div class="banner-scroll">
            <span>Scroll down</span>
            <a href="#" data-target="#about"><img src="{{ url('frontend/asstes/img/icon/scroll_icon.svg')}}" alt=""></a>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- countdown-area -->
    <!-- <section id="countdown" class="countdown-area-two">
        <div class="container custom-container-four">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown-wrap">
                        <h2 class="title">{{env('APP_NAME')}} Will Start In..</h2>
                        <div id="countdown-gampang"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- countdown-area-end -->

    <!-- about-area -->
    <section id="about" class="about-area-two">
        <div class="container custom-container-four">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-two text-center wow fadeInLeft" data-wow-delay=".2s">
                        <img src="{{ url('frontend/asstes/img/dash.png')}}" class="dash-img" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-two wow fadeInRight" data-wow-delay=".2s">
                        <div class="section-title section-title-two mb-15">
                            <span class="sub-title">ABOUT US</span>
                            <h2 class="title"><span>Meet Our</span> Platform To Know More About</h2>
                        </div>
                        <p>Welcome to our platform! Here, you'll find all the information necessary for well-informed decisions. Our platform is your comprehensive resource. So, why wait? Let's begin!"</p>
                        <br>
                        <p>we are rounding up outstanding developers in the community to provide a cost-efficient, safe and effective self-service energy lending service Hi End Exchange with low gas fee.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-wrap">
            <img src="{{ url('frontend/asstes/img/images/about_shape01.png')}}" alt="" class="shape-one">
            <img src="{{ url('frontend/asstes/img/images/about_shape02.png')}}" alt="" class="shape-two rotateme">
        </div>
    </section>
    <!-- about-area-end -->

    <!-- choose-area -->
    <section class="choose-area-two choose-bg pb-130">
        <div class="container custom-container-four">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-70">
                        <span class="sub-title">why Choose us</span>
                        <h2 class="title">Why Choose <span>{{env('APP_NAME')}}</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="choose-item-two wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-icon-two">
                            <img src="{{ url('frontend/asstes/img/icon/h2_choose_icon01.svg')}}" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Explore Limitless Possibilities</a></h2>
                            <p>At {{env('APP_NAME')}}, we believe in the power of smart investing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="choose-item-two wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose-icon-two">
                            <img src="{{ url('frontend/asstes/img/icon/h2_choose_icon02.svg')}}" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Lifetime free transaction</a></h2>
                            <p>Enjoy lifetime free transactions with our new account, Sign up now!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="choose-item-two wow fadeInUp" data-wow-delay=".6s">
                        <div class="choose-icon-two">
                            <img src="{{ url('frontend/asstes/img/icon/h2_choose_icon03.svg')}}" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Protect the identity</a></h2>
                            <p>we believe in the power of collective knowledge and collaboration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="choose-item-two wow fadeInUp" data-wow-delay=".8s">
                        <div class="choose-icon-two">
                            <img src="{{ url('frontend/asstes/img/icon/h2_choose_icon04.svg')}}" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Sercurity & control over money</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- counter-area -->

    <!-- counter-area-end -->

    <!-- roadmap-area -->

    <!-- roadmap-area-end -->

    <!-- team-area -->
    <section class="team-area-two team-bg" id="highlight">
        <div class="container custom-container-four">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">Features</span>
                        <h2 class="title">Unlock The Potential Of Your <span>Investments</span></h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pt-3">

                    <div class="column col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="wrap">

                            <div class="icon">
                                <!-- <img src="images/profit.png" alt=""> -->
                                🚀
                            </div>
                            <div class="content">
                                <h5 class="text-primary fw-bold text-start"> Explore Limitless Opportunities</h5>
                                <p class="text-secondary">Embark on a journey of financial growth with {{env('APP_NAME')}} - your gateway to the exciting world of Forex . Seize opportunities, navigate markets, and let your investments thrive</p>
                            </div>
                        </div>
                    </div>
                    <div class="column col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300">
                        <div class="wrap">

                            <div class="icon">
                                <!-- <img src="images/profit.png" alt=""> -->
                                💹
                            </div>
                            <div class="content">
                                <h5 class="text-primary fw-bold text-start"> Precision in Every Trade</h5>
                                <p class="text-secondary">At {{env('APP_NAME')}} , we believe in precision and expertise. Our seasoned traders and cutting-edge technology ensure that every trade is executed with accuracy, giving you the edge in the dynamic world of financial markets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1400">
                        <div class="wrap">
                            <!-- <img class="ellipse" src="{{ url('frontend/asstes/images/highlight-ellipse.png')}}" alt=""> -->

                            <div class="icon">
                                🔒
                            </div>
                            <div class="content">
                                <h5 class="text-primary fw-bold text-start">Security You Can Trust</h5>
                                <p class="text-secondary">Providing you with peace of mind as you navigate the exciting world of trading.</p>
                            </div>
                        </div>
                    </div>

                    <div class="column   col-lg-4 col-md-6 mb-2 mt-2" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="wrap ">

                            <div class="icon">
                                🌐
                            </div>
                            <div class="content">
                                <h5 class="text-primary fw-bold text-start">Global Reach, Local Expertise</h5>
                                <p class="text-secondary">With a global presence and local expertise, {{env('APP_NAME')}} combines the best of both worlds. Benefit from our international insights while enjoying personalized support tailored to your unique financial goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column   col-lg-4 col-md-6 mb-2 mt-2" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="wrap ">

                            <div class="icon">
                                💼
                            </div>
                            <div class="content">
                                <h5 class="text-primary fw-bold text-start">Diversify Your Portfolio</h5>
                                <p class="text-secondary">Diversification is the key to resilience. Explore a wide range of trading options in Forex build a robust and diversified portfolio. Your financial success is our mission.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column   col-lg-4 col-md-6 mb-2 mt-2" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="wrap ">

                            <div class="icon">
                                📈
                            </div>
                            <div class="content">
                                <h5 class="text-primary fw-bold text-start">Stay Informed, Stay Ahead</h5>
                                <p class="text-secondary">Knowledge is power. Stay informed with {{env('APP_NAME')}} real-time market updates, expert analyses, and educational resources. Empower yourself with the insights needed to make informed investment decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->

    <!-- download-area -->
    <section class="download-area pt-150 pb-140">
        <div class="container custom-container-four">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                    <div class="download-img text-center wow fadeInRight" data-wow-delay=".2s">
                        <img src="{{ url('frontend/asstes/img/trix.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="download-content wow fadeInLeft" data-wow-delay=".2s">

                        <div class="about-content-two wow fadeInRight" data-wow-delay=".2s">
                            <div class="section-title section-title-two mb-15">
                                <span class="sub-title">ABOUT {{env('APP_NAME')}}</span>
                                <h2 class="title"><span>Our Commitment</span> To Help Growing Your Business</h2>
                            </div>
                            <div class="about-list">
                                <ul>
                                    <li><i class="fas fa-check"></i>Building a Better Trading Future</li>
                                    <li><i class="fas fa-check"></i>Provide a Trading Experience</li>
                                    <li><i class="fas fa-check"></i> The Experts Behind Your Success</li>
                                    <li><i class="fas fa-check"></i> Empowering Traders Worldwide</li>
                                </ul>
                            </div>
                            <a href="{{ url('frontend/asstes/img/images/h2_about_img.png')}}" download target="_blank" class="btn btn-two">Meet Our Experts</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- download-area-end -->

    <!-- faq-area -->
    <!-- <section id="faq" class="faq-area">
        <div class="container custom-container-four">
            <div class="faq-shape-wrap">
                <img src="{{ url('frontend/asstes/img/images/faq_shape01.png')}}" alt="" class="img-one">
                <img src="{{ url('frontend/asstes/img/images/faq_shape02.png')}}" alt="" class="img-two rotateme">
                <img src="{{ url('frontend/asstes/img/images/faq_shape03.png')}}" alt="" class="img-three">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-title-two text-center mb-60">
                        <h2 class="title">Frequently asked questions</h2>
                    </div>
                    <div class="faq-wrap wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Can I lose money?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>There is a risk involved with investing in all high yield investment programs. However, there are a few simple ways that can help you to reduce the risk of losing more than you can afford to.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How can I check my account balances?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>You can access the account information 24 hours, seven days a week over the Internet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Who manages the funds?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>These funds are managed by a team of investment experts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How long does it take for my deposit to be added to my account?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Your account will be when blockchain network confirmed atleast 2-3 block or 10 to 15 minute.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        How can I withdraw funds?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Login to your account using your username and password and check the Withdraw section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- faq-area-end -->

    <!-- contact-area -->
    <section id="contact" class="contact-aera contact-bg">
        <div class="container custom-container-four">
            <div class="contact-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-info-wrap-two wow fadeInLeft" data-wow-delay=".2s">
                            <h2 class="title">Get in Touch</h2>
                            <div class="contact-list-item">
                                <div class="icon">
                                    <img src="{{ url('frontend/asstes/img/icon/contact_icon01.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <p>17410 W 86th Terrace, Lenexa, United States</p>
                                </div>
                            </div>
                            <div class="contact-list-item">
                                <div class="icon">
                                    <img src="{{ url('frontend/asstes/img/icon/contact_icon01.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <p>support@omkarafuturetrade.in</p>
                                </div>
                            </div>
                            <div class="contact-list-item">
                                <div class="icon">
                                    <img src="{{ url('frontend/asstes/img/icon/contact_icon01.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <p>(913) 310-9914</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-wrap-two wow fadeInRight" data-wow-delay=".2s">
                            <h2 class="title">Lets Get in touch with us</h2>
                            <form action="#">
                                <input type="text" placeholder="Name" required>
                                <input type="email" placeholder="Email Address" required>
                                <textarea name="massage" placeholder="Massage" required></textarea>
                                <button type="submit" class="btn btn-two">Send Massage</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- newsletter-area -->

    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->


<!-- footer-area -->
<footer>
    <div class="footer-area-two">
        <div class="container custom-container-four">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-8">
                        <div class="footer-menu-two">
                            <ul class="navigation">
                                <li><a href="#about">About us</a></li>
                                <li><a href="#roadmap">Roadmap</a></li>
                                <li><a href="#highlight">Features</a></li>
                                <li><a href="#faq">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024. All Rights Reserved {{env('APP_NAME')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="scroll-up text-center">
                            <button class="scroll-to-target" data-target="html"><i class="fas fa-arrow-up"></i></button>
                            <span>scroll Top</span>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-bottom-menu">
                            <ul>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
<!-- footer-area-end -->