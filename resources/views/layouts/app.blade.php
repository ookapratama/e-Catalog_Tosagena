<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!--
THEME: Constra - Construction Html5 Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/constra-construction-template/
DEMO: https://demo.themefisher.com/constra/
GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>CV - Tosagena Digital Printing</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png')}}">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css')}}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css')}}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('plugins/colorbox/colorbox.css')}}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>

<body>
    <div class="body-inner">

        
        <!-- Header start -->
        @include('layouts.header')
        <!--/ Header end -->

        @yield('content')
        

        @include('layouts.footer')
        <!-- Footer end -->


        <!-- Javascript Files
  ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="{{ asset('plugins/jQuery/jquery.min.js')}}"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{ asset('plugins/bootstrap/bootstrap.min.js')}}" defer></script>
        <!-- Slick Carousel -->
        <script src="{{ asset('plugins/slick/slick.min.js')}}"></script>
        <script src="{{ asset('plugins/slick/slick-animation.min.js')}}"></script>
        <!-- Color box -->
        <script src="{{ asset('plugins/colorbox/jquery.colorbox.js')}}"></script>
        <!-- shuffle -->
        <script src="{{ asset('plugins/shuffle/shuffle.min.js')}}" defer></script>


        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <!-- Google Map Plugin-->
        <script src="{{ asset('plugins/google-map/map.js')}}" defer></script>

        <!-- Template custom -->
        <script src="{{ asset('js/script.js')}}"></script>

    </div><!-- Body inner end -->
</body>

</html>
