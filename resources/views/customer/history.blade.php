@extends('layouts.driver-mobile-app')

@section('title', 'History')
@section('content')
    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->
    <div class="row h-100">
        <div class="col-xs-12 col-sm-12 remaining-height">

            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <a href="index.html">
                <span class="float-left">
                    <img src="{{ asset('mobile-app-assets/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
                <span class="title">History</span>
                <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{ asset('mobile-app-assets/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="all-history-items remaining-height">

                    <!--History Item Container Start-->
                    <div class="history-items-container history-items-padding ">
                        <div class="history-item">

                            <!--Google Map Start-->
                            <div id="map1"></div>
                            <!--Google Map End-->

                            <!--Date and Price Container Start-->
                            <div class="border-bottom-primary thin">
                                <div class="status-container">
                                    <div class="date float-left">
                                        29 April, 16:12
                                    </div>
                                    <div class="status float-right text-uppercase">
                                        cancelled
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--Date and Price Container End-->

                            <!--Address Container Start-->
                            <div class="addresses-container position-relative">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate  map-input-icon"></span>
                                        <div class="map-input display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text" placeholder="Enter an origin location" value="157 Highland Street" disabled>
                                        </div>
                                    </div>
                                    <a href="trip-description.html" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                            <span class="map-input-icon"><img src="{{ asset('mobile-app-assets/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                                            <div class="map-input display-flex controls flex-1 align-items-center">
                                                919 Main Street
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--Address Container End-->

                            <!--Support Button Start-->
                            <div>
                                <a href="online-support.html" class="btn btn-primary w-100 box-shadow-0 font-weight-light text-uppercase">Support <span class="question-icon fas fa-question-circle"></span></a>
                            </div>
                            <!--Support Button End-->
                        </div>
                    </div>
                    <!--History Item Container End-->

                    <!--History Item Container Start-->
                    <div class="history-items-container history-items-padding ">
                        <div class="history-item">

                            <!--Google Map Start-->
                            <div id="map2"></div>
                            <!--Google Map End-->

                            <!--Date and Price Container Start-->
                            <div class="border-bottom-primary thin">
                                <div class="status-container">
                                    <div class="date float-left">
                                        26 May, 19:11
                                    </div>
                                    <div class="status-none float-right text-uppercase">
                                        $7.00
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--Date and Price Container End-->

                            <!--Address Container Start-->
                            <div class="addresses-container position-relative">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate  map-input-icon"></span>
                                        <div class="map-input display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text" placeholder="Enter an origin location" value="315 Avenue C" disabled>
                                        </div>
                                    </div>
                                    <a href="trip-description.html" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                            <span class="map-input-icon"><img src="{{ asset('mobile-app-assets/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                                            <div class="map-input display-flex controls flex-1 align-items-center">
                                                Old Tbilisi
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--Address Container End-->

                            <!--Support Button Start-->
                            <div>
                                <a href="trip-description.html" class="btn btn-dark text-uppercase">More Details</a>
                            </div>
                            <!--Support Button End-->

                        </div>
                    </div>
                    <!--History Item Container End-->

                    <!--History Item Container Start-->
                    <div class="history-items-container history-items-padding ">
                        <div class="history-item">

                            <!--Google Map Start-->
                            <div id="map3"></div>
                            <!--Google Map End-->

                            <!--Date and Price Container Start-->
                            <div class="border-bottom-primary thin">
                                <div class="status-container">
                                    <div class="date float-left">
                                        19 May, 12:17
                                    </div>
                                    <div class="status-none float-right text-uppercase">
                                        $9.85
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--Date and Price Container End-->

                            <!--Address Container Start-->
                            <div class="addresses-container position-relative">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate  map-input-icon"></span>
                                        <div class="map-input display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text" placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                                        </div>
                                    </div>
                                    <a href="trip-description.html" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                            <span class="map-input-icon"><img src="{{ asset('mobile-app-assets/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                                            <div class="map-input display-flex controls flex-1 align-items-center">
                                                Palo Alto
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--Address Container End-->

                            <!--Support Button Start-->
                            <div class="margin-bottom-30">
                                <a href="trip-description.html" class="btn btn-dark text-uppercase">More Details</a>
                            </div>
                            <!--Support Button End-->

                        </div>
                    </div>
                    <!--History Item Container End-->
                </div>
            </div>
        </div>

     <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection