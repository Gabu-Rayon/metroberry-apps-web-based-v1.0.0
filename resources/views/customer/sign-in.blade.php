@extends('layouts.driver-mobile-app')

@section('title', 'Sign in')
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
                <a href="{{ route('sign.up.options.page') }}">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon">
                    </span>
                </a>
                <span>Sign In</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img src="{{ asset('mobile-app-assets/images/logo-main.svg') }}" alt="Main Logo">
                </div>

                <!--Sign Up Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100"method="POST" action="{{ route('auth.customer.login') }}">
                        @csrf
                        <!--Sign In Form Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/avatar-light.svg') }}"
                                            alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="email"
                                    placeholder="Email Address">
                            </div>
                        </div>
                        <!--Sign In Form Field End-->

                        <!--Sign In Form Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/lock.svg') }}" alt="Lock Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="password" name="password" placeholder="Password">
                                <div class="input-group-append password-visibility">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/eye.svg') }}"
                                            alt="Password Visibility Icon">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Sign In Form Field End-->
                        <div class="form-submit-button">
                            <button class="btn btn-primary text-uppercase" type="submit">Sign In </button>
                        </div>
                    </form>
                </div>
                <!--Sign Up Container Start-->

            </div>
        </div>
    @endsection
