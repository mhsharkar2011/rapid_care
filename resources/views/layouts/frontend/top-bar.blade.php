@if (Route::is('frontEnd.appointments*'))
<div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-12 text-end">
            <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-0">
                <i class="fa fa-envelope-open me-2"></i>
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"><i class="fa fa-envelope-open me-2"></i><a class="text-white" href="{{ route('frontEnd.home') }}">Home</a></p>
                </div>
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"><i class="fa-solid fa-arrow-up-right-from-square "></i> <a class="text-white" href="{{ route('frontEnd.appointments.create') }}">New Appointment</a></p>
                </div>
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"> <i class="fa-solid fa-calendar-check"></i> <a class="text-white" href="{{ route('frontEnd.appointments.index') }}">My Appointments</a></p>
                </div>
               {{-- @if (Route::is('frontEnd.appointments.index'))
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa-solid fa-id-card"></i> {{ $appointments->patient->card->card_no }}</p>
                    </div>
               @endif --}}
               @if (Route::is('frontEnd.appointments.show'))
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa-solid fa-id-card"></i> Card No.{{ $appointment->user->card->card_no }}</p>
                    </div>
               @endif
               
               @if (Route::is('frontEnd.appointments.index'))
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-user-group me-2"></i>Profile</p>
                    </div>
               @endif

               @if (Route::is('frontEnd.appointments.show'))
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-user-group me-2"></i> Profile </p>
                    </div>
               @endif
                <div class="me-3 pe-3 py-2 px-0">
                    <p class="m-0"><i class="fa fa-user-group me-2"></i><a class="text-white" href="{{ route('frontEnd.logout') }}">Logout</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
    @else
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>
                      Opening Hours: Everyday Evening : 5.00 pm - 10.00 pm 
                    </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape2 px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@rapidcare.com</p>
                    </div>
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+8801733172007</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><a class="text-white" href="{{ route('frontEnd.login') }}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif