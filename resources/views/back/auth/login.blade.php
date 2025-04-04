<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <meta
content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
name="viewport"
/>
<link
rel="icon"
href="{{asset('back/assets/img/kaiadmin/favicon.ico')}}"
type="image/x-icon"
/>

<!-- Fonts and icons -->
<script src="{{asset('back/assets/js/plugin/webfont/webfont.min.js')}}"></script>
<script>
WebFont.load({
  google: { families: ["Public Sans:300,400,500,600,700"] },
  custom: {
    families: [
      "Font Awesome 5 Solid",
      "Font Awesome 5 Regular",
      "Font Awesome 5 Brands",
      "simple-line-icons",
    ],
    urls: ["{{asset('back/assets/css/fonts.min.css')}}"],
  },
  active: function () {
    sessionStorage.fonts = true;
  },
});
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="{{asset('back/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('back/assets/css/plugins.min.css')}}" />
<link rel="stylesheet" href="{{asset('back/assets/css/kaiadmin.min.css')}}" />

{{-- <!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{asset('back/assets/css/demo.css')}}" /> --}}
</head>
<body>
  <div class="card-body m-auto w-50">

    <div class="text-center mt-4">
        <div class="mb-3">
            <img src="{{ asset('back/assets/img/logoproduct.svg') }}" height="100" class="logo-light mx-auto"
                alt="">

        </div>
    </div>

    <h4 class="text-muted text-center font-size-18"><b>Sign Up</b></h4>

  
    <div class="p-3">
        <form class="form-horizontal mt-3" action="" method="POST">
            @csrf
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" type="text" required="" name="email" placeholder="Username">
                </div>
            </div>

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" type="password" required="" name="password" placeholder="Password">
                </div>
            </div>

            @if (Session::has('error'))
                <span class="text-danger">Invaild Email and Password</span>
            @endif
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="form-label ms-1" for="customCheck1">Remember me</label>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3 text-center row mt-3 pt-1">
                <div class="col-12">
                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>

            {{-- <div class="form-group mb-0 row mt-2">
                <div class="col-sm-7 mt-3">
                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your
                        password?</a>
                </div>
                <div class="col-sm-5 mt-3">
                    <a href="auth-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an
                        account</a>
                </div>
            </div> --}}
        </form>
    </div>
    <!-- end -->
</div>

   <!--   Core JS Files   -->
 <script src="{{asset('back/assets/js/core/jquery-3.7.1.min.js')}}"></script>
 <script src="{{asset('back/assets/js/core/popper.min.js')}}"></script>
 <script src="{{asset('back/assets/js/core/bootstrap.min.js')}}"></script>

 <!-- jQuery Scrollbar -->
 <script src="{{asset('back/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

 <!-- Chart JS -->
 <script src="{{asset('back/assets/js/plugin/chart.js/chart.min.js')}}"></script>

 <!-- jQuery Sparkline -->
 <script src="{{asset('back/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

 <!-- Chart Circle -->
 <script src="{{asset('back/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

 <!-- Datatables -->
 <script src="{{asset('back/assets/js/plugin/datatables/datatables.min.js')}}"></script>

 <!-- Bootstrap Notify -->
 <script src="{{asset('back/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

 <!-- jQuery Vector Maps -->
 <script src="{{asset('back/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
 <script src="{{asset('back/assets/js/plugin/jsvectormap/world.js')}}"></script>

 <!-- Sweet Alert -->
 <script src="{{asset('back/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

 <!-- Kaiadmin JS -->
 <script src="{{asset('back/assets/js/kaiadmin.min.js')}}"></script>
</body>
</html>