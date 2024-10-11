<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/fontawesome.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('mobile-app-assets/css/styles.css') }}">
    <title>Metroberry Be-Spoken Loading...</title>
</head>

<body>

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <!--Loading Logo Container Start-->
    <div class=" w-100 h-100">
        <input type="hidden" class="loading-logo  customer">
        <div class="d-flex h-100 justify-content-center align-items-center flex-column">
            <a href="{{ route('sign.up.options.page') }}" class="loading-logo-margin"><img
                    src="{{ asset('mobile-app-assets/images/logo-metro.png') }}"  height="150" width="300" alt="Main Logo"></a>
        </div>
    </div>
    <!--Loading Logo Container End-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('mobile-app-assets/js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/main.js') }}"></script>
</body>

</html>
