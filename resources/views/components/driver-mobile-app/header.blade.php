<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/bootstrap.min.css') }}" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/chart.min.css') }}" />
    <script src="{{ asset('mobile-app-assets/js/chart.bundle.min.js ') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/utils.js ') }}"></script>
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/owl.theme.css ') }}" />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/styles.css') }}" />
    <!--International Telephone input JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
    <title>@yield('title')</title>
</head>

<body>
