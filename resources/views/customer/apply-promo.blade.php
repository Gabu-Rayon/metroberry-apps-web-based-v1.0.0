@extends('layouts.driver-mobile-app')

@section('title', 'Add  Promo Code | Customer')
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
                <span>Apply Promo Code</span>
                <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{ asset('mobile-app-assets/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img src="{{ asset('mobile-app-assets/images/logo-main.svg')}}" alt="Main Logo">
                </div>
                <div class="address-title">Promo Code</div>

                <!--Promocode Container Start-->
                <div class="promocode-container pb-0">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                <img src="{{ asset('mobile-app-assets/icons/ticket.svg')}}" alt="Ticket Promo Icon">
                            </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="promo" placeholder="Add Promo Code">
                        </div>
                    </div>
                    <div class="activate-btn">
                        <button type="button" class="btn btn-dark font-weight-normal">Activation</button>
                    </div>
                </div>
                <!--Promocode Container End-->

            </div>
        </div>

     <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection