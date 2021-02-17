<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="RenoMate">
    <!-- Page Title -->
    <title>RenoMate | Virtual interior designing made easy</title>
    <!-- Favicon -->
    <link href="{{asset('metronic/media/logos/favicon.ico')}}" rel="icon">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{asset('megaone/css/bundle.min.css')}}">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="{{asset('megaone/css/revolution-settings.min.css')}}">
    <!-- Plugin Css -->
    <link href="{{asset('megaone/css/LineIcons.min.css')}}" rel="stylesheet">
    <link href="{{asset('megaone/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('megaone/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('megaone/css/wow.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('megaone/css/cubeportfolio.min.css')}}">
    <link href="{{asset('megaone/css/line-awesome.min.css')}}" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="{{asset('megaone/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('megaone/css/custom.css')}}" rel="stylesheet">
    <style>
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            .wording-bongok{
                position: absolute;
                top: 5%;
                /*left: 37%;*/
                /*transform: translate(-30%, -30%);*/
                font-weight: normal !important;
                color: #dcffdc;
                /*text-align: justify;*/
                font-size: 20px;
                line-height: 0.9;
                text-shadow: 2px 2px 3px #000000;
            }
        }

        @media only screen and (min-width: 768px) {
            /* For desktop: */
            .wording-bongok{
                position: absolute;
                top: 26%;
                left: 32%;
                transform: translate(-30%, -30%);
                color: #dcffdc;
                text-align: center;
                font-size: 35px;
                line-height: 1.9;
                text-shadow: 3px 3px 3px #000000;
            }
        }

        .card-custom {
            overflow: hidden;
            min-height: 450px;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
        }

        .card-custom-img {
            height: 200px;
            min-height: 200px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-color: inherit;
        }

        /* First border-left-width setting is a fallback */
        .card-custom-img::after {
            position: absolute;
            content: '';
            top: 161px;
            left: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-top-width: 40px;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 545px;
            border-left-width: calc(575px - 5vw);
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: inherit;
        }

        .card-custom-avatar img {
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
            position: absolute;
            top: 100px;
            left: 1.25rem;
            width: 100px;
            height: 100px;
        }

        #gallery img {
            height: 40vw;
            object-fit: cover;
        }

        @media (min-width: 768px) {
            #gallery img {
                height: 25vw;
            }
        }

        @media (min-width: 992px) {
            #gallery img {
                height: 18vw;
            }
        }

        .carousel-item img {
            height: 60vw;
            object-fit: cover;
        }

        @media (min-width: 576px) {
            .carousel-item img {
                height: 350px;
            }
        }


    </style>
</head>



<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Start Loader -->
<div class="loader1">
    <div class="loader-inner">
        <div id="preloader">
            <div id="loader"></div>
        </div>
    </div>
</div>
<!-- End Loader -->

<!-- Start Header -->
<header>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <a href="" title="Logo" class="logo">
                <!--Logo Default-->
                <img src="{{asset('megaone/images/logo-white.png')}}" title="logo" alt="logo" class="logo-default">
            </a>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="megaone">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="{{route('landing')}}">Home</a>
                    <a class="nav-link" href="{{route('landing')}}">About</a>
{{--                    <a class="nav-link scroll line" href="#portfolio">Designs</a>--}}
                    <a class="nav-link active" href="{{ route('designer') }}">Designer</a>
                    <a class="nav-link" href="{{route('landing')}}">Contact</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>

        <!--Side Menu Button-->
        <div class="navigation-toggle">
            <ul class="slider-social toggle-btn my-0">
                <li>
                    <a href="javascript:void(0);" class="sidemenu_btn" id="sidemenu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu hidden">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <a href="#" title="Logo" class="logo side-logo">
                <!--Logo Default-->
                <img src="{{asset('megaone/images/logo-white.png')}}" alt="logo">
            </a>
            <nav class="side-nav w-100">
                <ul class="navbar-nav side-navbar">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing')}}">About</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link scroll" href="#portfolio">Designs</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('designer') }}">Designer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p>&copy; 2020 RenoMate.</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
</header>
<!-- End Header -->

