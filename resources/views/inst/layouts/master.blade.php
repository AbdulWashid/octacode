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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/flaticon-skillgro.css">
    <link rel="stylesheet" href="css/flaticon-skillgro-new.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/default-icons.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/plyr.css">
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/tg-cursor.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="img/logo/preloader.svg" alt="Preloader"></div>
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
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.odometer.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/tween-max.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jquery.marquee.min.js"></script>
    <script src="js/tg-cursor.min.js"></script>
    <script src="js/vivus.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/svg-inject.min.js"></script>
    <script src="js/jquery.circleType.js"></script>
    <script src="js/jquery.lettering.min.js"></script>
    <script src="js/plyr.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
</body>


</html>