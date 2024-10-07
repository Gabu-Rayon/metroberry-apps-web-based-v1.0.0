@extends('layouts.driver-mobile-app')

@section('title', 'Sign Up Options')
@section('content')

    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>

    <div class="row h-100 align-items-center">
        <div class="col-xs-12 col-sm-12 margin-bottom-up">

            @include('components.logometro')

            <div class="sign-up-btn-container">
                <a href="{{ route('customer.register.page') }}"
                    class="btn btn-center width-100 display-block btn-primary text-uppercase margin-top-10">Customer Sign
                    up</a>
            </div>

            <div class="sign-up-btn-container">
                <a href="{{ route('driver.signup') }}"
                    class="btn btn-center width-100 display-block btn-primary text-uppercase margin-top-10">Driver Sign
                    up</a>
            </div>

            <div class="have-an-account text-center">
                <a href="{{ route('customer.sign.in.page') }}" class="regular-link">Already have an account?</a>
            </div>
        </div>
    </div>
@endsection
