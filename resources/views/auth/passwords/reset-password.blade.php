@extends('layouts.auth.auth') 
@section('content')
<h3 class="login-heading mb-4 go-green-text">Reset your password...</h3>
<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="d-grid">
        <button class="btn btn-lg btn-success btn-login text-uppercase fw-bold mb-2 text-white" type="submit">Reset Password</button>
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn btn-sm btn-success text-uppercase fw-bold mb-2 m-1 text-white">Sign In</a>
            <a href="{{ route('register') }}" class="btn btn-sm btn-success text-uppercase fw-bold mb-2 m-1 text-white">Register</a>
        </div>
    </div>
</form>
@endsection
