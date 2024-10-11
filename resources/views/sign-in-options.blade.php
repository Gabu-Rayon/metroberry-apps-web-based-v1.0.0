@extends('layouts.mobile-app')

@section('title', 'Choose Appropriate | Metroberry Be-Spoken')
@section('content')

    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>

    <div class="row h-100 align-items-center">
    <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <span>Choose Appropriate | Metroberry Be-Spoken </span>
            </div>
            <!--Page Title & Icons End-->
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
                <a href="{{ route('users.sign.in.page') }}" class="regular-link">Already have an account ? Sign in</a>
            </div>
        </div>
    </div>
@endsection