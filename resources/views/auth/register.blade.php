@extends('layouts.auth.auth')
@section('content')
<h3 class="login-heading mb-4 go-green-text">Create your acccount...</h3>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row mb-1">
        <div class="col-md-12">
            <div class="form-floating mb-3">
                <input type="name" class="form-control" id="name" name="name" placeholder="John McDonnell">
                <label for="name">Name</label>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-12">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-12">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-12">
            <div class="form-floating mb-3">
                <input type="password-confirm" class="form-control" id="password-confirm" name="password-confirm" placeholder="Confirm Password">
                <label for="password-confirm">Confirm Password</label>
            </div>
        </div>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input custom-checkbox" type="checkbox" name="join-mailing-list" id="join-mailing-list">
        <label class="form-check-label go-green-text" for="join-mailing-list">Join our mailing list!</label>
    </div>
    <div class="d-grid">
        <button class="btn btn-lg btn-success btn-login text-uppercase fw-bold mb-2 text-white" type="submit">Register</button>
        <div class="text-center">
          <a href="{{ route('login') }}" class="btn btn-sm btn-success text-uppercase fw-bold mb-2 m-1">Sign In</a>
          <a href="{{ route('password.request') }}" class="btn btn-sm btn-success text-uppercase fw-bold mb-2 m-1">Forgot Password?</a>
      </div>
  </div>
</form>
@endsection
