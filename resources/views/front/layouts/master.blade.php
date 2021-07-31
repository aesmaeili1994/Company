<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- seo -->
    @yield('seo')
    <!-- end seo -->

    <!-- Favicons -->
    <link href="{{asset("front/assets/img/favicon.png")}}" rel="icon">
    <link href="{{asset("front/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset("front/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/assets/vendor/icofont/icofont.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/assets/vendor/animate.css/animate.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/assets/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/assets/vendor/nivo-slider/css/nivo-slider.css")}}" rel="stylesheet">
    <link href="{{asset("front/assets/vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/assets/vendor/venobox/venobox.css")}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset("front/assets/css/style.css")}}" rel="stylesheet">

    <!-- add css -->
    @yield('css')

<!-- =======================================================
    * Template Name: eBusiness - v2.2.1
    * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

@yield('content')

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset("front/assets/vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("front/assets/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
<script src="{{asset("front/assets/vendor/php-email-form/validate.js")}}"></script>
<script src="{{asset("front/assets/vendor/appear/jquery.appear.js")}}"></script>
<script src="{{asset("front/assets/vendor/knob/jquery.knob.js")}}"></script>
<script src="{{asset("front/assets/vendor/parallax/parallax.js")}}"></script>
<script src="{{asset("front/assets/vendor/wow/wow.min.js")}}"></script>
<script src="{{asset("front/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("front/assets/vendor/nivo-slider/js/jquery.nivo.slider.js")}}"></script>
<script src="{{asset("front/assets/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("front/assets/vendor/venobox/venobox.min.js")}}"></script>

<!-- Template Main JS File -->
<script src="{{asset("front/assets/js/main.js")}}"></script>

<!-- add js -->
@yield('js')

</body>

</html>
