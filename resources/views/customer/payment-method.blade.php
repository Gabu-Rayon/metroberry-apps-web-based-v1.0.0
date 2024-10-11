@extends('layouts.mobile-app')

@section('title', 'Payment Method | Customer')
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
                <span>Payment Method</span>
                <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{ asset('mobile-app-assets/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img src="{{ asset('mobile-app-assets/images/payment-method.svg')}}" alt="Main Logo">
                </div>
                <div class="text-center add-payment-method">
                    Add Payment Methods <br/> You Like
                </div>

                <!--Payment Method Item Start-->
                <div>
                    <a class="text-center payment-options-list href-decoration-none">
                    <span class="far fa-money-bill-alt icon font-22"></span>
                    Cash (<span class="font-weight-light font-11">Default Payment Method</span>)
                    <span class="icon chosen"><img src="{{ asset('mobile-app-assets/icons/check.svg')}}"  alt="Check Icon"></span>
                    <span class="icon choose float-right hidden">
                        <img class="visible-icon" src="{{ asset('mobile-app-assets/icons/angle-right.svg')}}" alt="Angle Right Icon">
                        <img class="hover-icon" src="{{ asset('mobile-app-assets/icons/angle-right-white.svg')}}" alt="Angle Right Icon">
                    </span>
                </a>
                </div>
                <!--Payment Method Item End-->

                <!--Payment Method Item Start-->
                <div>
                    <a href="credit-cards.html" class="payment-options-list dark disabled href-decoration-none">
                    <span class="fab fa-cc-visa icon font-22"></span>
                    Credit Card
                    <span class="fas fa-check icon chosen hidden"></span>
                    <span class="icon choose float-right">
                        <img class="visible-icon" src="{{ asset('mobile-app-assets/icons/angle-right.svg')}}" alt="Angle Right Icon">
                        <img class="hover-icon" src="{{ asset('mobile-app-assets/icons/angle-right-white.svg')}}" alt="Angle Right Icon">
                    </span>
                </a>
                </div>
                <!--Payment Method Item End-->

                <!--Payment Method Item Start-->
                <div>
                    <a class="payment-options-list disabled href-decoration-none" href="paypal-payment-method.html">
                    <span class="icon"><img src="{{ asset('mobile-app-assets/icons/paypal.svg')}}"  alt="Paypal Icon"></span>
                    PayPal
                    <span class="fas fa-check icon chosen hidden"></span>
                    <span class="icon choose float-right">
                        <img class="visible-icon" src="{{ asset('mobile-app-assets/icons/angle-right.svg')}}" alt="Angle Right Icon">
                        <img class="hover-icon" src="{{ asset('mobile-app-assets/icons/angle-right-white.svg')}}" alt="Angle Right Icon">
                    </span>
                </a>
                </div>
                <!--Payment Method Item End-->
            </div>
        </div>

     <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection