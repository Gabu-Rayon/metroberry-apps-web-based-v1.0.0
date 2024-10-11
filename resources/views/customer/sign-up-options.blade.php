@extends('layouts.mobile-app')

@section('title', 'Sign Up Options')
@section('content')

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100 align-items-center">
        <div class="col-xs-12 col-sm-12 margin-bottom-up">
            <div class="text-center mb-5">
                <img src="{{ asset('company-logos/logo_white.png') }}" height="150" width="300" alt="Main Logo">
            </div>

            <!--Sign Up Buttons Container Start-->
            <div class="sign-up-btn-container">
                {{-- <a class="btn btn-center width-100 display-block btn-secondary text-uppercase btn-padding-1">Sign Up With
                    Facebook</a> --}}
                <a href="{{ route('customer.register.page') }}"
                    class="btn btn-center width-100 display-block btn-primary text-uppercase margin-top-10">Sign up</a>
            </div>
            <!--Sign Up Buttons Container End-->

            <div class="have-an-account text-center">
                <a href="{{ route('customer.sign.in.page') }}" class="regular-link">Already have an account?</a>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
