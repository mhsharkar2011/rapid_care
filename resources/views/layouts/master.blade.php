<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ $title ?? '' }}</title>

  <!-- Favicon -->
  <link href="{{ asset('img/favicon.ico') }}" rel="icon">

  <!-- Google Web Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" >
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('lib/twentytwenty/twentytwenty.css') }}" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  
  <!-- Custom Stylesheet -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   <!-- Datatable CSS -->
   <link href="{{ asset('customAdmin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  
</head>

<body id="page-top">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary m-1" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-dark m-1" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-secondary m-1" role="status">
        <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Topbar Start -->
  @if (Route::is('frontEnd*'))
  @include('layouts.frontend.top-bar')
  @endif
<!-- Topbar End -->

<!-- Menu Start -->
@if (Route::is('frontEnd*') && Route::is('frontEnd.home'))
@include('layouts.frontend.menu')
@endif
<!-- Menu End -->
  
@yield('content')
<!-- Footer Start -->
@if (Route::is('frontEnd.home'))
<div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
    <div class="container pt-5">
        <div class="row g-5 pt-4">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-light py-4" style="background: #051225;">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://webdevs24.com">webdevs24</a></p>
            </div>
        </div>
    </div>
</div>
    
@endif

<!-- Footer End -->

 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('ib/waypoints/waypoints.min.js') }}l"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('lib/twentytwenty/jquery.event.move.js') }}"></script>
<script src="{{ asset('lib/twentytwenty/jquery.twentytwenty.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('custom/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('custom/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('custom/vendors/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('custom/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('custom/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('custom/js/contact_me.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('custom/js/freelancer.min.js') }}"></script>

 <!-- Datatable JS -->
 <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
 <script>
     new DataTable('#dataTable');
 </script>
 {{-- Datatable End --}}
</body>

</html>