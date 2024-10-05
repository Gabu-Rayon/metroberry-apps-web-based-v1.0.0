@extends('layouts.driver-mobile-app')

@section('title', 'Driver')
@section('content')
    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <!--Loading Logo Container Start-->
    <div class="main-background w-100 h-100">
        <div class="d-flex h-100 justify-content-center align-items-center flex-column">
            <input type="hidden" class="loading-logo driver" />
            <a href="sign-in.html"><img src="{{ asset('mobile-app-assets/images/logo-white.svg') }}" alt="Main Logo" /></a>
            <div class="text-uppercase driver-text-logo">DRIVER</div>
        </div>
    </div>
    <!--Loading Logo Container End-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
