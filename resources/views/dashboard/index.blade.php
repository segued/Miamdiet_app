<!DOCTYPE html>
<html lang="en">

<head>
    <title>Miamdiet Admin</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers" />
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="{{ assert('assets/plugins/fontawesome/js/all.min.js') }}"></script>
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}" />
</head>

<body class="app">
    <header class="app-header fixed-top">
        @include('dashboard.topbar')

        <div class="app-wrapper">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl">
                    <div style="overflow: auto; max-height: 600px;">
                        @yield('content')
                    </div>
                </div>
            </div>

            @include('dashboard.sidbar')
        </div>
    </header>

    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/index-charts.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
