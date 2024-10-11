@extends('layouts.mobile-app')

@section('title', 'Sign Up | Driver')
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
                <a href="sign-in.html">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                    </span>
                </a>
                <span>Sign Up</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img src="{{ asset('mobile-app-assets/images/logo-main.svg') }}" alt="Main Logo" />
                </div>

                <!--Phone Verification Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100">
                        <!--Phone Number Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control h-100" id="phone-input" type="tel" name="phone"
                                    autocomplete="off" data-intl-tel-input-id="0" placeholder="(201) 555-0123" />
                            </div>
                        </div>
                        <!--Phone Number Container Start-->

                        <div class="form-submit-button small-padding">
                            <a href="sign-up-page-2.html" class="btn btn-primary text-uppercase">Continue</a>
                        </div>
                    </form>

                    <!--Note Text Start-->
                    <div class="text-center sms-rate-text">
                        <span>You should receive an SMS for verification. Message and data
                            rates may apply</span>
                    </div>
                    <!--Note Text End-->
                </div>
                <!--Phone Verification Container End-->
            </div>
        </div>

        <!--Terms And Conditions Agreement Container Start-->
        <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
            <div class="container-sms-rate-text width-100 font-11">
                <span class="light-gray font-weight-light">By signing up you have agreed to our
                </span>
                <br />
                <a href="#" class="dark-link">
                    <span class="font-weight-light">Terms of Use & Privacy Policy</span>
                </a>
            </div>
        </div>
        <!--Terms And Conditions Agreement Container End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
