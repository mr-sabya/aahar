@extends('frontend.layouts.app')

@section('content')
<div class="login-page vh-100">
    
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="col-md-4">
            <div class="px-5 col-10 mx-auto">
                <h2 class="text-dark my-0">Welcome Back</h2>
                <p class="text-50">Sign in to continue</p>
                <form class="mt-5 mb-4" action="https://askbootstrap.com/preview/swiggiweb-v1-1/verification.html">
                    <div class="form-group">
                        <label class="text-dark pb-1">Email</label>
                        <input type="email" placeholder="Enter Email" class="form-control py-1">
                    </div>
                    <div class="form-group">
                        <label class="text-dark pb-1">Password</label>
                        <input type="password" placeholder="Enter Password" class="form-control py-1">
                    </div>
                    <button class="btn btn-primary btn-lg w-100">SIGN IN</button>
                    <div class="py-2">
                        <button class="btn btn-lg btn-facebook w-100"><i class="feather-facebook"></i> Connect with
                            Facebook</button>
                    </div>
                </form>
                <a href="forgot_password.html" class="text-decoration-none">
                    <p class="text-center">Forgot your password?</p>
                </a>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="signup.html">
                        <p class="text-center m-0">Don't have an account? Sign up</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection