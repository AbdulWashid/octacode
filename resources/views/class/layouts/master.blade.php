<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="class_assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="class_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="class_assets/css/animate.min.css">
    <link rel="stylesheet" href="class_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="class_assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="class_assets/css/flaticon-skillgro.css">
    <link rel="stylesheet" href="class_assets/css/flaticon-skillgro-new.css">
    <link rel="stylesheet" href="class_assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="class_assets/css/default-icons.css">
    <link rel="stylesheet" href="class_assets/css/select2.min.css">
    <link rel="stylesheet" href="class_assets/css/odometer.css">
    <link rel="stylesheet" href="class_assets/css/aos.css">
    <link rel="stylesheet" href="class_assets/css/plyr.css">
    <link rel="stylesheet" href="class_assets/css/spacing.css">
    <link rel="stylesheet" href="class_assets/css/tg-cursor.css">
    <link rel="stylesheet" href="class_assets/css/main.css">
</head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="class_assets/img/logo/preloader.svg" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    @include('class.layouts.header')
    @yield('content')
    @include('class.layouts.footer')



    <!-- JS here -->
    <script src="class_assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="class_assets/js/bootstrap.min.js"></script>
    <script src="class_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="class_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="class_assets/js/jquery.odometer.min.js"></script>
    <script src="class_assets/js/jquery.appear.js"></script>
    <script src="class_assets/js/tween-max.min.js"></script>
    <script src="class_assets/js/select2.min.js"></script>
    <script src="class_assets/js/swiper-bundle.min.js"></script>
    <script src="class_assets/js/jquery.marquee.min.js"></script>
    <script src="class_assets/js/tg-cursor.min.js"></script>
    <script src="class_assets/js/vivus.min.js"></script>
    <script src="class_assets/js/ajax-form.js"></script>
    <script src="class_assets/js/svg-inject.min.js"></script>
    <script src="class_assets/js/jquery.circleType.js"></script>
    <script src="class_assets/js/jquery.lettering.min.js"></script>
    <script src="class_assets/js/plyr.min.js"></script>
    <script src="class_assets/js/wow.min.js"></script>
    <script src="class_assets/js/aos.js"></script>
    <script src="class_assets/js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
</body>


<!-- Mirrored from html.themegenix.com/skillgro/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 May 2025 09:20:59 GMT -->
</html>