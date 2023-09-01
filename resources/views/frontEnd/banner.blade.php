    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Fri</h6>
                            <p class="mb-0"> 8:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0"> 8:00am - 7:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                       <div class="text-center">
                        <a href="{{ route('frontEnd.login') }}" > <x-button class="btn btn-dark">Appointment</x-button></a>
                       </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="datetime-local" class="form-control bg-light border-0 datetimepicker-input" style="height: 40px;">
                        </div>
                        {{-- <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>Select A Service</option>
                            @foreach ($users as $user)
                            <option value="1">{{ $user->name}}</option>
                            @endforeach
                        </select> --}}
                        <a class="btn btn-light" href="">Search Doctor</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Call for Appointment</h3>
                        <p class="text-white">Support Number</p>
                        <h2 class="text-white mb-0">+88000000000</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->