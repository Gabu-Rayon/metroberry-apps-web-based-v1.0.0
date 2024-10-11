@extends('layouts.driver-mobile-app')

@section('title', 'Wallet | Driver')
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
                <span>Wallet</span>
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
                        <img src="{{ asset('mobile-app-assets/images/wallet.svg') }}" alt="Wallet" />
                    </div>
                </div>
                <div class="address-title">Wallet</div>

                <!--Wallet Options Container Start-->
                <div class="sign-up-form-container">
                    <div class="width-100">
                        <!--Option Container Start-->
                        <div class="border-bottom-primary">
                            <a href="withdraw-history.html" class="home-options-list href-decoration-none">
                                Withdraw History
                                <span class="icon choose float-right">
                                    <img src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}" alt="Angle Right Icon" />
                                </span>
                            </a>
                        </div>
                        <!--Option Container End-->

                        <!--Option Container Start-->
                        <div class="border-bottom-primary">
                            <a href="sales-history.html" class="home-options-list href-decoration-none">
                                Trip History
                                <span class="icon choose float-right">
                                    <img src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}" alt="Angle Right Icon" />
                                </span>
                            </a>
                        </div>
                        <!--Option Container End-->

                        <!--Option Container Start-->
                        <div class="border-bottom-primary">
                            <a href="payment-method.html" class="home-options-list href-decoration-none">
                                Add Payout Methods
                                <span class="icon choose float-right">
                                    <img src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}" alt="Angle Right Icon" />
                                </span>
                            </a>
                        </div>
                        <!--Option Container End-->
                    </div>
                </div>
                <!--Wallet Options Container End-->
            </div>
        </div>

        <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
