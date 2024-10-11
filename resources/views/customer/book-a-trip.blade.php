@extends('layouts.mobile-app')

@section('title', 'Book A Trip | Customer')
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
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                    </span>
                </a>
                <span>Book A Trip</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->
            <div class="rest-container">
                <form action="{{ route('customer.book.trip.store') }}" method="POST" class="needs-validation modal-content"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="scan-your-card-container-none">
                        <div class="clearfix"></div>
                        <div class="font-awesome-container"></div>
                        <!--Customer Booking Trip Info Container Start-->
                        <div class="car-info-container car-info-container-top font-weight-light">
                            <div class="card-number">
                                {{-- Customer_id --}}
                                {{-- @if (isset($customer))
                                    <p>Customer ID: {{ $customer->id }}</p>
                                @else
                                    <p>Customer details not found.</p>
                                @endif --}}

                                <!--Route Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        {{-- <span class="label-title">Customer id</span> --}}
                                        <span class="car-info-wrap display-block">
                                            <input name="customer_id" class="form-control" type="hidden" id="customer_id"
                                                value="{{ isset($customer) ? $customer->id : '' }}" required>

                                        </span>
                                    </label>
                                </div>
                                <!--Route Field End-->



                                <!--Route Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Route</span>
                                        <span class="car-info-wrap display-block">
                                            @if (isset($routes))
                                                <select class="custom-select font-weight-light preferred_route_id"
                                                    name="preferred_route_id" id="preferred_route_id"
                                                    data-url="{{ route('route.location.waypoints') }}" required>
                                                    @foreach ($routes as $routeData)
                                                        <option value="{{ $routeData->id }}">{{ $routeData->name }}</option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <p>Routes variable is not defined.</p>
                                            @endif

                                        </span>
                                    </label>
                                </div>
                                <!--Route Field End-->

                                <!--Pickup location Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Pick Up Location</span>
                                        <span class="car-info-wrap display-block">
                                            <select name="pick_up_location" class="custom-select font-weight-light car-info"
                                                id="pick_up_location" required>
                                                <option value="" readonly>Select Location</option>
                                                <option value="Home">Home</option>
                                                <option value="Office">Office</option>
                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <!--pick up locationn Field End-->

                                <!--Drop oFF LOCATION Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Drop Off Location</span>
                                        <span class="car-info-wrap display-block">
                                            <select name="drop_off_location"
                                                class="custom-select font-weight-light car-info select2"
                                                id="drop_off_location" required>
                                                <option value="" readonly>Select Your preference Drop Off Location
                                                </option>
                                                <option value="Home">Home</option>
                                                <option value="Office">Office</option>
                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <!--PICK UP lOCATION Field End-->
                                <!--dROP oFF time Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Pick Up Time</span>
                                        <span class="car-info-wrap display-block">
                                            <input name="pickup_time" class="form-control" type="time" id="pickup_time"
                                                value="{{ old('pickup_time') }}" required>
                                        </span>
                                    </label>
                                </div>
                                <!--pick up time Field End-->
                                <!--tip date Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Trip Date</span>
                                        <span class="car-info-wrap display-block">
                                            <input name="trip_date" class="form-control" type="date" id="trip_date"
                                                required value="{{ old('trip_date') }}">
                                        </span>
                                    </label>
                                </div>
                                <!--trip date Field End-->
                            </div>
                        </div>
                        <!--Customer booking Info Container End-->
                        <div class="register">
                            <button class="btn btn-dark" type="submit">Book now</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <!--Main Menu Start-->
        @include('components.customer-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    @push('scripts')
        <script>
            $(document).ready(function() {
                var pickUpLocationSelect = $('#pick_up_location');
                var dropOffLocationSelect = $('#drop_off_location');
                var preferredRouteSelect = $('.preferred_route_id');

                // Function to disable the same option in another select
                function disableSameOption(select1, select2) {
                    $(select1).on('change', function() {
                        var selectedValue = $(this).val();
                        $(select2).find('option').each(function() {
                            if ($(this).val() === selectedValue) {
                                $(this).prop('disabled', true);
                            } else {
                                $(this).prop('disabled', false);
                            }
                        });
                    });
                    $(select1).trigger('change'); // Trigger change event to initialize
                }

                disableSameOption(pickUpLocationSelect, dropOffLocationSelect);
                disableSameOption(dropOffLocationSelect, pickUpLocationSelect);

                // Function to populate locations based on selected route
                function populateLocations(routeId) {
                    var url = preferredRouteSelect.data('url');
                    var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token

                    $.ajax({
                        url: url,
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Set CSRF token in request header
                        },
                        data: {
                            route_id: routeId
                        },
                        success: function(data) {
                            dropOffLocationSelect.empty();
                            pickUpLocationSelect.empty();

                            dropOffLocationSelect.append(
                                '<option value="">Select Your preference Drop Off Location</option>');
                            pickUpLocationSelect.append('<option value="">Select Location</option>');

                            // Assuming data is an array of objects with id, name, and point_order properties
                            data.sort(function(a, b) {
                                return a.point_order - b.point_order;
                            });

                            $.each(data, function(key, location) {
                                dropOffLocationSelect.append('<option value="' + location.id +
                                    '">' + location.name + '</option>');
                                pickUpLocationSelect.append('<option value="' + location.id + '">' +
                                    location.name + '</option>');
                            });

                            // Add static options after dynamic ones
                            dropOffLocationSelect.append('<option value="Home">Home</option>');
                            dropOffLocationSelect.append('<option value="Office">Office</option>');
                            pickUpLocationSelect.append('<option value="Home">Home</option>');
                            pickUpLocationSelect.append('<option value="Office">Office</option>');

                            // Re-enable/disable options based on current selections
                            disableSameOption(pickUpLocationSelect, dropOffLocationSelect);
                            disableSameOption(dropOffLocationSelect, pickUpLocationSelect);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            alert(
                                'An error occurred while fetching locations.'
                            ); // Provide feedback to the user
                        }
                    });
                }

                preferredRouteSelect.on('change', function() {
                    var preferredRouteId = $(this).val();
                    populateLocations(preferredRouteId);
                });

                // Check initial value and trigger AJAX if route is already selected
                var initialRouteId = preferredRouteSelect.val();
                if (initialRouteId) {
                    populateLocations(initialRouteId);
                }
            });
        </script>
    @endpush
@endsection
