<!doctype html>
<html lang="en">
  <!--begin::Head-->
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
      <meta property="og:description" content="Join Octacode Technology-trusted software company and Laravel training institute. Get hands-on experience in modern web development.">
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
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="{{asset('admin_assets/css/overlayscrollbars.min.css')}}">
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('admin_assets/css/adminlte.css')}}" />
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">


        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        
        <!--begin::App Main-->
        <main class="app-main">
            @yield('content')
        </main>
        <!--end::App Main-->
        @include('admin.layouts.footer')


    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="{{asset('admin_assets/js/overlayscrollbars.browser.es6.min.js')}}"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="{{asset('admin_assets/js/popper.min.js')}}"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('admin_assets/js/adminlte.js')}}"></script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
