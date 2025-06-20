<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Admin | Login</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | Login Page v2" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="{{asset('admin_assets/css/source-sans.css')}}">
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="{{asset('admin_assets/css/overlayscrollbars.min.css')}}">
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
      <link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap-icons.min.css')}}">
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="{{asset('admin_assets/css/toastify.css')}}">
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('admin_assets/css/adminlte.css')}}" />
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  @error('credentialWronng')
    <span class="text-danger">{{$message}}</span>
  @enderror
  <body class="login-page bg-body-secondary">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1 class="mb-0"><b>Admin | Login</b></h1>
        </div>
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>
          <form action="{{route('admin.form_submit')}}" method="post">
            @csrf
            <!-- Email Input -->
            <div class="input-group mb-1">
                <div class="form-floating">
                    <input
                        id="loginEmail"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email"
                    />
                    <label for="loginEmail">Email</label>
                </div>
                <div class="input-group-text">
                    <span class="bi bi-envelope"></span>
                </div>
            </div>
            @error('email')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
            <!-- Password Input -->
            <div class="input-group mb-1">
                <div class="form-floating">
                    <input
                        id="loginPassword"
                        type="password"
                        name="pwd"
                        class="form-control @error('pwd') is-invalid @enderror"
                        placeholder="Password"
                    />
                    <label for="loginPassword">Password</label>
                </div>
                <div class="input-group-text">
                    <span class="bi bi-lock-fill"></span>
                </div>
            </div>
            @error('pwd')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
            <br>
            <!--begin::Row-->
            <div class="row">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </div>
            <!--end::Row-->
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
      <script src="{{asset('admin_assets/js/overlayscrollbars.browser.es6.min.js')}}"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
      <script src="{{asset('admin_assets/js/popper.min.js')}}"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('admin_assets/js/adminlte.js')}}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
