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
                        <span class="profile-name">{{ $driver->user->name }}</span>
                        <span class="profile-email font-weight-light">{{ $driver->user->email }}</span>
                    </div>
                </div>

                <div class="sign-up-form-container text-center">
                    <form class="width-100" action="{{ route('driver.profile.update', $driver->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-user"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="name"
                                    placeholder="Name" value="{{ $driver->user->name }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="email" autocomplete="off" name="email"
                                    placeholder="Personal Id Number" value="{{ $driver->user->email }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="phone"
                                    placeholder="Phone" value="{{ $driver->user->phone }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-map-marker"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="address"
                                    placeholder="Address" value="{{ $driver->user->address }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-id-card"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="national_id_no"
                                    placeholder="Address" value="{{ $driver->national_id_no }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="national_id_front_avatar">Front Page of National ID</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-id-card"></i>
                                    </span>
                                </div>

                                <input class="form-control" type="file" autocomplete="off"
                                    name="national_id_front_avatar" placeholder="Front Page of National ID" />

                                <a href="{{ asset('storage/' . $driver->national_id_front_avatar) }}"
                                    class="btn btn-light">
                                    Download
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="national_id_behind_avatar">Back Page of National ID</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-id-card"></i>
                                    </span>
                                </div>

                                <input class="form-control" type="file" autocomplete="off"
                                    name="national_id_behind_avatar" placeholder="Back Page of National ID" />

                                <a href="{{ asset('storage/' . $driver->national_id_behind_avatar) }}"
                                    class="btn btn-light">
                                    Download
                                </a>
                            </div>
                        </div>

                        <div class="form-submit-button text-center">
                            <button type="submit" class="btn btn-dark text-uppercase">
                                Update
                            </button>
                        </div>
                    </form>
                </div>

                <div class="sign-up-form-container text-center">
                    <form class="width-100" action="{{ route('driver.password.update', $driver->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="current_password"
                                    placeholder="Current Password" />
                            </div>
                        </div>

                        <div class="form-group margin-top-20">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="password"
                                    placeholder="New Password" />
                            </div>

                            <div class="form-submit-button text-center">
                                <button type="submit" class="btn btn-dark text-uppercase">
                                    Change Password
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

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

        @include('components.driver-mobile-app.main-menu')
    </div>
@endsection
