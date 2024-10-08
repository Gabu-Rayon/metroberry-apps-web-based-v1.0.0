@extends('layouts.driver-mobile-app')

@section('title', 'Sign Up | Driver')

@section('content')
    <div id="load" class="loading-overlay d-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>

    <div class="row h-100 align-items-center">
        <div class="col-12 mb-3">
            @include('components.logometro')

            <div class="sign-up-form-container text-center">
                <form class="width-100 mx-auto" id="sign-up-form" action="{{ route('driver.signup') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control h-100" id="name-input" type="text" name="name"
                                autocomplete="off" placeholder="Name" required value="{{ old('name') }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control h-100" id="name-input" type="number" name="national_id_no"
                                autocomplete="off" placeholder="ID Number" required value="{{ old('national_id_no') }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control h-100" id="email-input" type="email" name="email"
                                autocomplete="off" placeholder="Email" required value="{{ old('email') }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control h-100" id="password-input" type="password" name="password"
                                autocomplete="off" placeholder="Password" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <select class="form-control h-100" id="organisation-select" name="organisation_id" required>
                                <option value="" disabled selected>Organisation</option>
                                @foreach ($organisations as $organisation)
                                    <option value="{{ $organisation->id }}">{{ $organisation->organisation_code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="sign-up-btn-container">
                        <button type="submit"
                            class="btn btn-center width-100 display-block btn-primary text-uppercase">Sign Up</button>
                    </div>
                </form>

                <div class="have-an-account text-center mt-3">
                    <a href="{{ route('driver.login') }}" class="regular-link">Already have an account?</a>
                </div>
            </div>
        </div>
    </div>
@endsection
