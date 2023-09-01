@extends('layouts.app')

@section('title')
    Add User
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-6 col-lg-7 mx-auto" style="margin-top: 10rem !important;">
        <div class="card card-signin my-5">
            <div class="card-header text-center text-uppercase text-primary">{{ __('Register') }}</div>
            <div class="card-body mx-3">
                <form class="form-group" method="POST" action="{{ route('admin.users.store') }}">
                    @csrf
                <div class="text-end">
                    <div class="form-group row my-4">
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

                    <div class="form-group row my-4">
                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                        <label for="type" class="col-md-3 col-form-label text-md-right">{{ __('Type') }}</label>
                        <div class="col-md-6">
                            <select name="type" id="" class="form-control">
                                @foreach ($roles as $role )
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-md-3 col-form-label text-md-right">{{ __('Type') }}</label>
                        <div class="col-md-6">
                            <select name="status" id="" class="form-control">
                                <option value="Active">Acitve</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 mt-5 text-center">
                        <x-button type="submit">Register</x-button>
                        <a href="{{ route('frontEnd.login') }}"><x-button type="button">Login</x-button></a>
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