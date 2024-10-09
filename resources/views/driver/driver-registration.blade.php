@extends('layouts.driver-mobile-app')

@section('title', 'Registration | Driver')
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
               <a href="{{ route('driver.dashboard') }}">
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
                        <!--Driver Driver's License Item Start-->
                        <div class="border-bottom-primary">
                            <a href="{{ route('driver.license.document') }}" class="home-options-list href-decoration-none">
                                License
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                    <img src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}" alt="Angle Right Icon" />
                                </span>
                            </a>
                        </div>
                        <!--Driver Driver's License Item End-->

                        <!--Driver   Personal ID Card Item Start-->
                        <div class="border-bottom-primary">
                            <a href="{{  route('personal.id.card.document') }}" class="home-options-list href-decoration-none">
                                Personal ID Card
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                    <img src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}" alt="Angle Right Icon" />
                                </span>
                            </a>
                        </div>
                        <!--Driver   Personal ID Card Item End-->
                        <!--Driver  PSV Badge Item Start-->
                        <div class="border-bottom-primary">
                            <a href="{{ route('psvbadge.document') }}" class="home-options-list href-decoration-none">
                                PSV Badge
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                    <img src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}" alt="Angle Right Icon" />
                                </span>
                            </a>
                        </div>
                        <!--Driver  PSV Badge Item End-->
                    </div>
                </div>
                <!--Driver Registration Information Links Container End-->
            </div>
        </div>
        <!--Terms And Conditions Agreement Container Start-->
            <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
                <div class="container-sms-rate-text width-100 font-11">
                    <span class="light-gray font-weight-light">
                    </span>
                    <br />
                    <a href="#" class="dark-link">
                        <span class="font-weight-light">Metroberry Tours & Travel</span>
                    </a>
                </div>
            </div>
            <!--Terms And Conditions Agreement Container End-->
            
        <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
