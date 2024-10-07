@extends('layouts.driver-mobile-app')

@section('title', 'Online Support | Customer')
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
                    <img src="{{ asset('mobile-app-assets/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
                <span>Online Support</span>
                <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{ asset('mobile-app-assets/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin">
                    <div class="profile-picture-container">
                        <img src="{{ asset('mobile-app-assets/images/logo-main.svg')}}" alt="Logo">
                    </div>
                </div>
                <div class="address-title">Online Support</div>

                <!--Support Topic Items Container Start-->
                <div class="sign-up-form-container">
                    <div class="width-100">

                        <!--Support Topic Item Start-->
                        <div class="border-bottom-primary">
                            <a href="payment-problems-support-description.html" class="home-options-list href-decoration-none">
                            <span>Payment Problems</span>
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{ asset('mobile-app-assets/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                        </div>
                        <!--Support Topic Item End-->

                        <!--Support Topic Item Start-->
                        <div class="border-bottom-primary">
                            <a href="report-driver-support-description.html" class="home-options-list href-decoration-none">
                            <span>Report Driver</span>
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{ asset('mobile-app-assets/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                        </div>
                        <!--Support Topic Item End-->

                        <!--Support Topic Item Start-->
                        <div class="border-bottom-primary">
                            <a href="report-car-support-description.html" class="home-options-list href-decoration-none">
                            <span>Report Car Condition</span>
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{ asset('mobile-app-assets/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                        </div>
                        <!--Support Topic Item End-->

                        <!--Support Topic Item Start-->
                        <div class="border-bottom-primary">
                            <a href="report-arrival-support-description.html" class="home-options-list href-decoration-none">
                            <span>Report Arrival/Departure Problems</span>
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{ asset('mobile-app-assets/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                        </div>
                        <!--Support Topic Item End-->

                        <!--Support Topic Item Start-->
                        <div class="border-bottom-primary">
                            <a href="lost-and-found-support-description.html" class="home-options-list href-decoration-none">
                            <span>Lost & Found</span>
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{ asset('mobile-app-assets/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                        </div>
                        <!--Support Topic Item End-->

                    </div>
                </div>
                <!--Support Topic Items Container End-->

            </div>
        </div>

       <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection