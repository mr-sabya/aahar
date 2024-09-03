@extends('frontend.layouts.app')

@section('content')
<div class="location-page  container">
    <div class="d-flex align-items-center justify-content-center flex-column py-5">
        <img alt="#" src="{{ url('assets/frontend/img/location.png') }}" class="img-fluid">
        <div class="px-4 text-center mt-4">
            <h5 class="text-dark">Hi, nice to meet you!</h5>
            <p class="mb-5">Choose your location to start find restaurants around you.</p>
            <a href="home.html" class="btn btn-lg btn-primary w-100 my-4"><i class="feather-navigation"></i> Use
                current location</a>
            <p>Or</p>
            <form action="">
                <input type="text" class="form-control " name="" id="" placeholder="Enter Location">
            </form>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                <div class="list-card-image">
                    <img alt="#" src="{{ url('assets/frontend/img/trending1.png') }}" class="img-fluid item-img w-100">
                </div>
                <div class="p-3 position-relative">
                    <h5>Want to start business</h5>
                    <a href="#" class="text-black">Create a business account</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                <div class="list-card-image">
                    <img alt="#" src="{{ url('assets/frontend/img/trending1.png') }}" class="img-fluid item-img w-100">
                </div>
                <div class="p-3 position-relative">
                    <h5>Do you have a Restaurant?</h5>
                    <a href="#" class="text-black">Add your restaurant</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                <div class="list-card-image">
                    <img alt="#" src="{{ url('assets/frontend/img/trending1.png') }}" class="img-fluid item-img w-100">
                </div>
                <div class="p-3 position-relative">
                    <h5>Want to Deliver order?</h5>
                    <a href="#" class="text-black">Sign up to deliver</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection