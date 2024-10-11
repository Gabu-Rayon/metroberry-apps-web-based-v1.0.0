@extends('layouts.mobile-app')

@section('title', 'My Address | Customer')
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
                <a href="addresses.html">
                <span class="float-left">
                    <img src="{{ asset('mobile-app-assets/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
                <span>My Address / Home</span>
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
                <div class="address-title">Home</div>

                <!--Home Address Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="{{ asset('mobile-app-assets/icons/marker.svg')}}"  alt="Marker Icon">
                                </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="address" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="{{ asset('mobile-app-assets/icons/marker.svg')}}"  alt="Marker Icon">
                                </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="city" placeholder="City">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="{{ asset('mobile-app-assets/icons/marker.svg')}}"  alt="Marker Icon">
                                </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="country" placeholder="Country">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="{{ asset('mobile-app-assets/icons/marker.svg')}}"  alt="Marker Icon">
                                </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="zip" placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="form-submit-button">
                            <a href="addresses.html" class="btn btn-dark text-uppercase">Save  <span class="far fa-save save-icon"></span></a>
                        </div>
                    </form>
                </div>
                <!--Home Address End-->

            </div>
        </div>

      <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection