<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <!-- SEO Meta Tags -->
    <title>Cartzilla | Account - Sign Up</title>
    @include('front.layouts.style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>


  <!-- Body -->
  <body>
    <!-- Page content -->
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
      <div class="d-lg-flex">

        <!-- Login form + Footer -->
        <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">

          <!-- Logo -->
          <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-0">
            <a href="{{route('home')}}" class="navbar-brand pt-0">
              <span class="d-flex flex-shrink-0 text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"><path d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z" fill="currentColor"></path><g fill="#fff"><path d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z"></path><use href="#czlogo"></use><use href="#czlogo" x="8.516" y="-2.172"></use></g><defs><path id="czlogo" d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z"></path></defs></svg>
              </span>
              Cartzilla
            </a>
          </header>

          <h1 class="h2 mt-auto">Welcome back</h1>
          <div class="nav fs-sm mb-4">
            Don't have an account?
            <a class="nav-link text-decoration-underline p-0 ms-2" href="{{route('register')}}">Create an account</a>
          </div>

          <!-- Form -->
          <form class="needs-validation" method="POST" action="{{route('login')}}" novalidate="" enctype="multipart/form-data">
            @csrf
            
            <div class="position-relative mb-4">
              <label for="register-email" class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg" name="email" id="register-email" required="">
              <div class="invalid-tooltip bg-transparent py-0">Enter a valid email address!</div>
            </div>
            <div class="row">
             
              <div class="col-md-12">
                <div class="mb-4">
                  <label for="register-password" class="form-label">Password </label>
                  <div class="password-toggle">
                    <input type="password" class="form-control form-control-lg" id="register-password" name="password" minlength="8" placeholder="" required="">
                    <div class="invalid-tooltip bg-transparent py-0">Password does not meet the required criteria!</div>
                    <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                      <input type="checkbox" class="btn-check">
                    </label>
                  </div>
                </div>
              </div>
            </div>
            @csrf
            <button type="submit" class="btn btn-lg btn-primary w-100">
               Login
                <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
            </button>
          </form>

          <!-- Divider -->
          <div class="d-flex align-items-center my-4">
            <hr class="w-100 m-0">
            <span class="text-body-emphasis fw-medium text-nowrap mx-4">or Login with</span>
            <hr class="w-100 m-0">
          </div>

          <!-- Social login -->
          <div class="d-flex flex-column flex-sm-row gap-1 pb-4 mb-3 mb-lg-4">
            <a href="{{route('auth.google')}}" class="btn btn-lg btn-outline-secondary w-100 px-2">
              <i class="ci-google ms-1 me-1"></i>
              Google
            </a>
            
          </div>

          <!-- Footer -->
          <footer class="mt-auto">
            <div class="nav mb-4">
              <a class="nav-link text-decoration-underline p-0" href="help-topics-v1.html">Need help?</a>
            </div>
            <p class="fs-xs mb-0">
              © All rights reserved. Made by <span class="animate-underline"><a class="animate-target text-dark-emphasis text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span>
            </p>
          </footer>
        </div>


        <div class="d-none d-lg-block w-100 py-4 ms-auto" style="max-width: 1034px">
            <div class="d-flex flex-column justify-content-end h-100 rounded-5 overflow-hidden">
              <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
              <div class="ratio position-relative z-2" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
                <img src="{{asset('front/img/account/cover.png')}}" alt="Girl">
              </div>
            </div>
          </div>
      </div>
    </main>

    @include('front.layouts.script')

      
    
</body>
</html>