<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Octacode Technology is a leading software company and training institute, specializing in Laravel development, web solutions, and IT education.">
    <meta name="keywords" content="Octacode Technology, Laravel Training, Software Company , Web Development , Laravel Development, IT Training Institute , PHP Training, Web Design ,HTML, CSS, JavaScript,PHP,Mysql,jquery,python,neemuch,laravel,bootsrap, Software Development , IT Solutions , Web Applications , Mobile App Development, Digital Marketing,">
    <meta name="author" content="Octacode Technology">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Octacode Technology | Laravel Training & Software Development Institute">
    <meta property="og:description" content="Join Octacode Technology – trusted software company and Laravel training institute. Get hands-on experience in modern web development.">
    <meta property="og:image" content="com_assets/images/favicon.ico">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:title" content="Octacode Technology | Laravel Training & Software Development">
    <meta name="twitter:description" content="Top Laravel training and software development services in Neemuch. Learn and build real-world web applications with Octacode Technology.">
    <meta name="twitter:image" content="com_assets/images/favicon.ico">
    <meta name="twitter:card" content="summary_large_image">

	<!-- Favicon -->
	<link rel="shortcut icon" href="com_assets/images/octacode_logo.ico" type="image/png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="com_assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="com_assets/vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="com_assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="com_assets/css/style.css">
	@stack('css')
</head>
<body>
	@include('com.layouts.header')
	<main>
	@yield('content')
	</main>
	@include('com.layouts.footer')




	<!-- Back to top -->
	<div class="back-top"></div>
	<!-- Bootstrap JS -->
	<script src="com_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!--Vendors-->
	<script src="com_assets/vendor/ityped/index.js"></script>
	<script src="com_assets/vendor/jarallax/jarallax.min.js"></script>
	<script src="com_assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="com_assets/vendor/glightbox/js/glightbox.js"></script>
	<script src="com_assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
	<!-- Theme Functions -->
	<script src="com_assets/js/functions.js"></script>

</body>
</html>
