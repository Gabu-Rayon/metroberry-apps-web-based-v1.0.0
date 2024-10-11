@extends('layouts.mobile-app')

@section('title', 'Sign In | Driver')
@section('content')
    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
        <div class="col-xs-12 col-sm-12">
            <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                <img src="{{ asset('mobile-app-assets/images/logo-main.svg') }}" alt="Main Logo" />
            </div>

            <!--Sign In/Login Container Start-->
            <div class="address-title text-center">
                <div class="display-flex justify-content-center">
                    <div class="float-left sign-in-item border-bottom-primary-100" data-class="login">
                        Login
                    </div>
                    <div class="float-left sign-in-item border-bottom-light-grey" data-class="sign-up">
                        Sign Up
                    </div>
                </div>
            </div>
            <!--Sign In/Login Container End-->

            <!--Sign In Container Start-->
            <div class="sign-up-form-container login text-center">
                <form class="width-100">
                    <!--Sign In Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/avatar-light.svg') }}" alt="Avatar Icon" />
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="username"
                                placeholder="Username" />
                        </div>
                    </div>
                    <!--Sign In Field End-->

                    <!--Sign In Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/lock.svg') }}" alt="Lock Icon" />
                                </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Password" />
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/eye.svg') }}" alt="Password Visibility Icon" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Sign In Field End-->

                    <div class="form-submit-button">
                        <a href="sign-up-page-2.html" class="btn btn-dark text-uppercase">Login</a>
                    </div>
                </form>
            </div>
            <!--Sign In Container End-->

            <!--Sign Up Container Start-->
            <div class="sign-up-form-container sign-up text-center hidden">
                <form class="width-100">
                    <!--Sign Up Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/avatar-light.svg') }}" alt="Avatar Icon" />
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="username"
                                placeholder="Username" />
                        </div>
                    </div>
                    <!--Sign Up Field End-->

                    <!--Sign Up Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/envelope.svg') }}" alt="Envelope Icon" />
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="email"
                                placeholder="Email" />
                        </div>
                    </div>
                    <!--Sign Up Field End-->

                    <!--Sign Up Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/phone.svg') }}" alt="Phone Number" />
                                </span>
                            </div>
                            <input class="form-control" type="tel" name="phone" placeholder="Mobile Phone Number" />
                        </div>
                    </div>
                    <!--Sign Up Field End-->

                    <!--Sign Up Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/lock.svg') }}" alt="Lock Icon" />
                                </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Password" />
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/eye.svg') }}" alt="Password Visibility Icon" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Sign Up Field End-->

                    <!--Sign Up Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/lock.svg') }}" alt="Lock Icon" />
                                </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Confirm Password" />
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="{{ asset('mobile-app-assets/icons/eye.svg') }}" alt="Password Visibility Icon" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Sign Up Field End-->

                    <div class="form-submit-button">
                        <a href="sign-up.html" class="btn btn-dark text-uppercase">Sign Up</a>
                    </div>
                </form>
            </div>
            <!--Sign Up Container End-->
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
