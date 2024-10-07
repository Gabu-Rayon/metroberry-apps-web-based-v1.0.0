@extends('layouts.driver-mobile-app')

@section('title', 'Driver Registration')
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
                <a href="index.html">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                    </span>
                </a>
                <span>Driver Registration</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <div class="profile-picture-container">
                        <img src="{{ asset('mobile-app-assets/images/driver-registration.svg') }}" alt="Driver Registration Icon" />
                    </div>
                </div>
                <div class="address-title">Driver Registration</div>

                <!--Driver Registration Information Links Container Start-->
                <div class="sign-up-form-container">
                    <div class="width-100">
                        <!--Driver Registration Item Start-->
                        <div class="border-bottom-primary">
                            <a href="drivers-license.html" class="home-options-list href-decoration-none">
                                Driver's License
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                    <img src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}" alt="Angle Right Icon" />
                                </span>
                            </a>
                        </div>
                        <!--Driver Registration Item End-->

                        <!--Driver Registration Item Start-->
                        <div class="border-bottom-primary">
                            <a href="personal-id-card.html" class="home-options-list href-decoration-none">
                                Personal ID Card
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                    <img src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}" alt="Angle Right Icon" />
                                </span>
                            </a>
                        </div>
                        <!--Driver Registration Item End-->
                    </div>
                </div>
                <!--Driver Registration Information Links Container End-->
            </div>
        </div>
        <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
