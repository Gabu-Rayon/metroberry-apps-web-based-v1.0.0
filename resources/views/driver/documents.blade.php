@extends('layouts.driver-mobile-app')

@section('title', 'Driver Dashboard')
@section('content')
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>

    <div class="row h-100">
        @php
            $user = Auth::user();
            $driver = $user->driver;
        @endphp

        <div class="col-xs-12 col-sm-12 remaining-height">
            <div class="header-icons-container text-center">
                <span class="float-left back-to-map hidden">
                    <i class="fa-solid fa-arrow-left"></i>
                </span>
                @if ($driver->status == 'inactive')
                    <span class="title">Deactivated</span>
                @endif
                <a href="#">
                    <span class="float-right menu-open closed">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </a>
            </div>

            <div class="change-request-status">

                @if ($driver->status == 'inactive')
                    <div
                        class="request-notification-container map-notification offline-notification map-notification-warning">
                        Your account is inactive
                        <div class="font-weight-light">Contact your administrator</div>
                    </div>
                @endif

                <div class="request-notification-container map-notification meters-left-450 map-notification-warning">
                    <div>
                        <h5 for="national_id_front_avatar" class="form-label">National ID Pictures</h5>
                        <img src="{{ asset('storage/' . $driver->national_id_front_avatar) }}" alt="National ID Front"
                            class="img-fluid">

                        <img src="{{ asset('storage/' . $driver->national_id_behind_avatar) }}" alt="National ID Back"
                            class="img-fluid">

                    </div>
                    <h5 class="font-weight-dark m-3 my-3">
                        Update your National ID Details
                    </h5>


                    <form action="{{ route('driver.personal-documents') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="national_id_front_avatar" class="form-label">National ID Front Picture</label>
                            <input type="file" id="national_id_front_avatar" name="national_id_front_avatar" required>
                        </div>

                        <div class="mb-3">
                            <label for="national_id_back_avatar" class="form-label">National ID Back Picture</label>
                            <input type="file" id="national_id_back_avatar" name="national_id_back_avatar" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-50 m-2 float-end font-weight-light text-uppercase">
                            Submit
                        </button>
                    </form>
                </div>



                <div class="request-notification-container map-notification meters-left-450 map-notification-warning">
                    <div>
                        <h5 for="national_id_front_avatar" class="form-label">License Pictures</h5>
                        <img src="{{ asset('storage/' . $driver->driverLicense->driving_license_avatar_front) }}"
                            alt="National ID Front" class="img-fluid">

                        <img src="{{ asset('storage/' . $driver->driverLicense->driving_license_avatar_back) }}"
                            alt="National ID Back" class="img-fluid">

                    </div>
                    <h5 class="font-weight-dark m-3 my-3">
                        Update your Driver's License details
                    </h5>
                    <form action="{{ route('driver.license', $driver->driverLicense->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="driving_license_no" class="form-label">License no</label>
                            <input type="text" id="driving_license_no" name="driving_license_no" class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="issue_date" class="form-label">Issue Date</label>
                            <input type="date" id="issue_date" name="issue_date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="expiry_date" class="form-label">Expiry Date</label>
                            <input type="date" id="expiry_date" name="expiry_date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="national_id_front_avatar" class="form-label">License Front Picture</label>
                            <input type="file" id="national_id_front_avatar" name="national_id_front_avatar" required>
                        </div>

                        <div class="mb-3">
                            <label for="national_id_back_avatar" class="form-label">License Back Picture</label>
                            <input type="file" id="national_id_back_avatar" name="national_id_back_avatar" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-50 m-2 float-end font-weight-light text-uppercase">
                            Submit
                        </button>
                    </form>
                </div>

                <div class="request-notification-container map-notification meters-left-450 map-notification-warning">
                    <div>
                        <h5 for="national_id_front_avatar" class="form-label">PSV Badge Copy</h5>
                        <img src="{{ asset('storage/' . $driver->psvBadge->psv_badge_avatar) }}" alt="National ID Front"
                            class="img-fluid">
                    </div>
                    <h5 class="font-weight-dark m-3 my-3">
                        Update your PSV Badge details
                    </h5>
                    <form action="{{ route('driver.psvbadge', $driver->psvBadge->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="psv_badge_no" class="form-label">Badge no</label>
                            <input type="text" id="psv_badge_no" name="psv_badge_no" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="issue_date" class="form-label">Issue Date</label>
                            <input type="date" id="issue_date" name="issue_date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="expiry_date" class="form-label">Expiry Date</label>
                            <input type="date" id="expiry_date" name="expiry_date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="badge_copy" class="form-label">Copy</label>
                            <input type="file" id="badge_copy" name="badge_copy" required>
                        </div>

                        <button type="submit"
                            class="btn btn-primary w-50 m-2 float-end font-weight-light text-uppercase">
                            Submit
                        </button>
                    </form>
                </div>



                <div
                    class="request-notification-container hidden map-notification meters-left-50 map-notification-warning">
                    50 meters to the final goal
                    <div class="font-weight-light">
                        <span><img src="{{ asset('driver-assets/icons/path-left.svg') }}" class="direction-icon" />
                        </span>
                        Turn left on Victoria Avenue
                    </div>
                </div>
                <!--Notification Container End-->

                <!--Link Notification Container Start-->
                <a href="new-requests.html" class="new-request href-decoration-none">
                    <div class="request-notification-container hidden map-notification new-request-notification">
                        3 New Requests!
                        <div class="font-weight-light">
                            Please accept or decline request
                        </div>
                    </div>
                </a>
                <!--Link Notification Container End-->
            </div>
            <!--All Notifications & Status Container End-->

            <!--Go To Pickup Button Start-->
            <div class="go-to-pickup-btn hidden">
                <button type="button" class="btn btn-primary text-uppercase">
                    Go to Pickup
                </button>
            </div>
            <!--Go To Pickup Button End-->

            <!--Tapped Car Information Container Start-->
            <div class="tapped-car-info request hidden">
                <div class="request-item-container remaining-height">
                    <div class="profile-information text-center">
                        <div class="profile-information">
                            <img class="profile-picture-img" src="{{ asset('driver-assets/images/profile-16.png') }}"
                                alt="Profile Picture" />
                            <div class="profile-name font-18">Amanda Legren</div>
                        </div>
                    </div>
                    <div class="all-wide-container history-items-container overflow-scroll-y remaining-height">
                        <div class="history-item driver-request">
                            <!--Wishes Container Start-->
                            <div class="notification-container">
                                <div class="grey-label">Wishes</div>
                                <p class="grey-label font-weight-light">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Praesent quis velit vitae enim gravida lacinia. Ut at auctor
                                    arcu. Ut eu pellentesque tortor.
                                </p>
                            </div>
                            <!--Wishes Container End-->

                            <div class="border-bottom-primary">
                                <div class="status-container status-container-driver"></div>
                            </div>

                            <!--Addresses Container Start-->
                            <div class="addresses-container position-relative driver-addresses-container">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                        <div class="map-input mr-0 display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text"
                                                placeholder="Enter an origin location" value="555 Middlefield Rd"
                                                disabled />
                                        </div>
                                    </div>
                                    <div class="w-100 map-input-container map-input-container-bottom">
                                        <span class="map-input-icon">
                                            <img src="{{ asset('driver-assets/icons/circle.svg') }}"
                                                alt="Current Location Icon" />
                                        </span>
                                        <div class="map-input mr-0 display-flex border-0">
                                            <input class="controls flex-1 font-weight-light" type="text"
                                                placeholder="Enter a destination location" value="Palo Alto" disabled />
                                        </div>
                                        <span class="dotted-line"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Addresses Container End-->

                            <!--All Trips Container Start-->
                            <div class="all-trip-fares">
                                <div class="border-bottom-primary border-bottom-light-grey">
                                    <div class="text-uppercase trip-fare">Trip Fare</div>
                                </div>
                                <div class="trip-fare-container trip-fare-driver font-weight-light">
                                    <!--Trip Fare Item Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Estimate Price</span>
                                        <span class="float-right blue-price">$12.30</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fare Item End-->

                                    <!--Trip Fare Item Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance</span>
                                        <span class="float-right blue-price">5.54 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fare Item End-->

                                    <!--Trip Fare Item Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance from Customer</span>
                                        <span class="float-right blue-price">0.740 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fare Item End-->
                                </div>
                            </div>
                            <!--All Trips Container End-->

                            <!--Accept Or Decline Container Start-->
                            <div class="request-btn-container display-flex justify-content-between">
                                <div class="request-btn">
                                    <button type="button" class="btn btn-transparent text-uppercase">
                                        Decline
                                    </button>
                                </div>
                                <div class="request-btn">
                                    <button type="button"
                                        class="btn btn-primary w-100 font-weight-light text-uppercase btn-accept">
                                        Accept
                                    </button>
                                </div>
                            </div>
                            <!--Accept Or Decline Container End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Tapped Car Information Container End-->

            <div class="request-ride-info hidden">
                <div class="tapped-car-container">
                    <div class="tapped-car-info-container">
                        <!--Profile Information Start-->
                        <div class="text-center">
                            <img class="profile-picture-img" src="{{ asset('driver-assets/images/profile-18.png') }}"
                                alt="Profile Picture" />
                            <div class="tapped-car-info-header-icons float-right">
                                <div class="double-up slide-up font-20 float-right">
                                    <img src="{{ asset('driver-assets/icons/uparrow.svg') }}" alt="Uparrow Icon" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div>Amanda Legran</div>
                        </div>
                        <!--Profile Information End-->

                        <div class="overflow-scroll-y">
                            <!--Wishes Container Start-->
                            <div class="notification-container addAddress">
                                <div class="grey-label font-13">Wishes</div>
                                <div class="grey-label font-helvFTrip Fetica font-weight-light font-13">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Praesent quis velit vitae enim gravida lacinia. Ut at auctor
                                    arcu. Ut eu pellentesque tortor.
                                </div>
                                <div class="border-bottom-primary border-bottom-light-grey">
                                    <div class="status-container status-container-driver"></div>
                                </div>
                            </div>
                            <!--Wishes Container End-->

                            <!--Address Container Start-->
                            <div
                                class="addresses-container position-relative driver-addresses-container hidden border-bottom-primary">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                        <div class="map-input mr-0 display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text"
                                                placeholder="Enter an origin location" value="555 Middlefield Rd"
                                                disabled />
                                        </div>
                                    </div>
                                    <div class="w-100 map-input-container map-input-container-bottom">
                                        <span class="map-input-icon">
                                            <img src="{{ asset('driver-assets/icons/circle.svg') }}"
                                                alt="Current Location Icon" />
                                        </span>
                                        <div class="map-input mr-0 display-flex border-0">
                                            <input class="controls flex-1 font-weight-light" type="text"
                                                placeholder="Enter a destination location" value="Palo Alto" disabled />
                                        </div>
                                        <span class="dotted-line"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Address Container End-->

                            <!--All Trip Fare Items Container Start-->
                            <div class="all-trip-fares hidden">
                                <div class="border-bottom-primary border-bottom-light-grey">
                                    <div class="text-uppercase trip-fare">Trip Fare</div>
                                </div>
                                <div class="trip-fare-container trip-fare-driver font-weight-light">
                                    <!--Trip Fare Item Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Trip Price</span>
                                        <span class="float-right blue-price">$17.89</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fare Item End-->

                                    <!--Trip Fare Item Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance</span>
                                        <span class="float-right blue-price">15.45 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fare Item End-->

                                    <!--Trip Fare Item Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Time Since Departure</span>
                                        <span class="float-right blue-price">1 Hour 25 Minutes</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fare Item End-->
                                </div>
                            </div>
                            <!--All Trip Fare Items Container End-->

                            <div class="drop-off-btn-container hidden">
                                <button type="button" class="btn btn-primary font-weight-light w-100 text-uppercase">
                                    Drop off
                                </button>
                            </div>

                            <div class="finish-ride-btn-container hidden">
                                <a href="index.html"
                                    class="btn btn-finish font-weight-light w-100 text-uppercase">Complete
                                    Trip</a>
                            </div>

                            <!--Pickup Buttons Container Start-->
                            <div class="pickup-btn-container display-flex">
                                <div class="pickup-btn-item">
                                    <button type="button" class="btn btn-dark text-uppercase pick-up">
                                        Pick Up
                                    </button>
                                </div>
                                <div class="pickup-btn-other">
                                    <div class="pickup-btn-item">
                                        <a href="chat.html" class="btn btn-dark text-uppercase">
                                            <span class="fas fa-comments font-20"></span>
                                        </a>
                                    </div>
                                    <div class="pickup-btn-item">
                                        <button type="button" class="approved-icon call text-uppercase">
                                            <span class="fas fa-phone text-white font-20"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--Pickup Buttons Container End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

          @include('components.driver-mobile-app.main-menu')
    </div>
@endsection
