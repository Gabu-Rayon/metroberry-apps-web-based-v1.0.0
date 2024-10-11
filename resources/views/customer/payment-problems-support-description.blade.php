@extends('layouts.mobile-app')

@section('title', 'Payment Problems | Customer')
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
                <a href="online-support.html">
                <span class="float-left">
                    <img src="{{ asset('mobile-app-assets/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
                <span>Payment Problems</span>
                <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{ asset('mobile-app-assets/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin">
                    <img src="{{ asset('mobile-app-assets/images/logo-main.svg')}}" alt="Main Logo">
                </div>
                <div class="address-title">Lorem Ipsum</div>

                <!--Information Container Start-->
                <div class="border-bottom-primary">
                    <div class="support-description-text font-weight-light">
                        Lorem Ipsum dolor sit amet, consectetur adispiscing elit. Prasent quis velit vitae enim hravida lacina. Ut at auctor arcu. Ut eu pellenteque tortor. Fuscue ut dam non enim elementum interectum.
                    </div>
                </div>
                <!--Information Container End-->

                <!--Comment Container Start-->
                <div class="comment-info comment-info-margin">
                    <span class="comment-label"> * </span> Comments
                    <textarea class="w-100"></textarea>
                    <a href="online-support.html" class="btn btn-primary text-uppercase">Send Message <span class="plus-icon fas fa-paper-plane"></span></a>
                </div>
                <!--Comment Container End-->

            </div>
        </div>

     <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection