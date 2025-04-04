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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

{{-- <!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{asset('back/assets/css/demo.css')}}" /> --}}
