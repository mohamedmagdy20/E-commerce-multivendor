 <!-- Vendor scripts -->
 <script src="{{asset('front/vendor/swiper/swiper-bundle.min.js')}}"></script>
 <script src="{{asset('front/vendor/simplebar/simplebar.min.js')}}"></script>

 <!-- Bootstrap + Theme scripts -->
 <script src="{{asset('front/js/theme.min.js')}}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   {{-- Toster --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   @if (Session::has('success'))
       <script>
           toastr.success('{{ Session::get('success') }}', 'success');
       </script>
   @endif

   @if (Session::has('error'))
       <script>
           toastr.error('{{ Session::get('error') }}', 'error');
       </script>
   @endif

   
   @if (Session::has('info'))
       <script>
           toastr.info('{{ Session::get('info') }}', 'info');
       </script>
   @endif