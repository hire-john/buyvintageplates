@extends('layouts.auth.auth') 
@section('content')
<h3 class="login-heading mb-4 go-green-text">Send password reset email...</h3>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-floating mb-3">
                <label for="email">Email address</label>
                <input id="email" type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="email">
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="d-grid">
        <button class="btn btn-lg btn-success btn-login text-uppercase fw-bold mb-2 text-white" type="submit">Send Reset Email</button>
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn btn-sm btn-success text-uppercase fw-bold mb-2 m-1 text-white">Sign In</a>
            <a href="{{ route('register') }}" class="btn btn-sm btn-success text-uppercase fw-bold mb-2 m-1 text-white">Register</a>
        </div>
    </div>
</form>
@endsection
