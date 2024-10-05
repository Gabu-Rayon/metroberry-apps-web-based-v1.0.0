@extends('layouts.driver-mobile-app')

@section('title', 'Add New Car')
@section('content')
    <!--Loading Container Start-->
    <div
      id="load"
      class="loading-overlay display-flex flex-column justify-content-center align-items-center"
    >
      <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
      <div class="col-xs-12 col-sm-12">
        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
          <a href="index.html">
            <span class="float-left">
              <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
            </span>
          </a>
          <span>Add New Car</span>
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
                      <img src="{{ asset('mobile-app-assets/icons/photocamera.svg') }}" alt="Camera Icon" />
                    </span>
                  </div>
                </div>
                <input class="scan-prompt" type="file" accept="image/*" />
              </div>
              <div class="upload-picture-buttons-append">
                <span class="float-left position-relative upload-btn">
                  <img src="{{ asset('mobile-app-assets/icons/upload.svg ') }}" alt="Upload Icon" />
                  <input class="scan-prompt" type="file" accept="image/*" />
                </span>
                <span class="float-right delete-btn">
                  <img src="{{ asset('mobile-app-assets/icons/delete.svg ') }}" alt="Delete Icon" />
                </span>
                <span class="clearfix"></span>
              </div>
            </div>
            <!--Upload Car Pictures Container End-->

            <div class="font-awesome-container"></div>

            <!--Car Registration Info Container Start-->
            <div
              class="car-info-container car-info-container-top font-weight-light"
            >
              <div class="card-number">
                <!--Car Registration Field Start-->
                <div class="form-group">
                  <label class="width-100">
                    <span class="label-title">Transport Type</span>
                    <span class="car-info-wrap display-block">
                      <select class="custom-select font-weight-light car-info">
                        <option value="opel">Opel</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="toyota">Toyota</option>
                        <option value="nissan">Nissan</option>
                        <option value="bmw">BMW</option>
                      </select>
                    </span>
                  </label>
                </div>
                <!--Car Registration Field End-->

                <!--Car Registration Field Start-->
                <div class="form-group">
                  <label class="width-100">
                    <span class="label-title">Transport Model</span>
                    <span class="car-info-wrap display-block">
                      <select class="custom-select font-weight-light car-info">
                        <option value="vectra">Vectra</option>
                        <option value="glc">GLC</option>
                        <option value="camri">Camri</option>
                        <option value="altima">Altima</option>
                        <option value="m3">M3</option>
                      </select>
                    </span>
                  </label>
                </div>
                <!--Car Registration Field End-->

                <!--Car Registration Field Start-->
                <div class="form-group">
                  <label class="width-100">
                    <span class="label-title">Color</span>
                    <span class="car-info-wrap display-block">
                      <select class="custom-select font-weight-light car-info">
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="grey">Grey</option>
                        <option value="silver">Silver</option>
                        <option value="blue">Blue</option>
                        <option value="red">Red</option>
                      </select>
                    </span>
                  </label>
                </div>
                <!--Car Registration Field End-->

                <!--Car Registration Two Fields Container Start-->
                <div
                  class="multi-form-container display-flex justify-content-between"
                >
                  <div class="form-group">
                    <label class="width-100">
                      <span class="label-title">Car Registration Number</span>
                      <input
                        class="form-control text-input font-weight-light"
                        type="text"
                        autocomplete="off"
                        name="car-registration-num"
                        value="LG-287-GL"
                      />
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="width-100">
                      <span class="label-title">Fuel Petrol</span>
                      <span class="car-info-wrap display-block">
                        <select
                          class="custom-select font-weight-light car-info"
                        >
                          <option value="petrol">Petrol</option>
                          <option value="diesel">Diesel</option>
                          <option value="gas">Gas</option>
                        </select>
                      </span>
                    </label>
                  </div>
                </div>
                <!--Car Registration Two Fields Container End-->

                <!--Car Registration Two Fields Container Start-->
                <div
                  class="multi-form-container display-flex justify-content-between"
                >
                  <div class="form-group">
                    <label class="width-100 mb-0">
                      <span class="label-title">Date of Manufacture</span>
                    </label>
                    <div class="input-group light-field">
                      <div class="input-group-prepend">
                        <span class="far fa-calendar-alt"></span>
                      </div>
                      <input class="form-control" type="text" name="date" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="width-100 mb-0">
                      <span class="label-title">Date of Registration</span>
                    </label>
                    <div class="input-group light-field">
                      <div class="input-group-prepend">
                        <span class="far fa-calendar-alt"></span>
                      </div>
                      <input class="form-control" type="text" name="date" />
                    </div>
                  </div>
                </div>
                <!--Car Registration Two Fields Container End-->

                <div class="text-center car-registration-container">
                  <h4>
                    Please Upload Car Registration<br />
                    Certificate Below
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
                          <img
                            src="{{ asset('mobile-app-assets/icons/photocamera.svg') }}"
                            alt="Camera Icon"
                          />
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
                      <img src="{{ asset('mobile-app-assets/icons/upload.svg ') }}" alt="Upload Icon" />
                      <input class="scan-prompt" type="file" accept="image/*" />
                    </span>
                    <span>BACK</span>
                    <span class="float-right delete-btn">
                      <img src="{{ asset('mobile-app-assets/icons/delete.svg  ') }}" alt="Delete Icon" />
                    </span>
                    <span class="clearfix"></span>
                  </div>
                  <div class="position-relative">
                    <div class="upload-picture-container mb-0">
                      <div class="upload-camera-container text-center">
                        <span class="camera">
                          <img
                            src="{{ asset('mobile-app-assets/icons/photocamera.svg ') }}"
                            alt="Camera Icon"
                          />
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

     <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection