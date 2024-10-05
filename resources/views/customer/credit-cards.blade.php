@extends('layouts.driver-mobile-app')

@section('title', 'Add Credits Cards')
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
                <a href="payment-method.html">
                <span class="float-left">
                    <img src="{{ asset('mobile-app-assets/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
                <span>Credit Cards</span>
                <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{ asset('mobile-app-assets/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="all-credit-cards">

                    <!--Credit Card Container Start-->
                    <div class="credit-card-container">
                        <label class="display-flex align-items-center font-weight-light">
                        <input type="radio" class="radio-grey" name="card"> <span class="text-uppercase label-title set-primary-card">Set as Primary</span>
                    </label>
                        <div>
                            <img class="img-responsive width-100" src="{{ asset('mobile-app-assets/images/credit-card-1.png')}}" alt="Credit Card">
                        </div>
                    </div>
                    <!--Credit Card Container End-->

                    <!--Credit Card Container Start-->
                    <div class="credit-card-container">
                        <label class="display-flex align-items-center font-weight-light">
                        <input type="radio" class="radio-grey" name="card"> <span class="text-uppercase label-title set-primary-card">Set as Primary</span>
                    </label>
                        <div>
                            <img src="{{ asset('mobile-app-assets/images/credit-card-2.svg')}}" class="img-responsive width-100" alt="Credit Card">
                        </div>
                    </div>
                    <!--Credit Card Container End-->

                    <a href="add-new-card.html" class="btn btn-dark font-18">Add New Card <img class="plus-icon" src="{{ asset('mobile-app-assets/icons/plus.svg')}}" alt="Add Icon"></a>
                </div>

                <!--Note Text Start-->
                <div class="container-sms-rate-text width-100 font-11 text-center margin-top-5">
                    <span class="light-gray font-weight-light">Paying by card is safe and convenient. <br/>The money will be charged after each trip automatically. </span>
                </div>
                <!--Note Text End-->
            </div>
        </div>
<!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection