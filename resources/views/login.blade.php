@extends('layouts.main')

@section('title')
  Login
@endsection

@section('content')
  <div class="main-wrapper login-body">
    <div class="login-wrapper">
      <div class="container">
        <img class="img-fluid logo-dark mb-2 logo-color" src="assets/img/logo-small.png" alt="Logo">
        <div class="loginbox">
          <div class="login-right">
            <div class="login-right-wrap">
              <h1>Login</h1>
              <p class="account-subtitle">Access to our dashboard</p>
              <form action="{{ route('actionlogin') }}" method="POST">
                @csrf
                <div class="input-block mb-3">
                  <label class="form-control-label">Email Address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="admin@factory.com">
                  <div class="text-danger pt-2">
                  </div>
                </div>
                <div class="input-block mb-3">
                  <label class="form-control-label">Password</label>
                  <div class="pass-group">
                    <input type="password" class="form-control pass-input" id="password" name="password" placeholder="password">
                    <div class="text-danger pt-2">
                    </div>
                  </div>
                </div>
                <button class="btn btn-lg  btn-primary w-100" type="submit">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
