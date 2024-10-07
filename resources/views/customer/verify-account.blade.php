@extends('layouts.driver-mobile-app')

@section('title', 'Send Code')
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
                <a href="{{ route('sign.up.continue.page') }}">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon">
                    </span>
                </a>
                <span>Send Code</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin e">
                    <img src="{{ asset('mobile-app-assets/images/logo-main.svg') }}" alt="Main Logo">

                    <!--Verification Information Container Start-->
                    {{-- <div class="margin-top-25">
                        <div class="verify-text">
                            <span class="font-20">Verify Code</span>
                        </div>
                        <span class="font-weight-light font-roboto font-15">
                            Please check your SMS. <br />
                            We just sent a verification code on your phone
                            <br />
                            + 1 (000) 555 - 0000
                        </span>
                    </div> --}}
                    <!--Verification Information Container Start-->


                    <!--Verification Information Container Start-->
                    <div class="margin-top-25">
                        <div class="verify-text">
                            <span class="font-20">Verify Code</span>
                        </div>
                        <span class="font-weight-light font-roboto font-15">
                            Please check your Email. <br />
                            We just sent a verification code on your email
                        </span>
                    </div>
                    <!--Verification Information Container Start-->

                </div>

                <!--Enter Verification Code Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100"method="POST" action="{{ route('verify.code') }}">
                        @csrf
                        {{-- <div class="form-group">
                            <div class="input-group border-bottom">
                                <input class="form-control verify-sms" type="tel" name="verification-code"
                                    placeholder="----" maxlength="4">
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <div class="input-group border-bottom">
                                <input class="form-control verify-sms" type="tel" name="verification-code"
                                    placeholder="----" maxlength="4">
                            </div>
                        </div>
                        <div class="font-roboto">
                            <span>Didn't get a code? </span> <a href="{{ route('sign.up.continue.page') }}"
                                class="href-decoration-none primary-color">Try Again</a>
                        </div>
                        <div class="form-submit-button">
                            <button class="btn btn-primary text-uppercase" type="submit">Verify </button>
                        </div>
                    </form>
                </div>
                <!--Enter Verification Code Container End-->

            </div>
        </div>

    @endsection
