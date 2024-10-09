@extends('layouts.driver-mobile-app')

@section('title', 'Trips Completed | Driver')

@section('content')
    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">

        @php
            $user = Auth::user();
            $driver = $user->driver;
        @endphp
        @php
            $user = Auth::user();
            $driver = $user->driver;
        @endphp
        <div class="col-xs-12 col-sm-12 remaining-height">

            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <a href="{{ route('driver.dashboard') }}">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                    </span>
                </a>
                <span class="title"> Trips | Completed</span>

                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="all-history-items remaining-height">
                    <div class="change-request-status">
                        @if ($driver->status == 'inactive')
                            <div
                                class="request-notification-container map-notification offline-notification map-notification-warning">
                                Your account is inactive
                                <div class="font-weight-light">Contact your administrator</div>
                            </div>
                        @else
                            @if (!$driver->driverLicense?->verified && !$driver->psvBadge?->verified)
                                <div
                                    class="request-notification-container map-notification offline-notification map-notification-warning">
                                    <h5>Some of your documents are invalid.</h5>
                                    <div class="font-weight-light">Contact your administrator</div>
                                </div>
                            @else
                                @if ($driver->driverLicense)
                                    @if (!$driver->driverLicense->verified)
                                        <div
                                            class="request-notification-container map-notification offline-notification map-notification-warning">
                                            Your license has not been verified.
                                            <div class="font-weight-light">Contact your administrator</div>
                                        </div>
                                    @else
                                        <div
                                            class="request-notification-container map-notification offline-notification map-notification-warning">
                                            Your license has been verified.
                                        </div>
                                    @endif
                                @else
                                    <div
                                        class="request-notification-container map-notification meters-left-450 map-notification-warning">
                                        <span class="font-weight-dark m-3 my-3">Kindly upload your Driver's License</span>
                                        <form action="{{ route('driver.license') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="driving_license_no" class="form-label">License No.</label>
                                                <input type="text" id="driving_license_no" name="driving_license_no"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="issue_date" class="form-label">Issue Date</label>
                                                <input type="date" id="issue_date" name="issue_date" class="form-control"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                                <input type="date" id="expiry_date" name="expiry_date"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="license_front_avatar" class="form-label">License Front
                                                    Picture</label>
                                                <input type="file" id="license_front_avatar" name="license_front_avatar"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="license_back_avatar" class="form-label">License Back
                                                    Picture</label>
                                                <input type="file" id="license_back_avatar" name="license_back_avatar"
                                                    required>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary w-50 m-2 float-end text-uppercase">Submit</button>
                                        </form>
                                    </div>
                                @endif

                                @if ($driver->psvBadge)
                                    @if (!$driver->psvBadge->verified)
                                        <div
                                            class="request-notification-container map-notification offline-notification map-notification-warning">
                                            Your PSV Badge has not been verified.
                                            <div class="font-weight-light">Contact your administrator</div>
                                        </div>
                                    @else
                                        <div
                                            class="request-notification-container map-notification offline-notification map-notification-warning">
                                            Your PSV Badge has been verified.
                                        </div>
                                    @endif
                                @else
                                    <div
                                        class="request-notification-container map-notification meters-left-450 map-notification-warning">
                                        <span class="font-weight-dark m-3 my-3">Kindly upload your PSV Badge</span>
                                        <form action="{{ route('driver.psvbadge') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="psv_badge_no" class="form-label">Badge No.</label>
                                                <input type="text" id="psv_badge_no" name="psv_badge_no"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="psv_issue_date" class="form-label">Issue Date</label>
                                                <input type="date" id="psv_issue_date" name="psv_issue_date"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="psv_expiry_date" class="form-label">Expiry Date</label>
                                                <input type="date" id="psv_expiry_date" name="psv_expiry_date"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="badge_copy" class="form-label">Copy</label>
                                                <input type="file" id="badge_copy" name="badge_copy" required>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary w-50 m-2 float-end text-uppercase">Submit</button>
                                        </form>
                                    </div>
                                @endif

                                <!-- Trips Completed -->
                                <div
                                    class="request-notification-container map-notification meters-left-450 map-notification-warning">
                                    <h3>Completed Trips</h3>
                                    @if ($trips->isEmpty())
                                        <p>No completed trips found.</p>
                                    @else
                                        <ul>
                                            @foreach ($trips as $trip)
                                                <p>
                                                         Date: {{ $trip->trip_date }}, 
                                                         Distance: {{ $trip->distance }} km
                                                </p>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <!-- End of Trips Completed -->
                            @endif
                        @endif
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
