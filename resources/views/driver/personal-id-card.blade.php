@extends('layouts.mobile-app')

@section('title', 'Personal ID| Driver')
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
        <div class="col-xs-12 col-sm-12">
            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <a href="{{ route('driver.registration.page') }}">
                    <span class="float-left">
                        <img src=" {{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                    </span>
                </a>
                @if ($driver->status == 'inactive')
                    <span>Deactivated</span>
                @else
                    <span>Persona ID</span>
                @endif
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src=" {{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="address-title">Personal ID</div>

                <!--Driver's License Fields Container Start-->
                <div class="all-container all-container-with-classes">
                    <form class="width-100" action="{{ route('personal.id.card.document.update', $driver->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--Input Field Container Start-->
                        <div class="form-group form-control-margin">
                            <label class="label-title">Personal ID</label>
                            <div class="input-group">
                                <input class="form-control form-control-with-padding" type="text" name="name"
                                    autocomplete="off" placeholder="Driver License Number"
                                    value="{{ $driver->national_id_no }}" />
                                <div class="input-group-append">
                                    <span class="fas fa-id-card icon-inherited-color"></span>
                                </div>
                            </div>
                        </div>
                        <!--Input Field Container End-->

                        <!--Upload Front Start-->
                        <div class="display-flex justify-content-between">
                            <span class="position-relative upload-btn">
                                <img src=" {{ asset('mobile-app-assets/icons/upload.svg') }}" alt="Upload Icon" />
                                <input class="scan-prompt" type="file" accept="image/*" name="national_id_front_avatar" />
                            </span>
                            <span class="text-uppercase">FRONT</span>
                            <span class="delete-btn">
                                <img src=" {{ asset('mobile-app-assets/icons/delete.svg') }}" alt="Delete Icon" />
                            </span>
                        </div>
                        <div class="scan-your-card-prompt margin-top-5">
                            <div class="position-relative">
                                <div class="upload-picture-container">
                                    <div class="upload-camera-container text-center">
                                        <span class="#">
                                            {{-- <img src="mobile-app-assets/icons/photocamera.svg" alt="Camera Icon" /> --}}
                                            <img src="{{ asset('storage/' . $driver->national_id_front_avatar) }}"
                                                alt="National ID Back" class="img-fluid">
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
                                <img src=" {{ asset('mobile-app-assets/icons/upload.svg') }}" alt="Upload Icon" />
                                <input class="scan-prompt" type="file" accept="image/*"   name="national_id_behind_avatar"/>
                            </span>
                            <span class="text-uppercase">BACK</span>
                            <span class="delete-btn">
                                <img src=" {{ asset('mobile-app-assets/icons/delete.svg') }}" alt="Delete Icon" />
                            </span>
                        </div>
                        <div class="scan-your-card-prompt margin-top-5">
                            <div class="position-relative">
                                <div class="upload-picture-container">
                                    <div class="upload-camera-container text-center">
                                        <span class="#">
                                            {{-- <img src="mobile-app-assets/icons/photocamera.svg" alt="Camera Icon" /> --}}
                                            <img src="{{ asset('storage/' . $driver->national_id_behind_avatar) }}"
                                                alt="National ID Back" class="img-fluid">
                                        </span>
                                    </div>
                                </div>
                                <input class="scan-prompt" type="file" accept="image/*" />
                            </div>
                        </div>
                        <!--Upload Front End-->

                        <div class="form-submit-button text-center">
                            <button type="submit" class="btn btn-dark text-uppercase">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
                <!--Driver's License Fields Container End-->
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
