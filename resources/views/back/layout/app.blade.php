<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')</title>
    @include('back.layout.head')
    @yield('css')
    <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
    <script>
  
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
        cluster: 'ap1'
      });
  
      var channel = pusher.subscribe('user.notification');
      channel.bind('user.regsiter.notification', function(data) {
        console.log(JSON.stringify(data));
      });
    </script>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      @include('back.layout.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
      
       @include('back.layout.nav')

        <div class="container">
          <div class="page-inner">
            @yield('content')
          </div>
        </div>

      @include('back.layout.footer')
      </div>

      
    </div>
   @include('back.layout.script')
   @yield('js')
  </body>
</html>
