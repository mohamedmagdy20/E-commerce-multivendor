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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script>
   $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
     type: "line",
     height: "70",
     width: "100%",
     lineWidth: "2",
     lineColor: "#177dff",
     fillColor: "rgba(23, 125, 255, 0.14)",
   });

   $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
     type: "line",
     height: "70",
     width: "100%",
     lineWidth: "2",
     lineColor: "#f3545d",
     fillColor: "rgba(243, 84, 93, .14)",
   });

   $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
     type: "line",
     height: "70",
     width: "100%",
     lineWidth: "2",
     lineColor: "#ffa534",
     fillColor: "rgba(255, 165, 52, .14)",
   });

   $(document).ready(function () {
    $("#basic-datatables").DataTable({});
    $('.select2-multiple').select2();
   });

   $('.delete-confirm').on('click', function (e) {
        e.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                toastr.success('Process', 'Operation On Process');
                window.location.href = url;
            }
        });
    });
 </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

 