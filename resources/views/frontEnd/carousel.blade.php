<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @for ($i = 0 ; $i <2 ; $i++)
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('upload/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Health Healthy</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Health Treatment</h1>
                        <a href="{{ route('frontEnd.appointments.create') }}"><x-button class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</x-button></a>
                        <a href="{{ route('frontEnd.showContact') }}"><x-button class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</x-button></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->