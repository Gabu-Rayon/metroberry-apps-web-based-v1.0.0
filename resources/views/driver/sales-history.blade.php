@extends('layouts.mobile-app')

@section('title', 'Trip History | Driver')
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
                <a href="wallet.html">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}g" alt="Back Icon" />
                    </span>
                </a>
                <span class="title">Trip History</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="all-wide-container trip-history-driver-container">
                    <!--Balance Container Start-->
                    <div class="balance-card-container">
                        <div class="label-title all-container">Balance:</div>
                        <div class="font-20 all-container">54,244.30 USD</div>
                        <div class="w-100 graph-container">
                            <canvas id="canvas" class="h-100"></canvas>
                        </div>
                    </div>
                    <!--Balance Container Start-->

                    <!--Search Container Start-->
                    <div class="form-group search-history">
                        <div class="input-group light-field">
                            <input class="form-control" type="text" autocomplete="off" name="search"
                                placeholder="Search" />
                            <div class="input-group-append">
                                <span class="fas fa-search"></span>
                            </div>
                        </div>
                    </div>
                    <!--Search Container End-->

                    <div class="all-sales-history-items">
                        <!--Sale History Item Start-->
                        <a href="trip-description.html" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="all-wide-container">
                                    <img src="{{ asset('mobile-app-assets/images/profile-8.png') }}" alt="Profile Picture" />
                                </div>
                                <div class="width-100">
                                    <div>Nino Kudava</div>
                                    <div>
                                        <span class="label-title font-15 font-weight-normal">Route ID:</span>
                                        GD345
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="blue-price text-right">$12.30</div>
                                    <div class="font-13">05.19.2019</div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="trip-description.html" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="all-wide-container">
                                    <img src="{{ asset('mobile-app-assets/images/profile-9.png') }}" alt="Profile Picture" />
                                </div>
                                <div class="width-100">
                                    <div>John Smith</div>
                                    <div>
                                        <span class="label-title font-15 font-weight-normal">Route ID:</span>
                                        GD345
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="blue-price text-right">$12.30</div>
                                    <div class="font-13">05.19.2019</div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="trip-description.html" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="all-wide-container">
                                    <img src="{{ asset('mobile-app-assets/images/profile-10.png') }}" alt="Profile Picture" />
                                </div>
                                <div class="width-100">
                                    <div>Amanda Legran</div>
                                    <div>
                                        <span class="label-title font-15 font-weight-normal">Route ID:</span>
                                        GD345
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="blue-price text-right">$12.30</div>
                                    <div class="font-13">05.19.2019</div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="trip-description.html" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="all-wide-container">
                                    <img src="{{ asset('mobile-app-assets/images/profile-11.png') }}" alt="Profile Picture" />
                                </div>
                                <div class="width-100">
                                    <div>Harmonie Snow</div>
                                    <div>
                                        <span class="label-title font-15 font-weight-normal">Route ID:</span>
                                        GD345
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="blue-price text-right">$12.30</div>
                                    <div class="font-13">05.19.2019</div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="trip-description.html" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="all-wide-container">
                                    <img src="{{ asset('mobile-app-assets/images/profile-12.png') }}" alt="Profile Picture" />
                                </div>
                                <div class="width-100">
                                    <div>Nikos Brown</div>
                                    <div>
                                        <span class="label-title font-15 font-weight-normal">Route ID:</span>
                                        GD345
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="blue-price text-right">$12.30</div>
                                    <div class="font-13">05.19.2019</div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="trip-description.html" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="all-wide-container">
                                    <img src="{{ asset('mobile-app-assets/images/profile-13.png') }}" alt="Profile Picture" />
                                </div>
                                <div class="width-100">
                                    <div>Jeremy Bill</div>
                                    <div>
                                        <span class="label-title font-15 font-weight-normal">Route ID:</span>
                                        GD345
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="blue-price text-right">$12.30</div>
                                    <div class="font-13">05.19.2019</div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="trip-description.html" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="all-wide-container">
                                    <img src="{{ asset('mobile-app-assets/images/profile-14.png') }}" alt="Profile Picture" />
                                </div>
                                <div class="width-100">
                                    <div>Amanda Legran</div>
                                    <div>
                                        <span class="label-title font-15 font-weight-normal">Route ID:</span>
                                        GD345
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="blue-price text-right">$12.30</div>
                                    <div class="font-13">05.19.2019</div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="trip-description.html" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="all-wide-container">
                                    <img src="{{ asset('mobile-app-assets/images/profile-15.png') }}" alt="Profile Picture" />
                                </div>
                                <div class="width-100">
                                    <div>Amanda Legran</div>
                                    <div>
                                        <span class="label-title font-15 font-weight-normal">Route ID:</span>
                                        GD345
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="blue-price text-right">$12.30</div>
                                    <div class="font-13">05.19.2019</div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->
                    </div>

                    <!--Load More Button Start-->
                    <div class="load-more">
                        <button type="button" class="btn btn-dark text-uppercase load-more">
                            Load More
                        </button>
                    </div>
                    <!--Load More Button End-->
                </div>
            </div>
        </div>

      <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
