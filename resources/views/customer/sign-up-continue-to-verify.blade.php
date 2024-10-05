@extends('layouts.driver-mobile-app')

@section('title', 'Sign Up')
@section('content')

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
        <div class="col-xs-12 col-sm-12">

            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <a href="{{ route('customer.register.page') }}">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon">
                    </span>
                </a>
                <span>Verify  Your Account</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img src="{{ asset('mobile-app-assets/images/logo-main.svg') }}" alt="Main Logo">
                </div>

                <!--Sign Up Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100">
                        <form class="width-100"method="POST" action="{{ route('phone.email.send.code') }}">
                            @csrf

                            {{-- For Mobile verification here  --}}
                            {{-- <div class="form-group">
                            <div class="input-group">
                                <input class="form-control h-100" id="phone-input" type="tel" name="phone" autocomplete="off" data-intl-tel-input-id="0" placeholder="(201) 555-0123">
                            </div>
                        </div> --}}
                            {{-- For Email verification here  --}}
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control h-100" id="email" type="email" name="email"
                                        autocomplete="on" data-intl-tel-input-id="0" placeholder="user@gmail.com">
                                </div>
                            </div>
                            <div class="form-submit-button small-padding">
                                <a href="{{ route('verify.code.page') }}"
                                    class="btn btn-primary text-uppercase">Continue</a>
                            </div>
                        </form>

                        <!--Rate Text Constainer Start-->
                        <div class="text-center sms-rate-text">
                            {{-- <span>You should receive an SMS for verification. Message and data <br/> rates may apply</span> --}}
                            <span>You should receive an Email for verification. Message and data <br /> If not enter the
                                email you have just register with again here. </span>
                        </div>
                        <!--Rate Text Constainer Start-->

                </div>
                <!--Sign Up Container End-->

            </div>
        </div>
    @endsection
