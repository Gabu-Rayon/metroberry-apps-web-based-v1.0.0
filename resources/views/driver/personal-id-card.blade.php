@extends('layouts.driver-mobile-app')

@section('title', 'personal ID Car')
@section('content')

    <body>
        <!--Loading Container Start-->
        <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
            <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
        </div>
        <!--Loading Container End-->

        <div class="row h-100">
            <div class="col-xs-12 col-sm-12">
                <!--Page Title & Icons Start-->
                <div class="header-icons-container text-center">
                    <a href="driver-registration.html">
                        <span class="float-left">
                            <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                        </span>
                    </a>
                    <span>Personal ID Card</span>
                    <a href="#">
                        <span class="float-right menu-open closed">
                            <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                        </span>
                    </a>
                </div>
                <!--Page Title & Icons End-->

                <div class="rest-container">
                    <div class="address-title">Personal ID Card</div>

                    <!--Personal ID Fields Container Start-->
                    <div class="all-container all-container-with-classes">
                        <form class="width-100">
                            <!--Input Field Container Start-->
                            <div class="form-group form-control-margin">
                                <label class="label-title">Personal ID Number</label>
                                <div class="input-group">
                                    <input class="form-control form-control-with-padding" type="text" name="name"
                                        autocomplete="off" placeholder="Personal ID Number" />
                                    <div class="input-group-append">
                                        <span class="fas fa-id-card icon-inherited-color"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Input Field Container End-->

                            <!--Upload Front Start-->
                            <div class="display-flex justify-content-between">
                                <span class="position-relative upload-btn">
                                    <img src="{{ asset('mobile-app-assets/icons/upload.svg') }}" alt="Upload Icon" />
                                    <input class="scan-prompt" type="file" accept="image/*" />
                                </span>
                                <span class="text-uppercase">FRONT</span>
                                <span class="delete-btn">
                                    <img src="{{ asset('mobile-app-assets/icons/delete.svg') }}" alt="Delete Icon" />
                                </span>
                            </div>
                            <div class="scan-your-card-prompt margin-top-5">
                                <div class="position-relative">
                                    <div class="upload-picture-container">
                                        <div class="upload-camera-container text-center">
                                            <span class="camera">
                                                <img src="{{ asset('mobile-app-assets/icons/photocamera.svg') }}" alt="Camera Icon" />
                                            </span>
                                        </div>
                                    </div>
                                    <input class="scan-prompt" type="file" accept="image/*" />
                                </div>
                            </div>
                            <!--Upload Front End-->

                            <!--Upload Back Start-->
                            <div class="display-flex justify-content-between">
                                <span class="position-relative upload-btn">
                                    <img src="{{ asset('mobile-app-assets/icons/upload.svg') }}" alt="Upload Icon" />
                                    <input class="scan-prompt" type="file" accept="image/*" />
                                </span>
                                <span class="text-uppercase">BACK</span>
                                <span class="delete-btn">
                                    <img src="{{ asset('mobile-app-assets/icons/delete.svg') }}" alt="Delete Icon" />
                                </span>
                            </div>
                            <div class="scan-your-card-prompt margin-top-5">
                                <div class="position-relative">
                                    <div class="upload-picture-container">
                                        <div class="upload-camera-container text-center">
                                            <span class="camera">
                                                <img src="{{ asset('mobile-app-assets/icons/photocamera.svg') }}" alt="Camera Icon" />
                                            </span>
                                        </div>
                                    </div>
                                    <input class="scan-prompt" type="file" accept="image/*" />
                                </div>
                            </div>
                            <!--Upload Back End-->
                        </form>
                        <div class="form-submit-button text-center">
                            <a href="driver-registration.html" class="btn btn-dark text-uppercase">Save</a>
                        </div>
                    </div>
                    <!--Personal ID Fields Container End-->
                </div>
            </div>
            <!--Main Menu Start-->
            @include('components.driver-mobile-app.main-menu')
            <!--Main Menu End-->
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @endsection
