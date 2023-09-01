<!-- Contact Section -->
<section id="contact" class="contact">
  <div class="container">
    <h2>CONTACT US</h2>
    <hr>
      <div class="row">
        <div class="col-sm-10 col-md-7 col-lg-6 mx-auto mt-5">
          <div class="card card-signin my-8">
            <div class="card-body">
              <form class="form-group" action="{{ route('frontEnd.login') }}" method="POST">
                @csrf
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Name" required="required"
                      data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Email Address</label>
                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required"
                      data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Phone Number</label>
                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required"
                      data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"
                      data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="col-12 text-center">
                  {{-- <button type="submit" class="btn btn-primary rounded-3 mx-4" id="sendMessageButton">Submit</button> --}}
                  <x-button type="submit" class="text-uppercase px-4 py-2" id="sendMessageButton">
                    Submit
                  </x-button>
                  <x-button type="reset" class="text-uppercase px-4 py-2">
                    Reset
                  </x-button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
