<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!--begin::Primary Meta Tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="description" content="Octacode Technology is a leading software company and training institute, specializing in Laravel development, web solutions, and IT education.">
      <meta name="keywords" content="Octacode Technology, Laravel Training, Software Company , Web Development , Laravel Development, IT Training Institute , PHP Training, Web Design ,HTML, CSS, JavaScript,PHP,Mysql,jquery,python,neemuch,laravel,bootsrap, Software Development , IT Solutions , Web Applications , Mobile App Development, Digital Marketing,">
      <meta name="author" content="Octacode Technology">

      <!-- Open Graph / Facebook -->
      <meta property="og:title" content="Octacode Technology | Laravel Training & Software Development Institute">
      <meta property="og:description" content="Join Octacode Technology – trusted software company and Laravel training institute. Get hands-on experience in modern web development.">
      <meta property="og:image" content="com_assets/images/octacode_logo.ico">
      <meta property="og:url" content="{{ url()->current() }}">
      <meta property="og:type" content="website">

      <!-- Twitter Meta Tags -->
      <meta name="twitter:title" content="Octacode Technology | Laravel Training & Software Development">
      <meta name="twitter:description" content="Top Laravel training and software development services in Neemuch. Learn and build real-world web applications with Octacode Technology.">
      <meta name="twitter:image" content="com_assets/images/octacode_logo.ico">
      <meta name="twitter:card" content="summary_large_image">
      <link rel="shortcut icon" href="com_assets/images/octacode_logo.ico" type="image/png">

    <!--end::Primary Meta Tags-->
    <!-- CSS here -->
    <link rel="stylesheet" href="inst_assets//css/bootstrap.min.css">
    <link rel="stylesheet" href="inst_assets//css/animate.min.css">
    <link rel="stylesheet" href="inst_assets//css/magnific-popup.css">
    <link rel="stylesheet" href="inst_assets//css/fontawesome-all.min.css">
    <link rel="stylesheet" href="inst_assets//css/flaticon-skillgro.css">
    <link rel="stylesheet" href="inst_assets//css/flaticon-skillgro-new.css">
    <link rel="stylesheet" href="inst_assets//css/swiper-bundle.min.css">
    <link rel="stylesheet" href="inst_assets//css/default-icons.css">
    <link rel="stylesheet" href="inst_assets//css/select2.min.css">
    <link rel="stylesheet" href="inst_assets//css/odometer.css">
    <link rel="stylesheet" href="inst_assets//css/aos.css">
    <link rel="stylesheet" href="inst_assets//css/plyr.css">
    <link rel="stylesheet" href="inst_assets//css/spacing.css">
    <link rel="stylesheet" href="inst_assets//css/tg-cursor.css">
    <link rel="stylesheet" href="inst_assets//css/main.css">
</head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="inst_assets//img/logo/preloader.svg" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    @include('inst.layouts.header')
    @yield('content')
    @include('inst.layouts.footer')



    <!-- JS here -->
    <script src="inst_assets//js/vendor/jquery-3.6.0.min.js"></script>
    <script src="inst_assets//js/bootstrap.min.js"></script>
    <script src="inst_assets//js/imagesloaded.pkgd.min.js"></script>
    <script src="inst_assets//js/jquery.magnific-popup.min.js"></script>
    <script src="inst_assets//js/jquery.odometer.min.js"></script>
    <script src="inst_assets//js/jquery.appear.js"></script>
    <script src="inst_assets//js/tween-max.min.js"></script>
    <script src="inst_assets//js/select2.min.js"></script>
    <script src="inst_assets//js/swiper-bundle.min.js"></script>
    <script src="inst_assets//js/jquery.marquee.min.js"></script>
    <script src="inst_assets//js/tg-cursor.min.js"></script>
    <script src="inst_assets//js/vivus.min.js"></script>
    <script src="inst_assets//js/ajax-form.js"></script>
    <script src="inst_assets//js/svg-inject.min.js"></script>
    <script src="inst_assets//js/jquery.circleType.js"></script>
    <script src="inst_assets//js/jquery.lettering.min.js"></script>
    <script src="inst_assets//js/plyr.min.js"></script>
    <script src="inst_assets//js/wow.min.js"></script>
    <script src="inst_assets//js/aos.js"></script>
    <script src="inst_assets//js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
</body>


<!-- Mirrored from html.themegenix.com/skillgro/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 May 2025 09:20:59 GMT -->
</html>