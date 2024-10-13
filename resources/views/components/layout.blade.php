<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Logistics II</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('css/svg/favicon.svg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Template Plugins -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Vite Plugins and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/demo/demo.js'])

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

</head>

<body class="tw-bg-gray-100 tw-p-8">

    <div class="sb-nav-fixed">
        @include('components.navbar')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('components.sidebar')
            </div>

            <div id="layoutSidenav_content">
                <main class="container-fluid px-4">
                    <!-- Page Content goes here -->
                    {{ $slot }}
                </main>

                @include('components.footer')
            </div>

        </div>
    </div>

    <!-- Template Scripts Plugins   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    
</body>

</html>