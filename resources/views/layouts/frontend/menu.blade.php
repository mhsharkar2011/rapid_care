<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="{{ route('frontEnd.home') }}" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="100%" height="95"></h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('frontEnd.home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('frontEnd.about') }}" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Service</a>
            <a href="{{ route('frontEnd.doctors') }}" class="nav-item nav-link">Our Doctors</a>
            <a href="{{ route('frontEnd.showContact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <button type="button" class="btn text-dark mx-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
        <a href="{{ route('frontEnd.login') }}"><x-button>Appointment</x-button> </a>
    </div>
</nav>
  <!-- Navbar End -->

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->