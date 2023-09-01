    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pricing Plan</h5>
                        <h1 class="display-5 mb-0">We Offer Fair Prices for Poor and Special Patients</h1>
                    </div>
                    <p class="mb-4">Any kind of Disease can recover by us Insha Allah</p>
                    <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Appointment</h5>
                    <h1 class="wow fadeInUp" data-wow-delay="0.6s">+8800000000</h1>
                </div>
                {{--  --}}
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        @for ($i = 0 ; $i < 3 ; $i++)
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="{{ asset('upload/img/price-1.jpg') }}" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$35</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Teeth Whitening</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="{{ route('frontEnd.appointments.create') }}" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
    <!-- Pricing End -->
