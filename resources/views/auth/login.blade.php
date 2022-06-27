@extends('layouts.auth.auth') 
@section('content')
<h3 class="login-heading mb-4 go-green-text">Please sign in to continue...</h3>
<form action="/login" method="post">
  @csrf
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    <label for="email">Email address</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    <label for="password">Password</label>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" name="remember" id="remember">
    <label class="form-check-label go-green-text" for="remember">Remember password</label>
  </div>
  <div class="d-grid">
    <button class="btn btn-lg btn-success btn-login text-uppercase fw-bold mb-2 text-white" type="submit">Sign in</button>
    <div class="text-center">
      <a href="{{ route('register') }}" class="btn btn-sm btn-success text-uppercase fw-bold mb-2 m-1 text-white">Register</a>
      <a href="{{ route('password.request') }}" class="btn btn-sm btn-success text-uppercase fw-bold mb-2 m-1 text-white">Forgot Password?</a>
    </div>
  </div>
</form>
@endsection