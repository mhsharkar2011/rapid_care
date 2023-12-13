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
</head>
<div class="container">
    <div class="row my-5">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin">
            <div class="card-body">
              <h5 class="card-title text-center text-uppercase text-info ">Sign In</h5>
              @if (Route::is('admin*'))
              <form class="form-group" action="{{ route('admin.login.store') }}" method="POST">
                @csrf
                <input type="text" class="form-control" name="email" value="monir@gmail.com" placeholder="Email">
                <input type="password" class="form-control my-3" name="password" value="123456" placeholder="Password">
                <br>
                  <div>
                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label for="remember">Remember me</label>
                  </div>

                <br>
                <div class="text-center">
                  <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Sign in</button>
                  <a class="btn btn-lg btn-info btn-block text-uppercase" href="{{ route('admin.register.store') }}" >Register</a>
                </div>
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
