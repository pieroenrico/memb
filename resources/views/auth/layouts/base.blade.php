<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Create the skeleton of your app with popular pre-designed layouts.">
    <meta name="keywords" content="layouts">

    <title>Mundos en mi Barrio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Styles -->
    <link href="/assets/css/core.min.css" rel="stylesheet">
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <link href="/assets/css/style.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Favicons -->
    {{--<link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">--}}
    <link rel="icon" href="/assets/img/favicon.png">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

<div class="row no-gutters min-h-fullscreen bg-white" id="app">
    <div class="col-md-6 col-lg-7 col-xl-8 d-none d-md-block bg-img" style="background-image: url({{ asset('img/bglogin.jpg') }})" data-overlay="5">

        <div class="row h-100 pl-50">
            <div class="col-md-10 col-lg-8 align-self-end">

                <h1 class="text-white">Mundos en mi Barrio</h1>
                <h4 class="text-white">Literatura y Espacialidad</h4>
                {{--<p class="text-white">Credibly transition sticky users after backward-compatible web services. Compellingly strategize team building interfaces.</p>--}}
                <br><br>
            </div>
        </div>

    </div>


    @yield('content')

</div>

<!-- Scripts -->
<script src="/assets/js/core.min.js"></script>
<script src="/assets/js/app.min.js"></script>
<script src="/assets/js/script.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
