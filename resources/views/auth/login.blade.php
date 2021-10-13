@extends('layouts.backend_noside')
@section('content')
<div class="bg-image" style="background-image: url('assets/media/photos/photo19@2x.jpg');">
    <div class="row g-0 justify-content-center bg-primary-dark-op">
      <div class="p-2 hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center px-sm-0">
        <!-- Sign In Block -->
        <div class="block mb-0 overflow-hidden block-transparent block-rounded w-100">
          <div class="py-4 block-content block-content-full px-lg-5 px-xl-6 py-md-5 py-lg-6 bg-body-extra-light">
            <!-- Header -->
            <div class="mb-2 text-center">
              <a class="link-fx fw-bold fs-1" href="index.html">
                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
              </a>
              <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation-signin"  method="POST">
                @csrf
              <div class="mb-4">
                <div class="input-group input-group-lg">
                  <input type="text" class="form-control" name="login" placeholder="Username">
                  <span class="input-group-text">
                    <i class="fa fa-user-circle"></i>
                  </span>
                </div>
              </div>
              <div class="mb-4">
                <div class="input-group input-group-lg">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <span class="input-group-text">
                    <i class="fa fa-asterisk"></i>
                  </span>
                </div>
              </div>
              <div class="mb-4 text-center d-sm-flex justify-content-sm-between align-items-sm-center text-sm-start">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="login-remember-me" name="login-remember-me" checked>
                  <label class="form-check-label" for="login-remember-me">Remember Me</label>
                </div>
                <div class="py-1 fw-semibold fs-sm">
                  <a href="javascript:void(0)">Forgot Password?</a>
                </div>
              </div>
              <div class="mb-4 text-center">
                <button type="submit" class="btn btn-hero btn-primary">
                  <i class="opacity-50 fa fa-fw fa-sign-in-alt me-1"></i> Sign In
                </button>
              </div>
            </form>
            <!-- END Sign In Form -->
          </div>

          </div>
        </div>
        <!-- END Sign In Block -->
      </div>
    </div>
  </div>
  @endsection
