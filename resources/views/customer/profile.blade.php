@extends('layouts.driver-mobile-app')

@section('title', 'Profile')
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
                <a href="{{ route('customer.index.page') }}">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon">
                    </span>
                </a>
                <span>Profile</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">

                <!--Profile Information Container Start-->
                <div class="text-center header-icon-logo-margin">
                    <div class="profile-picture-container">
                        <img src="{{ isset($customer->profile_picture) ? asset($customer->profile_picture) : asset('mobile-app-assets/images/avatar.svg') }}"
                            alt="Profile Picture">
                        <span class="fas fa-camera">
                            <input class="file-prompt" type="file" accept="image/*" name="profile_picture">
                        </span>
                    </div>
                    <div class="display-flex flex-column">
                        <span class="profile-name">{{ $customer->user->name }}</span>
                        <span class="profile-email font-weight-light">{{ $customer->user->email }}</span>
                    </div>
                </div>
                <!--Profile Information Container End-->

                <!--Profile Information Fields Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100" method="POST" action="{{ route('customer.profile.update', $customer->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span><img src="{{ asset('mobile-app-assets/icons/phone.svg') }}"
                                            alt="Phone Number"></span>
                                </div>
                                <input class="form-control" type="tel" name="phone"
                                    value="{{ $customer->user->phone }}" placeholder="Mobile Phone Number">
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/avatar-light.svg') }}"
                                            alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off"
                                    value="{{ $customer->user->name }}" name="full-name" placeholder="Full Name">
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/envelope.svg') }}" alt="Envelope Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="email" name="email"
                                    value="{{ $customer->user->email }}" placeholder="Email">
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/marker.svg') }}" alt="Marker Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off"
                                    value="{{ $customer->user->address }}" name="address" placeholder="Address">
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Pickup organisations Field Start-->
                        <div class="form-group">
                            <label class="width-100">
                                <div class="input-group-prepend">
                                    <span>
                                        <span class="label-title">Select Organisation</span>
                                    </span>
                                </div>
                                <span class="car-info-wrap display-block">
                                    <select name="organisation" class="custom-select font-weight-light car-info"
                                        id="organisation" required>
                                        <option value="" readonly>Select Organisation</option>
                                        @foreach ($organisations as $organisation)
                                            <option value="{{ $organisation->id }}"
                                                {{ $customer->organisation_id == $organisation->id ? 'selected' : '' }}>
                                                {{ $organisation->user->name }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </label>
                        </div>
                        <!--Pickup organisations Field End-->

                        <!--National ID No Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="{{ asset('mobile-app-assets/icons/marker.svg') }}" alt="Marker Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off"
                                    value="{{ $customer->national_id_no }}" name="national_id_no"
                                    placeholder="National ID No">
                            </div>
                        </div>
                        <!--National ID No Field Container End-->

                        <!--National ID Front Avatar Field Container Start-->
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span>
                                    <span class="label-title">National Id Avatar Front</span>
                                </span>
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="file" name="national_id_front_avatar"
                                    accept="image/*">
                            </div>
                        </div>
                        <!--National ID Front Avatar Field Container End-->

                        <!--National ID Behind Avatar Field Container Start-->
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span>
                                    <span class="label-title">National Id Avatar Behind</span>
                                </span>
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="file" name="national_id_behind_avatar"
                                    accept="image/*">
                            </div>
                        </div>
                        <!--National ID Behind Avatar Field Container End-->

                        <div class="form-submit-button">
                            <button type="submit" class="btn btn-dark text-uppercase">Save <span
                                    class="far fa-save margin-left-10"></span></button>
                        </div>
                    </form>
                </div>
                <!--Profile Information Fields Container End-->
            </div>
        </div>

        <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
