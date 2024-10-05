<!doctype html>
<html lang="en">

<head>
    @csrf
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <meta name="base-url"content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible"content="IE=edge" />
    <meta name="viewport"content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        @yield('title')
    </title>
    <meta name="description"content="Metro-Berry-Admin-Template" />
    <link rel="canonical"href="/" />
    <meta name="robots"content="all" />
    <meta property="og:description"content="Metro-Berry-Admin-Template" />
    <meta property="og:title"content="Metroberry" />
    <meta property="og:url"content="metrobery.co.ke" />
    <meta property="og:type"content="WebPage" />
    <meta property="og:Metro-Berry"content="Metro-Berry" />

    <link rel="shortcut icon"href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/metisMenu/metisMenu.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('nanopkg-assets/vendor/datatables/dataTables.bootstrap4.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/typicons/src/typicons.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/themify-icons/themify-icons.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/material_icons/materia_icons.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/emojionearea/dist/emojionearea.min.css?v=1') }}"rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('nanopkg-assets/vendor/yajra-laravel-datatables/assets/datatables.css?v=1') }}">
    <link rel="stylesheet"href="{{ asset('nanopkg-assets/vendor/highlight/highlight.min.css?v=1') }}">
    <link href="{{ asset('nanopkg-assets/vendor/sweetalert2/sweetalert2.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('nanopkg-assets/vendor/fontawesome-free-6.3.0-web/css/all.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('nanopkg-assets/vendor/bootstrap-icons/css/bootstrap-icons.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('nanopkg-assets/vendor/toastr/build/toastr.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('nanopkg-assets/css/arrow-hidden.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('nanopkg-assets/css/custom.min.css?v=1 ') }}"rel="stylesheet">

    <!--Start Your Custom Style Now-->
    <link href="{{ asset('admin-assets/css/style-new.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/css/custom.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/css/extra.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/scss/customStyle.min.css?v=1') }}"rel="stylesheet">
    <link href="{{ asset('admin-assets/css/grapData.min.css?v=1') }}"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    <link rel="stylesheet"href="{{ asset('admin-assets/css/dashboard.min.css?v=1') }}">
    <link href="{{ asset('admin-assets/css/logout.css?v=1') }}" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjAxAszIxcGy7sHQxpFh0c1EDs-3AO76Q"></script>
    <style>
        .emp-avatar {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            object-fit: cover
        }
    </style>
</head>

<body class="fixed sidebar-mini">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <script src="repeater.js"></script>
    <div class="main">
        @yield('content')
    </div>

    <script src="{{ asset('admin-assets/vendor/jQuery/jquery.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/emojionearea/dist/emojionearea.min.js?v=1') }}"></script>
    <script src="{{ asset('module-assets/Language/js/localizer.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/vendor/yajra-laravel-datatables/assets/datatables.js?v=1') }}"></script>
    <script src="{{ asset('module-assets/Language/js/localizer.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/metisMenu/metisMenu.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/vendor/sweetalert2/sweetalert2.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/vendor/fontawesome-free-6.3.0-web/js/all.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/vendor/toastr/build/toastr.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/vendor/axios/dist/axios.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/vendor/typed.js/lib/typed.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/vendor/jquery-validation-1.19.5/jquery.validate.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/js/axios.init.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/js/arrow-hidden.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/js/img-src.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/js/delete.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/js/user-status-update.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/js/main.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/js/sidebar.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/amcharts5/index.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/amcharts5/venn.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/amcharts5/percent.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/amcharts5/percent.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/amcharts5/themes/Animated.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/vendor/amcharts5/xy.min.js?v=1') }}"></script>
    <script src="{{ asset('admin-assets/js/dashboard.min.js?v=1') }}"></script>
    <script src="{{ asset('nanopkg-assets/js/tosterSession.min.js?v=1') }}"></script>

    <!-- Toastr Notification Script -->
    <script type="text/javascript">
        $(document).ready(function() {
            @if (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif

            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @endif

            @if (Session::has('info'))
                toastr.info('{{ Session::get('info') }}');
            @endif

            @if (Session::has('warning'))
                toastr.warning('{{ Session::get('warning') }}');
            @endif
        });
    </script>
    <!-- DataTables Initialization -->
    <script type="text/javascript">
        $(function() {
            window.LaravelDataTables = window.LaravelDataTables || {};
            window.LaravelDataTables["driver-table"] = $("#driver-table").DataTable({

            });
        });
    </script>
</body>

</html>
