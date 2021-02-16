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
                    <a class="nav-link scroll line" href="#slider">Home</a>
                    <a class="nav-link scroll line" href="#about">About</a>
                    <a class="nav-link scroll line" href="#portfolio">Designs</a>
                    <a class="nav-link scroll line" href="#contact">Contact</a>
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
                        <a class="nav-link scroll" href="#slider">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#portfolio">Designs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact">Contact</a>
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

<!-- Start Slider -->
<section class="slider position-relative" id="slider">
    <div class="row">
        <div class="col-12">
            <div id="sync1" class="owl-carousel owl-theme">
                <!-- Item-1 -->
                <div class="item">
                    <div class="col-md-10 mx-auto font-weight-bold wording-bongok wow zoomIn" data-wow-delay="2s">
                        <p>Get the lifestyle of your choice. Design your dream home with a dedicated interior designer and walk-through your design in an immersive 720&#176; view by choosing products from our extensive products library incorporating various manufacturers and service providers</p>
                    </div>
                    <img src="{{asset('megaone/images/slider-img-1.png')}}" alt="Slider-Image">
                </div>
                <!-- Item-2 -->
                <div class="item">
                    <img src="{{asset('megaone/images/slider-img-2.png')}}" alt="Slider-Image">
                </div>
                <!-- Item-3 -->
                <div class="item">
                    <img src="{{asset('megaone/images/slider-img-3.png')}}" alt="Slider-Image">
                </div>
            </div>
        </div>
    </div>
    <div class="slider-icons">
        <ul class="slider-social banner-social">
            <li><a class="" href="javascript:void(0);"><i class="fab fa-facebook-f"></i> </a></li>
            <li><a class="" href="javascript:void(0);"><i class="fab fa-twitter"></i>  </a></li>
{{--            <li><a class="" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i> </a></li>--}}
            <li><a class="" href="javascript:void(0);"><i class="fab fa-instagram"></i> </a></li>
        </ul>
    </div>
</section>
<!-- End Slider -->

<!-- Some Services -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="sync2" class="owl-carousel owl-theme services-slider wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                <!-- Item-1 -->
                <div class="item">
                    <div class="service-box">
                        <span><i class="fa fa-pencil-ruler"></i></span>
                        <h4 class="my-3">Manufacturer</h4>
                        <p>Choose from 100,000+ products from our manufacturers to either buy directly or incorporate into your home design</p>
                    </div>
                </div>
                <!-- Item-2 -->
                <div class="item">
                    <div class="service-box">
                        <span><i class="fa fa-layer-group"></i></span>
                        <h4 class="my-3">Designer</h4>
                        <p>Upload the floor plan and design your dream home with a dedicated designer<br><br><br></p>
                    </div>
                </div>
                <!-- Item-3 -->
                <div class="item">
                    <div class="service-box">
                        <span><i class="fa fa-clipboard-list"></i></span>
                        <h4 class="my-3 ">Services</h4>
                        <p>We cover all kind of services when it comes to renovating a house<br><br><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-image">
        <img src="{{asset('megaone/images/service.png')}}" alt="Service">
    </div>
</div>
<!-- Some Services -->

<!-- Start About -->
<section class="about" id="about">
    <div class="container">
        <!--Heading-->
        <div class="row text-center">
            <div class="col-12 col-md-10 col-lg-10 offset-md-1 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">
                <h3 class="heading text-center text-green"><span class="d-block text-green"> <span style="color: #26313c">About</span> Us</span></h3>
                <h2 class="text text-center font-weight-bold">Who we are</h2>
                <p class="text text-justify" style="line-height: 2.5;">We are representing the industry on delivering the best quality products that come from Malaysia. Through this platform, we are able to save time on visits to the showroom together with the reduction of waiting period on the quotation. Timely Delivery is the key of customer’s satisfaction apart from cost. By monitoring and guiding the vendors through the whole pipeline, we are able to provide that. Our goal is to be able to elevate the standards of Malaysian products and eventually will bring them up to the global market through this full of possibilities platform.</p>
            </div>
        </div>

    </div>
</section>
<!-- End About -->


<!-- Start About -->
<section class="about" id="about" style="background-color: #f2fff0">
    <div class="container">
        <!--Heading-->
        <div class="row text-center">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">
                <h3 class="heading text-center"><span class="d-block"> Interior Designing</span> As Your Lifestyle</h3>
                <p class="text text-center">2020 is the year of digitalized virtual Interior Designing made easy.</p>
            </div>
        </div>
        <!-- App Detail -->
        <div class="row align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <!-- Service-1 -->
                <div class="row app-feature equal-margin">
                    <div class="col-12 col-lg-3 p-lg-0">
                        <h5 class="number">01.</h5>
                    </div>
                    <div class="col-12 col-lg-9 p-lg-0">
                        <h4 class="my-3">Upload</h4>
                        <p>Upload your floor plan.</p><br>
                    </div>
                </div>
                <!-- Service-3-->
                <div class="row app-feature equal-margin">
                    <div class="col-12 col-lg-3 p-lg-0">
                        <h5 class="number">03.</h5>
                    </div>
                    <div class="col-12 col-lg-9 p-lg-0">
                        <h4 class="my-3">Virtual Reality</h4>
                        <p>Tour of your completed house with a 720&#176; view walk through.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"></div>

            <div class="col-lg-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                <!-- Service-2 -->
                <div class="row app-feature equal-margin">
                    <div class="col-12 col-lg-3 p-lg-0">
                        <h5 class="number">02.</h5>
                    </div>
                    <div class="col-12 col-lg-9 p-lg-0">
                        <h4 class="my-3">Design</h4>
                        <p>Choose from our database with assistance from your designer.</p>
                    </div>
                </div>
                <!-- Service-4 -->
                <div class="row app-feature equal-margin">
                    <div class="col-12 col-lg-3 p-lg-0">
                        <h5 class="number">04.</h5>
                    </div>
                    <div class="col-12 col-lg-9 p-lg-0">
                        <h4 class="my-3">Render & Quote</h4>
                        <p>1 day is all it takes to get your rendered design and complete quotation.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About -->

<!-- Start Counters -->
<section id="counters" class="bg-counters">
    <div class="container">
        <!-- Quote Btn -->
        <div class="row text-center">
            <div class="col-12 wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="quote-btn">
                    {{--                    <p>Lorem ipsum dolor sit amet</p>--}}
                    <h4>"Get Your Dream Home Illustrated Within Your Reach"</h4>
                    <br>
                    <a href="#contact" class="btn btn-medium btn-rounded btn-green">Learn More!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counters -->

<!-- Start Portfolio -->
<section id="portfolio" class="cube-portfolio1 padding-top">
    <div class="container">
        <!--Heading-->
        <div class="row text-center">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">
                <h3 class="heading text-center"><span class="text-green js-rotating">Design,Create</span> without limit,<span class="d-block"> Creativity guaranteed</span></h3>
            <br>
            </div>
        </div>
            <div class="row wow fadeInUp">
            <div class="col-md-12">
                <!--Portfolio Filters-->
                <div id="js-filters-mosaic-flat" class="cbp-l-filters-button text-center">
                </div>

                <!--Portfolio Items-->
                <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">

                    <div class="cbp-item web-design graphic">
                        <a href="{{asset('megaone/images/portfolio-img-1.jpg')}}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('megaone/images/portfolio-img-1.jpg')}}" alt="port-1">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                            <div class="cbp-l-caption-alignCenter center-block">
                                <div class="cbp-l-caption-body">
                                    <div class="plus"></div>
                                    <h5 class="text-white mb-1">View Large</h5>
                                    <p class="text-white">See Our Amazing Work</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item seo marketing">
                        <a href="{{asset('megaone/images/portfolio-img-2.jpg')}}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('megaone/images/portfolio-img-2.jpg')}}" alt="port-2">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                            <div class="cbp-l-caption-alignCenter center-block">
                                <div class="cbp-l-caption-body">
                                    <div class="plus"></div>
                                    <h5 class="text-white mb-1">View Large</h5>
                                    <p class="text-white">See Our Amazing Work</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item seo marketing">
                        <a href="{{asset('megaone/images/portfolio-img-3.jpg')}}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('megaone/images/portfolio-img-3.jpg')}}" alt="port-4">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                            <div class="cbp-l-caption-alignCenter center-block">
                                <div class="cbp-l-caption-body">
                                    <div class="plus"></div>
                                    <h5 class="text-white mb-1">View Large</h5>
                                    <p class="text-white">See Our Amazing Work</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic seo marketing">
                        <a href="{{asset('megaone/images/portfolio-img-4.jpg')}}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('megaone/images/portfolio-img-4.jpg')}}" alt="port-3">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                            <div class="cbp-l-caption-alignCenter center-block">
                                <div class="cbp-l-caption-body">
                                    <div class="plus"></div>
                                    <h5 class="text-white mb-1">View Large</h5>
                                    <p class="text-white">See Our Amazing Work</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic">
                        <a href="{{asset('megaone/images/portfolio-img-11.jpg')}}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('megaone/images/portfolio-img-11.jpg')}}" alt="port-5">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                            <div class="cbp-l-caption-alignCenter center-block">
                                <div class="cbp-l-caption-body">
                                    <div class="plus"></div>
                                    <h5 class="text-white mb-1">View Large</h5>
                                    <p class="text-white">See Our Amazing Work</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item seo marketing graphic ">
                        <a href="{{asset('megaone/images/portfolio-img-6.jpg')}}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('megaone/images/portfolio-img-6.jpg')}}" alt="port-6">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                            <div class="cbp-l-caption-alignCenter center-block">
                                <div class="cbp-l-caption-body">
                                    <div class="plus"></div>
                                    <h5 class="text-white mb-1">View Large</h5>
                                    <p class="text-white">See Our Amazing Work</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design seo">
                        <a href="{{asset('megaone/images/portfolio-img-7.jpg')}}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('megaone/images/portfolio-img-7.jpg')}}" alt="port-7">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                            <div class="cbp-l-caption-alignCenter center-block">
                                <div class="cbp-l-caption-body">
                                    <div class="plus"></div>
                                    <h5 class="text-white mb-1">View Large</h5>
                                    <p class="text-white">See Our Amazing Work</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic">
                        <a href="{{asset('megaone/images/portfolio-img-8.jpg')}}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('megaone/images/portfolio-img-8.jpg')}}" alt="port-8">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                            <div class="cbp-l-caption-alignCenter center-block">
                                <div class="cbp-l-caption-body">
                                    <div class="plus"></div>
                                    <h5 class="text-white mb-1">View Large</h5>
                                    <p class="text-white">See Our Amazing Work</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">
                        <h3 class="heading text-center">Experience your design in <span class="text-green js-rotating">720&#176;,720&#176;</span> view </h3>
                    </div>
                </div>
                <br>
                <iframe src="https://www.coohom.com/pub/tool/panorama/aiwalking?obsPlanId=3FO4CHEP1I94" height="700" width="900" title="Iframe Example" style="border-radius: 5px; overflow: hidden;"></iframe>

            </div>
            </div>



    </div>
</section>
<!-- End Portfolio -->

<!-- Start Client -->
<section class="bg-light-black" id="client">
    <div class="container">
            <div class="row text-center">
                <div class="col-12 wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-12">
                        <div class="text-white font-weight-bold">
                            <h1><b>Contact <span style="color: #36a837">Us</span></b></h1>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- End Client End -->

<!-- Start Map -->
<div class="p-0 bg-light-black map-area">


    <div class="container">
        <!--Map Initialize-->
        <div class="full-map" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8957113213073!2d101.7278053154142!3d3.122276354186353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc366d4deaaaab%3A0x2e689e93340b0e2b!2sPEKA%20(Persatuan%20Pengusaha%20Kayu-kayan%20dan%20Perabot%20Bumiputra%20Malaysia)!5e0!3m2!1sen!2smy!4v1608787334950!5m2!1sen!2smy" width="600" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!-- End Map -->

<!-- Start Contact -->
<section class="contact-sec" id="contact">
    <div class="container">
        <div class="row align-items-top">
            <div class="col-lg-5 order-lg-2 wow fadeInRight">
                <div class="contact-details heading-area">
                    <div class="contact-dots" data-dots=""></div>
                    <h4 class="heading main-font">Head Office</h4>
                    <p class="text alt-font">PEKA (Persatuan Pengusaha Kayu-Kayan Dan Perabot Bumiputra)</p>
                    <ul>
                        <li><i aria-hidden="true" class="las la-map-marker"></i> 19F, 19th Floor, Menara PGRM, 8, Jalan Pudu Ulu, Taman Pertama, 56100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</li>
                        <li><i aria-hidden="true" class="las la-phone"></i>
                            <span>+6017 700 3755</span>
                        </li>
                        <li><i aria-hidden="true" class="las la-paper-plane"></i>info@renomate.my</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 mt-4 pt-3 mt-lg-0 pt-lg-0 wow fadeInLeft">
                <!--Heading-->
                <div class="heading-area pb-2">
                    <h2 class="heading">Let’s Get In Touch</h2>
                </div>
                <!--Contact Form-->
                <form class="contact-form" id="contact-form-data">
                    <div class="row">
                        <!--Result-->
                        <div class="col-12" id="result"></div>
                        <!--Left Column-->
                        <div class="col-md-5">
                            <div class="form-group">
                                <input class="form-control" id="your_name" name="userName" placeholder="Your Name" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="your_email" name="userEmail" placeholder="Email Address" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="subject" name="userSubject" placeholder="Subject" type="text">
                            </div>
                        </div>
                        <!--Right Column-->
                        <div class="col-md-7">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="userMessage" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <!--Button-->
                        <div class="col-md-12">
                            <a href="javascript:void(0);" class="btn btn-medium btn-rounded btn-green w-100 contact_btn main-font mt-4">Send Message</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="contact-dots" data-dots=""></div>
<!--Contact End-->

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
