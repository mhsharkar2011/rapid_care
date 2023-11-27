<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/pagination/bootstrap-4.min.css') }}">
    <!-- Page level plugin CSS-->
    <link href="{{ asset('customAdmin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('customAdmin/css/sb-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('customAdmin/css/custom.css') }}">

    <!-- Toastr -->
    	{{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('css/toastr.min.css') }}">
	<script src="{{ URL::to('js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('js/toastr.min.js') }}"></script>

    @yield('singlePageStyle')

</head>

<body id="page-top">
   
    {{-- Top Bar Start --}}
    @if (Request::is('admin*'))
        @include('layouts.backend.top-bar')
    @endif
    {{-- Top Bar End --}}
    <div class="row mr-0">
        {{-- Menu Bar Start --}}
        @if (Request::is('admin*'))
            @include('layouts.backend.side-bar')
        @endif
        {{-- Menu Bar End --}}

        <div class="col-10">
            <div class="container">
                @if (Request::is('admin*'))
                    @include('layouts.backend.messages')
                @endif
                @yield('content')
            </div>
        </div>
    </div>

    @if (Request::is('admin*'))
        @include('layouts.backend.logout-model')
    @endif

    {!! Toastr::message() !!}
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('customAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('customAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/pagination/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/pagination/bootstrap-4.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('customAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->
    {{-- <script src="{{ asset('customAdmin/vendor/chart.js/Chart.min.js') }}"></script> --}}
    <script src="{{ asset('customAdmin/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('customAdmin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('customAdmin/js/sb-admin.min.js') }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('customAdmin/js/demo/datatables-demo.js') }}"></script>
    {{-- <script src="{{ asset('customAdmin/js/demo/chart-area-demo.js') }}"></script> --}}
    <script src="{{ asset('customAdmin/js/custom.js') }}"></script>
    @yield('singlePageScript')

</body>

</html>
