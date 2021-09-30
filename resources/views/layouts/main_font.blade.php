<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')OLAME ASSURTECH  @show</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="rudhisasmito.com">
    @stack('css')
    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">

    <!-- ==============================================
    CSS VENDOR
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/magnific-popup.css')}}">

    <!-- ==============================================
    Google Fonts
    =============================================== -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,700i' rel='stylesheet' type='text/css'>

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

    <script type="text/javascript" src="{{asset('js/vendor/modernizr.min.js')}}"></script>

</head>

<body>

<!-- Load page -->
<div class="animationload">
    <div class="loader"></div>
</div>


<!-- TOPBAR -->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="topbar-left">
                    <div class="welcome-text">
                        <h6>OLAME ASSURTECH PRO, La rencontre entre les assurances, la science des données et la technologie</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="topbar-right">
                    <ul class="topbar-menu">
                        <li><a href="find-an-agents.html" title="Find An Agents">Find An Agents</a></li>
                        <li><a href="faq.html" title="FAQ">FAQ's</a></li>
                        <li><a href="careers.html" title="Careers">Careers</a></li>
                    </ul>
                    <ul class="topbar-sosmed">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TOPBAR LOGO SECTION -->
@include('partials.nav_font')

<!-- BANNER -->
@yield('content')

<!-- FOOTER SECTION -->
@include('partials.footer_font')
@stack('js')
<!-- JS VENDOR -->
<script type="text/javascript" src="{{asset('js/vendor/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/jquery.superslides.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/bootstrap-hover-dropdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/jquery.magnific-popup.min.js')}}"></script>
<!-- sendmail -->
<script type="text/javascript" src="{{asset('js/vendor/validator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/form-scripts.js')}}"></script>

<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</body>
</html>
