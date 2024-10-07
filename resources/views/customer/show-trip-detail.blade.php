@extends('layouts.driver-mobile-app')

@section('title', 'Trip Details | Customer')

@section('content')
    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
        <div class="col-xs-12 col-sm-12 remaining-height">

            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <span class="title">Trip Details</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="all-history-items remaining-height">
                    <!-- Check if the trip exists -->
                    @if (is_null($trip))
                        <div class="text-center">
                            <p>No trip details found.</p>
                        @else
                            <div class="history-items-container history-items-padding">
                                <div class="history-item">

                                    <!--Date and Price Container Start-->
                                    <div class="border-bottom-primary thin">
                                        <div class="status-container">
                                            <div class="date float-left">
                                                Date : {{ \Carbon\Carbon::parse($trip->trip_date)->format('d M Y') }},
                                                @if ($customer->time_format === '12-hour')
                                                    Time : {{ \Carbon\Carbon::parse($trip->pick_up_time)->format('h:i A') }}
                                                    <!-- 12-hour format -->
                                                @else
                                                    Time : {{ \Carbon\Carbon::parse($trip->pick_up_time)->format('H:i') }}
                                                    <!-- 24-hour format -->
                                                @endif
                                            </div>
                                            <div class="status-none float-right text-uppercase">
                                                Charges : Kes {{ number_format($trip->total_price, 2) }}
                                                <!-- Format charges -->
                                            </div>
                                            <div class="status-none float-right text-uppercase">
                                                @php
                                                    $statusColors = [
                                                        'scheduled' => 'text-success',
                                                        'completed' => 'text-primary',
                                                        'billed' => 'text-warning',
                                                        'paid' => 'text-info',
                                                        'partially paid' => 'text-muted',
                                                        'assigned' => 'text-secondary',
                                                        'cancelled' => 'text-danger',
                                                    ];
                                                    $statusClass = $statusColors[$trip->status] ?? 'text-dark';
                                                @endphp
                                                Status : <span class="{{ $statusClass }}">{{ $trip->status }}</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!--Date and Price Container End-->

                                    <!--Trips Details Address Container Start-->
                                    <div class="addresses-container position-relative">
                                        <div class="height-auto">
                                            <div class="">

                                                <div class="map-input display-flex">
                                                    Driver : {{ $trip->driver->user->name ?? null }}
                                                </div>
                                            </div>
                                            <div class="">

                                                <div class="map-input display-flex">
                                                    Driver License : {{ $trip->driver->license ?? null }}
                                                </div>
                                            </div>
                                            <div class="">

                                                <div class="map-input display-flex">
                                                    Driver PSV : {{ $trip->driver->psvBadge ?? null }}
                                                </div>
                                            </div>
                                            <div class="">

                                                <div class="map-input display-flex">
                                                    vehicle : {{ $trip->vehicle->plate_number ?? null }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Trip Details Address Container End-->

                                    <!--Trips Details Address Container Start-->
                                    <div class="addresses-container position-relative">
                                        <div class="height-auto">
                                            <div class="w-100 map-input-container map-input-container-top">
                                                <span
                                                    class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                                <div class="map-input display-flex">
                                                    <input class="controls flex-1 font-weight-light" type="text"
                                                        placeholder="Enter an origin location"
                                                        value="{{ $trip->drop_off_location }}" disabled>
                                                </div>
                                            </div>
                                            <a href="{{ route('customer.trip.show', $trip->id) }}"
                                                class="href-decoration-none">
                                                <div class="w-100 map-input-container map-input-container-bottom">
                                                    <span class="map-input-icon"><img
                                                            src="{{ asset('mobile-app-assets/icons/circle.svg') }}"
                                                            alt="Current Location Icon"></span>
                                                    <div class="map-input display-flex controls flex-1 align-items-center">
                                                        {{ $trip->pick_up_location }}
                                                    </div>
                                                    <span class="dotted-line"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--Trip Details Address Container End-->

                                    <!--Trip Cancel Button Start-->
                                    @if ($trip->status !== 'cancelled')
                                        <div class="p-2">
                                            <!-- This form is for the user to cancel the trip -->
                                            <form action="{{ route('customer.trip.cancel', $trip->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-primary text-uppercase">Cancel
                                                    Trip</button>
                                            </form>
                                        </div>
                                    @endif
                                    <!--Trip Cancel Button End-->
                                </div>
                            </div>
                    @endif
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
