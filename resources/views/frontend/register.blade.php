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
                                    <li class="header-btn"><a href="login" class="btn">Login</a></li>
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

                            <div class="section-title text-center  mb-20">

                                <!-- <span class="sub-title">Login</span> -->
                                <h2 class="title"><span>Register</span> </h2>
                            </div>
                            <br>


                            <div class="dreamit-auction-box wow fadeInDown animated animated animated animated animated" data-wow-delay=".6s">

                                <div class="auction-box-inner">

                                    <div class="sign-in-respond text-center mt-4">

                                        @if(Session::has('message'))
                                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                                        @endif


                                        <form method="post" action="registration-process" style="margin:25px 0;">
                                            @csrf
                                            <div class="row">


                                                <div class="col-md-12">
                                                    <div class="form-grp ">
                                                        <input type="text" class="form-control" placeholder="Sponsor Code" id="sponsorid" name="sponsorid" value="<?php echo (isset($_REQUEST['sponsor']) && $_REQUEST['sponsor']) ? strtoupper(trim($_REQUEST['sponsor'])) : ''; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class=" form-control" placeholder="Your Sponsor Name" type="text" name="username" id="username" value="" readonly style="border: none;  box-shadow: none;">

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <input type="text" class="form-control" placeholder="Your Name" name="firstname" required>
                                                    </div>
                                                </div>



                                                <div class="col-md-12">
                                                    <div class="form-grp">

                                                        <select type="text" class="mySelectBox form-control" id="country_code" name="country_code" required>
                                                            <option value="">Select Country</option>
                                                            <option value="+1">+1 (USA)</option>
                                                            <option value="+91">+91 (India)</option>
                                                            <option value="+44">+44 (UK)</option>
                                                            <option value="+61">+61 (Australia)</option>
                                                            <option value="+64">+64 (New Zealand)</option>
                                                            <option value="+33">+33 (France)</option>
                                                            <option value="+49">+49 (Germany)</option>
                                                            <option value="+81">+81 (Japan)</option>
                                                            <option value="+86">+86 (China)</option>
                                                            <option value="+7">+7 (Russia)</option>
                                                            <option value="+55">+55 (Brazil)</option>
                                                            <option value="+82">+82 (South Korea)</option>
                                                            <option value="+234">+234 (Nigeria)</option>
                                                            <option value="+27">+27 (South Africa)</option>
                                                            <option value="+92">+92 (Pakistan)</option>
                                                            <option value="+62">+62 (Indonesia)</option>
                                                            <option value="+90">+90 (Turkey)</option>
                                                            <option value="+20">+20 (Egypt)</option>
                                                            <option value="+84">+84 (Vietnam)</option>
                                                            <option value="+52">+52 (Mexico)</option>
                                                            <option value="+63">+63 (Philippines)</option>
                                                            <option value="+7">+7 (Kazakhstan)</option>
                                                            <option value="+30">+30 (Greece)</option>
                                                            <option value="+46">+46 (Sweden)</option>
                                                            <option value="+358">+358 (Finland)</option>
                                                            <option value="+351">+351 (Portugal)</option>
                                                            <option value="+34">+34 (Spain)</option>
                                                            <option value="+31">+31 (Netherlands)</option>
                                                            <option value="+49">+49 (Germany)</option>
                                                            <option value="+41">+41 (Switzerland)</option>
                                                            <option value="+82">+82 (South Korea)</option>
                                                            <option value="+81">+81 (Japan)</option>
                                                            <option value="+86">+86 (China)</option>
                                                            <option value="+91">+91 (India)</option>
                                                            <option value="+880">+880 (Bangladesh)</option>
                                                            <option value="+92">+92 (Pakistan)</option>
                                                            <option value="+94">+94 (Sri Lanka)</option>
                                                            <option value="+65">+65 (Singapore)</option>
                                                            <option value="+60">+60 (Malaysia)</option>
                                                            <option value="+62">+62 (Indonesia)</option>
                                                            <option value="+63">+63 (Philippines)</option>
                                                            <option value="+66">+66 (Thailand)</option>
                                                            <option value="+84">+84 (Vietnam)</option>
                                                            <option value="+65">+65 (Singapore)</option>
                                                            <option value="+971">+971 (United Arab Emirates)</option>
                                                            <option value="+965">+965 (Kuwait)</option>
                                                            <option value="+966">+966 (Saudi Arabia)</option>
                                                            <option value="+973">+973 (Bahrain)</option>
                                                            <option value="+968">+968 (Oman)</option>
                                                            <option value="+972">+972 (Israel)</option>
                                                            <option value="+964">+964 (Iraq)</option>

                                                        </select>

                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-grp ">
                                                        <input type="number" class="form-control" placeholder="Mobile Number" name="phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" hidden>
                                                    <div class="form-grp ">
                                                        <input class=" form-control" placeholder="Your Tron Address" type="text" name="tron" value="">

                                                    </div>
                                                </div>



                                                <div class="form-group  margin-top-20 margin-bottom-20 has-feedback">
                                                    <input id="basic_checkbox_1" type="checkbox" name="tnc" required>
                                                    <label for="basic_checkbox_1"> I agree to the <a href="term_condtion">Terms of Service </a> </label>
                                                    <div id="register_tnc_error"></div>
                                                    <p class="text-danger check_margin"></p>

                                                </div>

                                            </div>

                                            <div class="submit-btn mt-3 mb-3 text-center">
                                                <button type="submit" class="btn btn-two w-100 ">Register</button>
                                            </div>

                                            <p class="forgot_text mt-4 mb-0 text-center">
                                                Already have an account ? <a class="link" href="login"> Sign In</a>
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


<script>
    $(document).ready(function() {

        var id = $('#sponsorid').val();

        if (id) {

            $.ajax({

                url: "getSponsorName.php",

                type: "GET",

                dataType: 'JSON',

                data: {

                    "id": id

                },

                success: function(result) {

                    if (result.status) {

                        $("#username").val(result.name);

                    } else {

                        $("#username").val('No User Found !');

                    }

                },

                error: function(error) {

                    alert('Something Went Wrong!');

                    return false;

                }

            });

        }



        $('#sponsorid').bind("keyup", function(e) {

            e.preventDefault();

            var id = $(this).val();



            $.ajax({

                url: "getSponsorName.php",

                type: "GET",

                dataType: 'JSON',

                data: {

                    "id": id

                },

                success: function(result) {

                    if (result.status) {

                        $("#username").val(result.name);

                    } else {

                        $("#username").val('No User Found !');

                    }

                },

                error: function(error) {

                    alert('Something Went Wrong!');

                    return false;

                }

            });

        });

    });
</script>

@endsection
<!-- footer-area-end -->