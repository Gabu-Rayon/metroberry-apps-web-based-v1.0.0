@extends('layouts.driver-mobile-app')

@section('title', 'Metroberry Customer | Add New Card')
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
                <a href="payment-method.html">
                    <span class="float-left">
                        <img src="mobile-app-assets/icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span>Add New Card</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="mobile-app-assets/icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="scan-your-card-container-none">

                    <!--Scan your Card Start-->
                    <div class="scan-your-card-prompt">
                        <div class="position-relative scan-your-card-icon">
                            <div class="float-right mastercard-icon">
                                <img src="mobile-app-assets/icons/mastercard.svg" alt="Mastercard Icon">
                            </div>
                            <img class="img-responsive w-100 photocamera-icon" src="mobile-app-assets/icons/photocamera.svg"
                                alt="Camera Icon">
                            <span class="font-11 text-white font-weight-light">Scan your card</span>
                            <input class="scan-prompt" type="file" accept="image/*">
                        </div>
                    </div>
                    <!--Scan your Card End-->

                    <!--Card Information Field Start-->
                    <div class="card-info-container font-weight-light">
                        <div class="card-number">
                            <div class="form-group">
                                <label class="width-100 label-title">
                                    Card Number
                                    <input class="input-group" type="tel" value="5882 3223 4121 1024">
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--Card Information Field End-->

                    <!--Card Information Field Start-->
                    <div class="card-info-container font-weight-light">
                        <div class="expiration-date-container float-left">
                            <div class="font-weight-light label-title">
                                <span>Expiration Date</span>
                            </div>
                            <div class="display-flex">
                                <div class="card-info position-relative flex-1">
                                    <select class="custom-select font-weight-light">
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="card-info position-relative flex-1 ml-3">
                                    <select class="custom-select font-weight-light">
                                        <option value="2019">19</option>
                                        <option value="2020">20</option>
                                        <option value="2021">21</option>
                                        <option value="2022">22</option>
                                        <option value="2023">23</option>
                                        <option value="2024">24</option>
                                        <option value="2025">25</option>
                                        <option value="2026">26</option>
                                        <option value="2027">27</option>
                                        <option value="2028">28</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="font-weight-light">
                                <span class="label-title">
                                    CVV / CVC
                                </span>
                                <span class="question-cvv fas fa-question-circle float-right"></span>
                            </div>
                            <input class="card-info-cvv font-weight-light" value="456" type="tel" name="cvv"
                                maxlength="5">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--Card Information Field End-->

                    <!--Card Information Field Start-->
                    <div class="card-info-container font-weight-light">
                        <div class="card-number">
                            <div class="form-group">
                                <label class="width-100 label-title">
                                    Card Holder Name
                                    <input class="input-group" type="text" autocomplete="off"
                                        value="Jonathan McBerly" placeholder="Card Holder Name">
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--Card Information Field End-->

                    <div class="btn-save">
                        <a href="credit-cards.html" class="btn btn-primary">Save Card <span
                                class="far fa-save"></span></a>
                    </div>
                </div>
            </div>
        </div>

       <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection