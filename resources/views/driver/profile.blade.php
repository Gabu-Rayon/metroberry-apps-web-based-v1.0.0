@extends('layouts.driver-mobile-app')

@section('title', 'Profile | Driver')
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
                <a href="{{ route('driver.dashboard') }}">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                    </span>
                </a>
                <span>Profile</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <!--Profile Information Container Start-->
                <div class="text-center header-icon-logo-margin">
                    <div class="profile-picture-container">
                        <img src="{{ asset('mobile-app-assets/images/avatar.svg') }}" alt="Profile Picture" />
                        <span class="fas fa-camera">
                            <input class="file-prompt" type="file" accept="image/*" />
                        </span>
                    </div>
                    <div class="display-flex flex-column">
                        <span class="profile-name">Jonathan McBerly</span>
                        <span class="profile-email font-weight-light">lorem@loremipsum.com</span>
                    </div>
                </div>
                <!--Profile Information Container End-->

                <!--Profile Information Fields Container Start-->
                <div class="sign-up-form-container text-center">
                     <form class="width-100" action="{{ route('driver.profile.update', $driver->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/avatar-light.svg') }}" alt="Avatar Icon" />
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="full-name"
                                    placeholder="Full Name"  value="{{ $driver->user->name }}"/>
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/personal-id.svg') }}" alt="ID Card Icon" />
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="id-number"
                                    placeholder="Personal Id Number"  value="{{ $driver->national_id_no }}" />
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        {{-- <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/calendar.svg') }}" alt="Calendar Icon"
                                            class="profile-calendar-icon" />
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="dob"
                                    placeholder="Date of Birth"   value="{{ $driver->user->dob ?? null }}" />
                            </div>
                        </div> --}}
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/phone.svg') }}" alt="Phone Number" />
                                    </span>
                                </div>
                                <input class="form-control" type="text" name="phone"
                                    placeholder="Mobile Phone Number"  value="{{ $driver->user->phone }}" />
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/envelope.svg') }}" alt="Envelope Icon" />
                                    </span>
                                </div>
                                <input class="form-control" type="email" name="email" placeholder="Email"    value="{{ $driver->user->email }}" />
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                         <div class="form-submit-button text-center">
                            <button type="submit" class="btn btn-dark text-uppercase">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
                <!--Profile Information Fields Container End-->
            </div>
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

       <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
