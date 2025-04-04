
<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<!-- Mirrored from cartzilla-html.createx.studio/home-fashion-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Mar 2025 22:30:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    @include('front.layouts.style')
	@yield('css')
	<title>@yield('title')</title>
  </head>


  <!-- Body -->
  <body>

    <!-- Customizer offcanvas -->
   @include('front.layouts.modal')


    <!-- Shopping cart offcanvas -->
   @include('front.layouts.cart')


    <!-- Search offcanvas -->
	@include('front.layouts.search')


    <!-- Topbar -->
   @include('front.layouts.topbar')


    <!-- Navigation bar (Page header) -->
	@include('front.layouts.nav')


    <!-- Page content -->
    <main class="content-wrapper">

     @yield('content')

	  
    </main>


    <!-- Page footer -->
	@include('front.layouts.footer')


    <!-- Back to top button -->
	@include('front.layouts.back-top')

   
  @include('front.layouts.script')
  @yield('js')

</body>
</html>