@extends('layouts.driver-mobile-app')

@section('title', 'Register Account')
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
                <span>Register Account</span>
            </div>

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin">
                    <img src="{{ asset('mobile-app-assets/images/logo-main.svg') }}" alt="Main Logo">
                </div>

                <!--Sign Up Container Start-->
                <div class="sign-up-form-container text-center">
                    <!--Page Title & Icons End-->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="width-100"method="POST" action="{{ route('auth.customer.register') }}">
                        @csrf

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/avatar-light.svg') }}"
                                            alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="on" name="name"
                                    placeholder="Name" value ="{{ old('name') }}">
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span><img src="{{ asset('mobile-app-assets/icons/envelope.svg') }}"
                                            alt="Envelope Icon"></span>
                                </div>
                                <input class="form-control" type="text" autocomplete="on" name="email"
                                    placeholder="Email" value ="{{ old('email') }}">
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->

                        {{-- For Mobile  here  --}}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        {{-- <img src="{{ asset('mobile-app-assets/icons/envelope.svg') }}"
                                            alt="Envelope Icon"> --}}
                                    </span>
                                </div>
                                <input class="form-control" id="phone-input" type="text" name="phone" autocomplete="on"
                                    data-intl-tel-input-id="0" placeholder="(254) 70 0000 000">
                            </div>
                        </div>
                        {{-- For Email verification here  --}}

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span><img src="{{ asset('mobile-app-assets/icons/lock.svg') }}" alt="Lock Icon"></span>
                                </div>
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                    value ="{{ old('password') }}">
                                <div class="input-group-append password-visibility">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/eye.svg') }}"
                                            alt="Password Visibility Icon">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->
                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span><img src="{{ asset('mobile-app-assets/icons/lock.svg') }}"
                                            alt="Lock Icon"></span>
                                </div>
                                <input class="form-control" type="password" name="password_confirmation"
                                    placeholder="Confirm Password" value ="{{ old('password_confirmation') }}">
                                <div class="input-group-append password-visibility">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/eye.svg') }}"
                                            alt="Password Visibility Icon">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->


                        <!--Pickup organisations Field Start-->
                        <div class="form-group">
                            <label class="width-100">
                                <div class="input-group-prepend">
                                    <span>
                                        <span class="label-title">Select Organisation </span>
                                    </span>
                                </div>
                                <span class="car-info-wrap display-block">
                                    <select name="organisation" class="custom-select font-weight-light car-info"
                                        id="organisation" required>
                                        <option value="" readonly>Select Organisation</option>
                                        @foreach ($organisations as $organisation)
                                            <option value="{{ $organisation->id }}">{{ $organisation->user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </span>
                            </label>
                        </div>
                        <!--Pickup organisations Field End-->


                        <div class="form-submit-button">
                            <button class="btn btn-primary text-uppercase" type="submit">Register </button>
                        </div>
                    </form>
                </div>
                <!--Sign Up Container Start-->

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @endsection
