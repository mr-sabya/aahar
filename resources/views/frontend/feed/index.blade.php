@extends('frontend.layouts.app')

@section('content')
<div class="aahar-home-page">
    <!-- banner -->
    <livewire:frontend.home.banner />
    <!-- banner -->

    <!-- category -->
    <livewire:frontend.home.category />
    <!-- category -->

    <!-- offer -->
    <livewire:frontend.home.offer />
    <!-- offer -->

    <div class="container">
        <!-- trending -->
        <livewire:frontend.home.trending />
        <!-- trending -->

        <!-- popular -->
        <livewire:frontend.home.popular />
        <!-- popular -->

        <!-- most sale -->
        <livewire:frontend.home.most-sale />
        <!-- most sale -->

    </div>
</div>
@endsection