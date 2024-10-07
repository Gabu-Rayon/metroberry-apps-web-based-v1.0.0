@extends('layouts.driver-mobile-app')

@section('title', 'Sign Up Options')
@section('content')

    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>

    <div class="row h-100 align-items-center">
        <div class="col-xs-12 col-sm-12 margin-bottom-up">
            <div class="text-center mb-5">
                <img src="{{ asset('mobile-app-assets/images/logo-metro.png') }}" alt="Main Logo" height="100">
            </div>

            <div class="sign-up-btn-container">
                <a href="{{ route('customer.register.page') }}"
                    class="btn btn-center display-block btn-primary text-uppercase margin-top-10" style="width: 28rem;">
                    Customer sign up
                </a>
            </div>

            <div class="sign-up-btn-container">
                <a href="{{ route('driver.signup') }}"
                    class="btn btn-center display-block btn-primary text-uppercase margin-top-10" style="width: 28rem;">
                    Driver sign up
                </a>
            </div>

            <div class="have-an-account text-center">
                <a href="{{ route('customer.sign.in.page') }}" class="regular-link">Already have an account?</a>
            </div>
        </div>
    </div>
@endsection
