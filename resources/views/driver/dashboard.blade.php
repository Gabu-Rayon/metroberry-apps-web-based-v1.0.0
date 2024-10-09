@extends('layouts.driver-mobile-app')

@section('title', 'Metroberry | Driver HomePage')
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
        <div class="col-xs-12 col-sm-12 remaining-height">
            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <span class="float-left back-to-map hidden">
                    <img src=" {{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                </span>
                @if ($driver->status == 'inactive')
                    <span class="title">Inactive</span>
                @else
                    <span class="title">Active</span>
                @endif
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src=" {{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <!--All Notifications & Status Container Start-->
             <div class="change-request-status">
                @if ($driver->status == 'inactive')
                    <div
                        class="request-notification-container map-notification offline-notification map-notification-warning">
                        Your account is inactive
                        <div class="font-weight-light">Contact your administrator</div>
                    </div>
                @else
                    @if (!$driver->national_id_front_avatar || !$driver->national_id_behind_avatar)
                        <div
                            class="request-notification-container map-notification meters-left-450 map-notification-warning">
                            <span class="font-weight-dark m-3 my-3">
                                Kindly upload your national ID pictures
                            </span>
                            <form action="{{ route('driver.personal-documents') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="national_id_front_avatar" class="form-label">National ID Front
                                        Picture</label>
                                    <input type="file" id="national_id_front_avatar" name="national_id_front_avatar"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="national_id_back_avatar" class="form-label">National ID Back Picture</label>
                                    <input type="file" id="national_id_back_avatar" name="national_id_back_avatar"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary w-50 m-2 float-end text-uppercase">
                                    Submit
                                </button>
                            </form>
                        </div>
                    @else
                        <div
                            class="request-notification-container map-notification offline-notification map-notification-warning">
                            National ID is valid
                        </div>
                    @endif

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
                            <span class="font-weight-dark m-3 my-3">
                                Kindly upload your Driver's License
                            </span>
                            <form action="{{ route('driver.license') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="driving_license_no" class="form-label">License No.</label>
                                    <input type="text" id="driving_license_no" name="driving_license_no"
                                        class="form-control" required>
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
                                    <label for="license_front_avatar" class="form-label">License Front Picture</label>
                                    <input type="file" id="license_front_avatar" name="license_front_avatar" required>
                                </div>
                                <div class="mb-3">
                                    <label for="license_back_avatar" class="form-label">License Back Picture</label>
                                    <input type="file" id="license_back_avatar" name="license_back_avatar" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-50 m-2 float-end text-uppercase">
                                    Submit
                                </button>
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
                            <span class="font-weight-dark m-3 my-3">
                                Kindly upload your PSV Badge
                            </span>
                            <form action="{{ route('driver.psvbadge') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="psv_badge_no" class="form-label">Badge No.</label>
                                    <input type="text" id="psv_badge_no" name="psv_badge_no" class="form-control"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="psv_issue_date" class="form-label">Issue Date</label>
                                    <input type="date" id="psv_issue_date" name="psv_issue_date" class="form-control"
                                        required>
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
                                <button type="submit" class="btn btn-primary w-50 m-2 float-end text-uppercase">
                                    Submit
                                </button>
                            </form>
                        </div>
                    @endif

                    @if (!$driver->vehicle)
                        <div
                            class="request-notification-container map-notification offline-notification map-notification-warning">
                            You have not been assigned a vehicle
                            <div class="font-weight-light">Contact your administrator</div>
                        </div>
                    @endif
                @endif
            </div>
        </div>

        <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>

    <!--Terms And Conditions Agreement Container Start-->
    <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
        <div class="container-sms-rate-text width-100 font-11">
            <span class="light-gray font-weight-light">
            </span>
            <br />
            <a href="#" class="dark-link">
                <span class="font-weight-light">Metroberry Tours & Travel</span>
            </a>
        </div>
    </div>
    <!--Terms And Conditions Agreement Container End-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
