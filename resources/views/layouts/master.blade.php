<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web Covid</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets2/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/assets/vendors/css/vendor.bundle.base.css')}}">
     <!-- data table -->
     <link rel="stylesheet" href="{{asset('assets2/assets/css/dataTables.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets2/assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets2/assets/css/select2.min.css')}}"/>

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets2/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets2/assets/images/favicon.ico')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <!-- navbar -->
     @include('layouts.components.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->

        <!-- sidebar -->
       @include('layouts.components.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <!-- sidebar -->
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                 <a>Tracking Covid-19</a>
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div>
            </div>
            <!-- Dashboard -->
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard 
              </h3>
            </div>
            
            <section class="content">
            <div class="containerfluid">
            @yield('content')
            </div>
            </section>
            
            <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                
                                <h4 class="features-title">Positif</h4>
                                <div class="count-item decoration-top">
                                <strong><h4>{{ $positif }}</h4></strong>

                                 <span>Orang</span></div>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                
                            <h4 class="features-title">Sembuh</h4>
                                <div class="count-item decoration-top">
                                <strong><h4>{{ $sembuh }}</h4></strong>

                                 <span>Orang</span></div>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                
                            <h4 class="features-title">Meninggal</h4>
                                <div class="count-item decoration-top">
                                <strong><h4>{{ $meninggal }}</h4></strong>

                                 <span>Orang</span></div>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets2/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets2/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets2/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets2/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets2/assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets2/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets2/assets/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->
     <!-- data table -->
     <script src="{{asset('assets2/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets2/assets/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets2/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets2/assets/js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('assets2/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{asset('assets2/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets2/assets/js/select2.min.js')}}"></script>

  </body>
  <script>
$(document).ready(function() {
    $('#e').DataTable();
    $('.select2').select2();
} );
</script>
</html> 