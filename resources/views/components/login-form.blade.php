<div class="container">
  <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5" style="margin-top: 10rem !important;">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center text-uppercase text-primary ">Sign In</h5>
            @if (Route::is('admin*'))
            <form class="form-group" action="{{ route('admin.adminLogin') }}" method="POST">
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
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                <a class="btn btn-lg btn-primary btn-block text-uppercase" href="{{ route('admin.register') }}" >Register</a>
              </div>
            </form>
            @else
            <form class="form-group" action="{{ route('frontEnd.storeLogin') }}" method="POST">
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
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                <a class="btn btn-lg btn-primary btn-block text-uppercase" href="{{ route('frontEnd.register') }}" >Register</a>
              </div>
            </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
