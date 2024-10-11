@extends('layouts.driver-mobile-app')

@section('title', 'Vehicle Status | Driver')

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
                    <span>Vehicle | {{ $driver->status == 'inactive' ? 'Inactive' : 'Active' }}</span>

                    <a href="#">
                        <span class="float-right menu-open closed">
                            <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                        </span>
                    </a>
            </div>

            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="scan-your-card-container-none">
                    <div class="clearfix"></div>

                    <!--Upload Car Pictures Container Start-->
                    <div class="scan-your-card-prompt">
                        <div class="position-relative">
                            <div class="upload-picture-container mb-0">
                                <div class="upload-camera-container text-center">
                                    <span class="camera">
                                        <img src="{{ asset('mobile-app-assets/icons/photocamera.svg') }}"
                                            alt="Camera Icon" />
                                    </span>
                                </div>
                            </div>
                            <input class="scan-prompt" type="file" accept="image/*" />
                        </div>
                        <div class="upload-picture-buttons-append">
                            <span class="float-left position-relative upload-btn">
                                <img src="{{ asset('mobile-app-assets/icons/upload.svg') }}" alt="Upload Icon" />
                                <input class="scan-prompt" type="file" accept="image/*" />
                            </span>
                            <span class="float-right delete-btn">
                                <img src="{{ asset('mobile-app-assets/icons/delete.svg') }}" alt="Delete Icon" />
                            </span>
                            <span class="clearfix"></span>
                        </div>
                    </div>
                    <!--Upload Car Pictures Container End-->

                    <div class="font-awesome-container"></div>

                    <!--Car Registration Info Container Start-->
                    <div class="car-info-container car-info-container-top font-weight-light">
                        <div class="card-number">
                            <!--Car Registration Two Fields Container Start-->
                            <div class="multi-form-container display-flex justify-content-between">
                                <!--Car Registration Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Current Organisation</span>
                                        <span class="car-info-wrap display-block">
                                            <select class="custom-select font-weight-light car-info" name="organisation_id">
                                                @foreach ($organisations as $organisation)
                                                    <option value="{{ $organisation->id }}"
                                                        {{ $driver->vehicle->organisation_id == $organisation->id ? 'selected' : '' }}>
                                                        {{ $organisation->user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <!--Car Registration Field End-->

                                <!--Car Registration Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Current Vehicle Class</span>
                                        <span class="car-info-wrap display-block">
                                            <select class="custom-select font-weight-light car-info"
                                                name="vehicle_class_id">
                                                @foreach ($vehicleClasses as $vehicleClass)
                                                    <option value="{{ $vehicleClass->id }}"
                                                        {{ $driver->vehicle->class_id == $vehicleClass->id ? 'selected' : '' }}>
                                                        {{ $vehicleClass->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!--Car Registration Field End-->
                            <!--Car Registration Two Fields Container Start-->
                            <div class="multi-form-container display-flex justify-content-between">
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Car Registration Number</span>
                                        <input class="form-control text-input font-weight-light" type="text"
                                            autocomplete="off" name="car-registration-num"
                                            value="{{ $driver->vehicle->plate_number }}" />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title"> Fuel Type</span>
                                        <input class="form-control text-input font-weight-light" type="text"
                                            autocomplete="off" name="car-registration-num"
                                            value="{{ $driver->vehicle->fuel_type }}" />
                                    </label>
                                </div>
                            </div>
                            <!--Car Registration Two Fields Container End-->

                            <!--Car Registration Two Fields Container Start-->
                            <div class="multi-form-container display-flex justify-content-between">
                                <div class="form-group">
                                    <label class="width-100 mb-0">
                                        <span class="label-title">Date of Manufacture</span>
                                    </label>
                                    <div class="input-group light-field">
                                        <div class="input-group-prepend">
                                            <span class="far fa-calendar-alt"></span>
                                        </div>
                                        <input class="form-control" type="text" name="year"
                                            value="{{ $driver->vehicle->year }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="width-100 mb-0">
                                        <span class="label-title">Engine Size</span>
                                    </label>
                                    <div class="input-group light-field">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input class="form-control" type="number" name="engine_size"
                                            value="{{ $driver->vehicle->engine_size }}" />
                                    </div>
                                </div>

                            </div>
                            <!--Car Registration Two Fields Container Start-->
                            <div class="multi-form-container display-flex justify-content-between">
                                <div class="form-group">
                                    <label class="width-100 mb-0">
                                        <span class="label-title">Manufacture</span>
                                    </label>
                                    <div class="input-group light-field">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input class="form-control" type="text" name="make"
                                            value="{{ $driver->vehicle->make }}" />
                                    </div>
                                </div>
                                <!--Car Registration Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title"> Fuel Type</span>
                                        <input class="form-control text-input font-weight-light" type="text"
                                            autocomplete="off" name="car-registration-num"
                                            value="{{ $driver->vehicle->fuel_type }}" />
                                    </label>
                                </div>
                                <!--Car Registration Field End-->
                            </div>
                            <!--Car Registration Two Fields Container End-->

                            <div class="text-center car-registration-container">
                                <h4>
                                    Please Upload Car<br />
                                    Registration Log Book.
                                </h4>
                            </div>

                            <!--Car Registration ID Upload Container Start-->
                            <div class="scan-your-card-prompt">
                                <div class="upload-picture-buttons-prepend text-center">
                                    <span class="float-left position-relative upload-btn">
                                        <img src="{{ asset('mobile-app-assets/icons/upload.svg') }}" alt="Upload Icon" />
                                        <input class="scan-prompt" type="file" accept="image/*" />
                                    </span>
                                    <span>FRONT</span>
                                    <span class="float-right delete-btn">
                                        <img src="{{ asset('mobile-app-assets/icons/delete.svg') }}" alt="Delete Icon" />
                                    </span>
                                    <span class="clearfix"></span>
                                </div>
                                <div class="position-relative">
                                    <div class="upload-picture-container mb-0">
                                        <div class="upload-camera-container text-center">
                                            <span class="camera">
                                                <img src="{{ asset('mobile-app-assets/icons/photocamera.svg') }}"
                                                    alt="Camera Icon" />
                                            </span>
                                        </div>
                                    </div>
                                    <input class="scan-prompt" type="file" accept="image/*" />
                                </div>
                            </div>
                            <!--Car Registration ID Upload Container End-->

                            <!--Car Registration ID Upload Container Start-->
                            <div class="scan-your-card-prompt">
                                <div class="upload-picture-buttons-prepend text-center">
                                    <span class="float-left position-relative upload-btn">
                                        <img src="{{ asset('mobile-app-assets/icons/upload.svg') }}" alt="Upload Icon" />
                                        <input class="scan-prompt" type="file" accept="image/*" />
                                    </span>
                                    <span>BACK</span>
                                    <span class="float-right delete-btn">
                                        <img src="{{ asset('mobile-app-assets/icons/delete.svg') }}" alt="Delete Icon" />
                                    </span>
                                    <span class="clearfix"></span>
                                </div>
                                <div class="position-relative">
                                    <div class="upload-picture-container mb-0">
                                        <div class="upload-camera-container text-center">
                                            <span class="camera">
                                                <img src="{{ asset('mobile-app-assets/icons/photocamera.svg') }}"
                                                    alt="Camera Icon" />
                                            </span>
                                        </div>
                                    </div>
                                    <input class="scan-prompt" type="file" accept="image/*" />
                                </div>
                            </div>
                            <!--Car Registration ID Upload Container End-->
                        </div>
                    </div>
                    <!--Car Registration Info Container End-->

                    <div class="register">
                        <button class="btn btn-dark" type="button">Apply</button>
                    </div>
                </div>
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
