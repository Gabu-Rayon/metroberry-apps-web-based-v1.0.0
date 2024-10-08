@extends('layouts.driver-mobile-app')

@section('title', 'Payment method | Driver')
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
                <a href="wallet.html">
                    <span class="float-left">
                        <img src="{{ asset('') }}mobile-app-assets/icons/back.svg" alt="Back Icon" />
                    </span>
                </a>
                <span>Payment Method</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('') }}mobile-app-assets/icons/menu.svg" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img src="{{ asset('') }}mobile-app-assets/images/payment-method.svg" alt="Main Logo" />
                </div>
                <div class="text-center add-payment-method bottom font-20">
                    Add Payout Methods
                </div>

                <!--Payment Option Container Start-->
                <div class="payment-method-container">
                    <label class="font-13 all-container display-flex align-items-center font-weight-light">
                        <input type="radio" class="radio-grey" name="card" />
                        <span class="text-uppercase set-primary-card">Set as Primary</span>
                    </label>
                    <a href="credit-cards.html" class="href-decoration-none payment-options-list dark disabled">
                        <span class="fab fa-cc-visa icon"></span>
                        Credit Card
                        <span class="fas fa-check icon chosen hidden"></span>
                        <span class="icon choose float-right">
                            <img src="{{ asset('') }}mobile-app-assets/icons/angle-right.svg" alt="Angle Right Icon" />
                            <img class="hover-icon" src="{{ asset('') }}mobile-app-assets/icons/angle-right-white.svg"
                                alt="Angle Right Icon" />
                        </span>
                    </a>
                </div>
                <!--Payment Option Container End-->

                <!--Payment Option Container Start-->
                <div class="payment-method-container">
                    <label class="font-13 all-container display-flex align-items-center font-weight-light">
                        <input type="radio" class="radio-grey radio-wide" name="card" />
                        <span class="text-uppercase set-primary-card">Set as Primary</span>
                    </label>
                    <a class="payment-options-list href-decoration-none disabled" href="paypal-payment-method.html">
                        <span class="icon">
                            <img src="{{ asset('') }}mobile-app-assets/icons/paypal.svg" alt="Paypal Icon" />
                        </span>
                        PayPal
                        <span class="fas fa-check icon chosen hidden"></span>
                        <span class="icon choose float-right">
                            <img class="visible-icon" src="{{ asset('') }}mobile-app-assets/icons/angle-right.svg"
                                alt="Angle Right Icon" />
                            <img class="hover-icon" src="{{ asset('') }}mobile-app-assets/icons/angle-right-white.svg"
                                alt="Angle Right Icon" />
                        </span>
                    </a>
                </div>
                <!--Payment Option Container End-->

                <!--Payment Option Container Start-->
                <div class="payment-method-container">
                    <label class="font-13 all-container display-flex align-items-center font-weight-light">
                        <input type="radio" class="radio-grey radio-wide" name="card" />
                        <span class="text-uppercase set-primary-card">Set as Primary</span>
                    </label>
                    <a href="add-new-bank-account.html" class="payment-options-list href-decoration-none disabled">
                        <span class="icon">
                            <img class="visible-icon" src="{{ asset('') }}mobile-app-assets/icons/bank-transfer.svg"
                                alt="Bank Transfer Icon" />
                            <img class="hover-icon" src="{{ asset('mobile-app-assets/icons/bank-transfer-white.svg') }}"
                                alt="Bank Transfer Icon" />
                        </span>
                        Bank Transfer
                        <span class="fas fa-check icon chosen hidden"></span>
                        <span class="icon choose float-right">
                            <img class="visible-icon" src="{{ asset('mobile-app-assets/icons/angle-right.svg') }}"
                                alt="Angle Right Icon" />
                            <img class="hover-icon" src="{{ asset('mobile-app-assets/icons/angle-right-white.svg') }}"
                                alt="Angle Right Icon" />
                        </span>
                    </a>
                </div>
                <!--Payment Option Container End-->
            </div>
        </div>

        <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
