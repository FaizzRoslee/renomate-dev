<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="RenoMate">
    <!-- Description -->

    <!-- Page Title -->
    <title>RenoMate | Vendor Registration</title>
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
        #header {
            {{--background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url({{asset('metronic/media/bg/header-register.png')}});--}}
            background: url({{asset('metronic/media/bg/header-register.png')}});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 70vh;
        }

        #spalsh-card{
            /*display: -webkit-box;*/
            /*display: flex;*/
            /*max-width: 950px;*/
            /*margin: auto;*/
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
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
                    <a class="nav-link" href="{{route('landing')}}">Designs</a>
                    <a class="nav-link" href="{{route('landing')}}">Contact</a>
                    <a class="nav-link active" href="{{route('register')}}">Register</a>
                    <a class="nav-link" href="{{route('login')}}">Login</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing')}}">Designs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    {{--                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>--}}
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p>&copy; 2020 RenoMate.</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
</header>
<!-- End Header -->

<header id="header"></header>


{{--<section id="features">--}}

<div id="spalsh-card">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card card-custom bgi-no-repeat gutter-b rounded shadow-lg" style="height: 350px; background-color: #1B283F; background-position: calc(90% + 0.5rem) calc(90% + 0.5rem); background-size: 100% auto; background-image: url({{asset('metronic/media/svg/patterns/rhone-2.svg')}})">
                <!--begin::Body-->
                <div class="card-body">
                    <h1 class="font-weight-bolder" style="color: #02a85b; text-shadow: 2px 2px 2px #000000;">Register As Our Partner</h1>
                    <h4 class="text-muted font-size-lg mt-5 mb-10" style="color: #115392;">Please fill-up vendor registration below</h4>
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="card card-custom bgi-no-repeat gutter-b rounded shadow-lg p-3 mb-5">
            <div class="card-header rounded">
                <h1 class="card-label font-weight-bold" style="color: #02a85b; text-shadow: 2px 2px 2px #000000;">
                    VENDOR REGISTRATION FORM
                </h1>
            </div>
            <!--begin::Body-->
            <form class="form">
                <div class="card-body">
                    <br>
                    <br>
                    <h4 class="text-dark mb-4 font-weight-bold">APPLICANT’S INFORMATION </h4>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Applicant Name:</label>
                            <input type="text" class="form-control" placeholder="Enter applicant name"/>
                        </div>
                    </div>

                    <h5 class="text-dark mb-2">Company Details </h5>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Company Name:</label>
                            <input type="text" class="form-control" placeholder="Enter company name"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Company Address:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter company address"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Telephone No:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter company telephone no"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Email:</label>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter company email address"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Company Registration No:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter company registration number"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Factory Address (If Any):</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter company factory address"/>
                            </div>
                        </div>
                    </div>

                    <h5 class="text-dark mb-2 mt-5">Contact Person Details </h5>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Name:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter contact person name"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Telephone No:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter contact person telephone number"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Email:</label>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter contact person email"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Professional Body Registered (If Any):</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter registered professional body info"/>
                            </div>
                        </div>
                    </div>

                    <h4 class="text-dark mb-4 mt-5 font-weight-bold">COMPANY REGISTRATION INFORMATION </h4>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>MINISTRY OF FINANCE MALAYSIA (MOF):</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter MOF number"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>LEMBAGA PEMBANGUNAN INDUSTRI PEMBINAAN MALAYSIA (CIDB):</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter CIDB number"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>LEMBAGA PERINDUSTRIAN KAYU MALAYSIA (MTIB):</label>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter MTIB number"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>MALAYSIAN TIMBER COUNCIL (MTC):</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter MTC number"/>
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4 class="text-dark mb-4 font-weight-bold">REGISTRATION CATEGORY </h4>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Category:</label>
                            <div class="checkbox-list">
                                <label class="checkbox">
                                    <input type="checkbox"  name="Checkboxes4"/>
                                    <span></span>
                                    MANUFACTURER
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="Checkboxes4"/>
                                    <span></span>
                                    DESIGNERS
                                </label>
                                <label class="checkbox checkbox-disabled">
                                    <input type="checkbox" name="Checkboxes4"/>
                                    <span></span>
                                    SERVICES
                                </label>
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4 class="text-dark mb-4 font-weight-bold">PRODUCT INFORMATION </h4>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <table style="width:100%">
                                <thead>
                                <tr>
                                    <th rowspan="2">CATEGORY</th>
                                    <th colspan="3" style="text-align:center">SERVICE CATEGORY</th>
                                    <th rowspan="2">PRODUCT CAPACITY (MONTHLY)</th>
                                </tr>
                                <tr>
                                    <th>MANUFACTURER</th>
                                    <th>DESIGNERS</th>
                                    <th>SERVICES</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>WARDROBE</td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <input type="email" class="form-control" placeholder="Enter monthly capacity"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>KITCHEN CABINET</td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <input type="email" class="form-control" placeholder="Enter monthly capacity"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INTERIOR DESIGNING</td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <input type="email" class="form-control" placeholder="Enter monthly capacity"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>WALLPAPER/
                                        WALLPANEL
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <input type="email" class="form-control" placeholder="Enter monthly capacity"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>FLOORING</td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <input type="email" class="form-control" placeholder="Enter monthly capacity"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>M&E WORK</td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <input type="email" class="form-control" placeholder="Enter monthly capacity"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DELIVERY SERVICES</td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <label class="checkbox">
                                            <input type="checkbox"  name="Checkboxes4"/>
                                            <span></span>
                                            Yes
                                        </label>
                                    </td>
                                    <td style="text-align:justify">
                                        <input type="email" class="form-control" placeholder="Enter monthly capacity"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>
                    <h4 class="text-dark mb-4 font-weight-bold">APPLICANT’S ENDORSEMENT </h4>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="checkbox-list">
                                <label class="checkbox">
                                    <input type="checkbox"  name="Checkboxes4"/>
                                    <span class="font-weight-bold text-dark">I/ We declare that the information contained in this application is true. RENOMATE may cancel our application if the information provided is incomplete and false.</span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>

                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <button type="reset" class="btn btn-secondary rounded">Cancel</button>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button type="reset" class="btn btn-primary mr-2 rounded">Submit</button>
                    </div>
                </div>
                <br>
            </form>
            <!--end::Body-->
        </div>
    </div>
</div>






<!-- Start Footer -->
<footer class="footer-style-1 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-md-6">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                                                                  class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                                                                  class="fab fa-instagram"></i></a></li>
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

<script src="{{asset('megaone/js/script.js')}}"></script>
</body>
</html>