<!-- Start About -->
<section class="about" id="about">
    <div class="container">
        <!--Heading-->
        <div class="row text-center">
            <div class="col-12 col-md-10 col-lg-10 offset-md-1 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">
                <h3 class="heading text-center text-green"><span class="d-block text-green"> <span style="color: #26313c">Our</span> Designer</span></h3>
            </div>
        </div>
        <br>
        <br>

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0 rounded-card">
            <div class="card-custom-img" style="background-image: url({{asset('megaone/images/designer-banner-2.png')}});"></div>
            <div class="card-custom-avatar">
                <img class="img-fluid" src="https://image.freepik.com/free-vector/orange-square-company-logo-vector-template_9551-27.jpg" alt="Avatar" />
            </div>
            <div class="card-body" style="overflow-y: auto">
                <h4 class="card-title">Company Name</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="card-footer" style="background: inherit; border-color: inherit;">
{{--                <a href="#" class="btn btn-primary">Option</a>--}}
                <a href="{{route('designer-details')}}" target="_blank" class="btn btn-outline-success rounded">View Profile</a>
            </div>
        </div>
        <!-- Copy until here -->
        <br>
        <br>

    </div>
</section>
<!-- End About -->
{{--@include('landing.modal.designer-details')--}}


{{--<!-- Start About -->--}}
{{--<section class="about" id="about" style="background-color: #f2fff0">--}}
{{--    <div class="container">--}}
{{--        <!--Heading-->--}}
{{--        <div class="row text-center">--}}
{{--            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">--}}
{{--                <h3 class="heading text-center"><span class="d-block"> Interior Designing</span> As Your Lifestyle</h3>--}}
{{--                <p class="text text-center">2020 is the year of digitalized virtual Interior Designing made easy.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- App Detail -->--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">--}}
{{--                <!-- Service-1 -->--}}
{{--                <div class="row app-feature equal-margin">--}}
{{--                    <div class="col-12 col-lg-3 p-lg-0">--}}
{{--                        <h5 class="number">01.</h5>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-9 p-lg-0">--}}
{{--                        <h4 class="my-3">Upload</h4>--}}
{{--                        <p>Upload your floor plan.</p><br>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Service-3-->--}}
{{--                <div class="row app-feature equal-margin">--}}
{{--                    <div class="col-12 col-lg-3 p-lg-0">--}}
{{--                        <h5 class="number">03.</h5>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-9 p-lg-0">--}}
{{--                        <h4 class="my-3">Virtual Reality</h4>--}}
{{--                        <p>Tour of your completed house with a 720&#176; view walk through.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"></div>--}}

{{--            <div class="col-lg-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">--}}
{{--                <!-- Service-2 -->--}}
{{--                <div class="row app-feature equal-margin">--}}
{{--                    <div class="col-12 col-lg-3 p-lg-0">--}}
{{--                        <h5 class="number">02.</h5>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-9 p-lg-0">--}}
{{--                        <h4 class="my-3">Design</h4>--}}
{{--                        <p>Choose from our database with assistance from your designer.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Service-4 -->--}}
{{--                <div class="row app-feature equal-margin">--}}
{{--                    <div class="col-12 col-lg-3 p-lg-0">--}}
{{--                        <h5 class="number">04.</h5>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-9 p-lg-0">--}}
{{--                        <h4 class="my-3">Render & Quote</h4>--}}
{{--                        <p>1 day is all it takes to get your rendered design and complete quotation.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}
{{--<!-- End About -->--}}

{{--<!-- Start Counters -->--}}
{{--<section id="counters" class="bg-counters">--}}
{{--    <div class="container">--}}
{{--        <!-- Quote Btn -->--}}
{{--        <div class="row text-center">--}}
{{--            <div class="col-12 wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">--}}
{{--                <div class="quote-btn">--}}
{{--                    --}}{{--                    <p>Lorem ipsum dolor sit amet</p>--}}
{{--                    <h4>"Get Your Dream Home Illustrated Within Your Reach"</h4>--}}
{{--                    <br>--}}
{{--                    <a href="#contact" class="btn btn-medium btn-rounded btn-green">Learn More!</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- End Counters -->--}}

<!-- Start Footer -->
<footer class="footer-style-1 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-md-6">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        <li>
                            <a class="wow fadeInUp" href="javascript:void(0);">
                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a class="wow fadeInDown" href="javascript:void(0);">
                                <i aria-hidden="true" class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="wow fadeInUp" href="javascript:void(0);">
                                <i aria-hidden="true" class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-md-6 text-md-right">
                <p class="company-about fadeIn pr-0 pr-md-1">© 2020 RenoMate.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- JavaScript -->
<script src="{{asset('megaone/js/bundle.min.js')}}"></script>
<!-- Plugin Js -->
<script src="{{asset('megaone/js/morphext.min.js')}}"></script>
<script src="{{asset('megaone/js/jquery.appear.js')}}"></script>
<script src="{{asset('megaone/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('megaone/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('megaone/js/wow.min.js')}}"></script>
<script src="{{asset('megaone/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- Map JS -->
<script src="{{asset('megaone/js/script.js')}}"></script>
</body>

</html>
