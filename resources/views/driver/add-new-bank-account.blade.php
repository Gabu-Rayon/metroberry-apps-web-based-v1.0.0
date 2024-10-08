@extends('layouts.driver-mobile-app')

@section('title', 'Add New Bank Account | Driver')
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
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                    </span>
                </a>
                <span>Add New Bank Account</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-bottom">
                    <div class="profile-picture-container">
                        <img src="{{ asset('mobile-app-assets/images/bank.svg') }}" alt="Bank" />
                    </div>
                    <div class="text-info-margin">
                        Add Tour Bank Account<br />
                        Information
                    </div>
                </div>

                <!--Bank Information fields Container Start-->
                <div class="all-container-with-classes all-container">
                    <form class="width-100">
                        <!--Bank Information Input Field Start-->
                        <div class="form-group">
                            <label class="label-title font-roboto">Name of Beneficiary</label>
                            <div class="input-group">
                                <input class="form-control form-control-with-padding font-weight-light" type="text"
                                    autocomplete="off" name="name" value="Jonathan McBerly"
                                    placeholder="Beneficiary Name" />
                            </div>
                        </div>
                        <!--Bank Information Input Field End-->

                        <!--Bank Information Input Field Start-->
                        <div class="form-group">
                            <label class="label-title font-roboto">Bank Name</label>
                            <div class="input-group">
                                <input class="form-control form-control-with-padding font-weight-light" type="text"
                                    autocomplete="off" name="bank_name" value="CARTUBANK" placeholder="Bank Of Amerifca" />
                            </div>
                        </div>
                        <!--Bank Information Input Field End-->

                        <!--Bank Information Input Field Start-->
                        <div class="form-group">
                            <label class="label-title font-roboto">Account Number (IBAN)</label>
                            <div class="input-group">
                                <input class="form-control form-control-with-padding font-weight-light" type="text"
                                    autocomplete="off" name="account_num" value="GD345DW20000091201"
                                    placeholder="123321567987" />
                            </div>
                        </div>
                        <!--Bank Information Input Field End-->

                        <!--Bank Information Input Field Start-->
                        <div class="form-group">
                            <label class="label-title font-roboto">SWIFT</label>
                            <div class="input-group">
                                <input class="form-control form-control-with-padding font-weight-light" type="text"
                                    autocomplete="off" name="swift" value="CARTU 33GEO" placeholder="Swift Code" />
                            </div>
                        </div>
                        <!--Bank Information Input Field End-->
                    </form>
                </div>
                <!--Bank Information fields Container End-->

                <div class="all-container all-container-with-classes">
                    <div class="form-control-margin text-center">
                        <a href="payment-method.html" class="btn btn-dark text-uppercase">Save <span
                                class="far fa-save"></span></a>
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
