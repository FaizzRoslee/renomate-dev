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

        .lightbox-gallery {
            /*background-image: linear-gradient(#4A148C, #E53935);*/
            /*background-repeat: no-repeat;*/
            /*color: #000;*/
            overflow-x: hidden
        }

        .lightbox-gallery p {
            color: #000000;
        }

        .lightbox-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: #000000
        }

        @media (max-width:767px) {
            .lightbox-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px
            }
        }

        .lightbox-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px
        }

        .lightbox-gallery .intro p {
            margin-bottom: 0
        }

        .lightbox-gallery .photos {
            padding-bottom: 20px
        }

        .lightbox-gallery .item {
            padding-bottom: 30px
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

<section style="background-image: url({{asset('megaone/images/designer-banner-2.png')}})">

    <br>
    <br>
    <div class="col-12 col-md-10 col-lg-10 offset-md-1 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">
        <h6 class="heading text-center text-green"><span class="d-block text-dark">Designer's Company Name</span></h6>
    </div>

</section>

<section class="about">
    <div class="container">
        <!--Heading-->
{{--        <div class="row text-center">--}}
{{--            <div class="col-12 col-md-10 col-lg-10 offset-md-1 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">--}}
{{--                <h3 class="heading text-center text-green"><span class="d-block text-green"> <span style="color: #26313c">Our</span> Designer</span></h3>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        <br>--}}
        <div class="card mb-3 shadow-sm">
            <img class="card-img-top" src="https://wallpaperaccess.com/full/1899354.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Project Title Name</h5>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget nunc lobortis mattis aliquam faucibus purus. Dictum fusce ut placerat orci nulla pellentesque dignissim enim. Neque aliquam vestibulum morbi blandit cursus risus at ultrices. Et odio pellentesque diam volutpat commodo. Egestas congue quisque egestas diam in arcu. Proin sed libero enim sed faucibus turpis. Purus in massa tempor nec. Sed euismod nisi porta lorem mollis aliquam ut porttitor leo. Augue neque gravida in fermentum et sollicitudin. A cras semper auctor neque vitae tempus quam.
                {{--                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
            <p class="card-text">                    Viverra nam libero justo laoreet sit. Turpis in eu mi bibendum. Faucibus nisl tincidunt eget nullam non nisi est sit. Semper risus in hendrerit gravida rutrum quisque. Viverra justo nec ultrices dui sapien eget mi proin sed. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae congue. Nulla pharetra diam sit amet nisl suscipit. Integer vitae justo eget magna fermentum iaculis eu non. Dolor purus non enim praesent elementum facilisis. Duis convallis convallis tellus id. Egestas sed tempus urna et pharetra pharetra massa massa.                </p>
                </p>
            </div>
        </div>


    </div>
</section>

<!-- Start About -->
<section class="about" id="about" style="background-color: #f2fff0">
    <div class="container">


        <div class="lightbox-gallery">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center text-success">Finished Project Gallery</h2>
{{--                    <p class="text-center">Find the lightbox gallery for your project. click on any image to open gallary</p>--}}
                </div>
                <div class="row photos">
                    <div class="col-sm-9 col-md-3 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid rounded shadow-sm" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                    <div class="col-sm-9 col-md-3 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid rounded shadow-sm" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                    <div class="col-sm-9 col-md-3 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid rounded shadow-sm" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                    <div class="col-sm-9 col-md-3 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid rounded shadow-sm" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                    <div class="col-sm-9 col-md-3 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid rounded shadow-sm" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                    <div class="col-sm-9 col-md-3 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid rounded shadow-sm" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                    <div class="col-sm-9 col-md-3 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid rounded shadow-sm" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                    <div class="col-sm-9 col-md-3 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid rounded shadow-sm" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<section class="about">
    <div class="container">
        <div class="card bg-light mb-3 shadow-sm">
            <div class="card-header text-center">Finished Project VR</div>
            <div class="card-body">
                <iframe src="https://www.coohom.com/pub/tool/panorama/aiwalking?obsPlanId=3FO4CHEP1I94" height="700" width="900" title="Iframe Example" style="border-radius: 5px; overflow: hidden;"></iframe>
            </div>
        </div>


    </div>
</section>

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
