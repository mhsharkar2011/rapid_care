@extends('layouts.app')

@section('title')
    Add User
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-9 col-md-6 col-lg-9 mx-auto">
        <div class="card card-signin">
            <div class="card-header text-center text-uppercase text-primary">{{ __('Create new User') }}</div>
            <div class="card-body">
                <form class="form-group" method="POST" action="{{ route('admin.users.store') }}">
                    @csrf
                <div class="text-end">
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class=" row">
                        <label for="phone" class="col-md-3 col-form-label text-md-right">{{ __('Phone') }}</label>
                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class=" row ">
                        <label for="email" class="col-md-3 col-form-label text-md-right m-0 p-0">{{ __('Or') }}</label>
                    </div>
                    <div class="form-group row ">
                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter a vali  ">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row my-4">
                        <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="roles" class="col-md-3 col-form-label text-md-right">{{ __('Roles') }}</label>
                        <div class="col-md-6">
                            <select name="roles" id="roles" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Employee">Employee</option>
                                    <option value="Patient">Patient</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-md-3 col-form-label text-md-right">{{ __('Status') }}</label>
                        <div class="col-md-6">
                            <select name="status" id="" class="form-control">
                                <option value="Active">Acitve</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 text-center">
                        <x-button type="submit">Save</x-button>
                        <a href="{{ route('admin.dashboard') }}"><x-button type="button">Go Back</x-button></a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection