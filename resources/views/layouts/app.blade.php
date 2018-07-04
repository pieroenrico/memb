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

<!-- Preloader -->
<div class="preloader">
    <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
    </div>
</div>

<!-- Topbar -->
<header class="topbar topbar-expand-lg bg-dark">
    <div class="topbar-left">
        <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>
        <span class="topbar-brand">
            <a href="{{ route('home') }}"><img src="/img/logo.svg" alt="" style="width: 50px;"></a>
        </span>

        <div class="topbar-divider d-none d-xl-block"></div>

        <nav class="topbar-navigation">
            <ul class="menu text-center">

                <li class="menu-item <?php echo e(Route::currentRouteName() == "feed" ? 'active' : ''); ?>">
                    <a class="menu-link" href="{{ route('feed') }}">
                        <span class="title">Feed</span>
                    </a>
                </li>


                <li class="menu-item <?php echo e(Route::currentRouteName() == "texts" ? 'active' : ''); ?>">
                    <a class="menu-link" href="{{ route('texts') }}">
                        <span class="title">Textos</span>
                    </a>
                </li>


                <li class="menu-item <?php echo e(Route::currentRouteName() == "authors" ? 'active' : ''); ?>">
                    <a class="menu-link" href="{{ route('authors') }}">
                        <span class="title">Autores</span>
                    </a>
                </li>

                @guest
                    <li class="menu-item">
                        <a class="menu-link" href="/login">
                            <span class="title">Ingresar</span>
                        </a>
                    </li>
                <li class="menu-item">
                    <a class="menu-link" href="#">
                        <span class="title">Registrate</span>
                    </a>
                </li>
                @endguest

            </ul>
        </nav>
    </div>

    @auth
    <div class="topbar-right">

        <ul class="topbar-btns">
            <li class="dropdown">
                <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="/uploads/users/{{ Auth::user()->profile()->first()->picture }}" alt="..."></span>
            </li>
        </ul>

        <div class="topbar-divider d-none d-md-block" style="border-color: #999;"></div>

        <form action="{{ route('logout') }}" method="post">
            {!! csrf_field() !!}
            <button class="btn btn-primary btn-pure fw-100">Salir</button>
        </form>

        <div class="topbar-divider d-none d-md-block" style="border-color: #999;"></div>

        <p>{{ Auth::user()->name }}</p>



        {{--<form class="lookup lookup-circle lookup-right" target="index.html">
            <input type="text" name="s">
        </form>--}}

    </div>
    @endauth
</header>
<!-- END Topbar -->





<!-- Main container -->
<main class="main-container pt-40">

    {{--<header class="header">
        <div class="header-info">
            <h1 class="header-title">
                <strong>Topbar & Header Menu</strong> Layout
                <small>Create the skeleton of your app with popular pre-designed layouts.</small>
            </h1>
        </div>

        <div class="header-action">
            <nav class="nav">
                <a class="nav-link active" href="#">All</a>
                <a class="nav-link" href="#">Add new</a>
                <a class="nav-link d-none d-sm-block" href="#">Categories</a>
                <a class="nav-link d-none d-sm-block" href="#">Tags</a>
            </nav>

            <div class="buttons">
                <div class="fab fab-dir-left">
                    <button class="btn btn-float btn-primary" data-toggle="button">
                        <i class="fab-icon-default ti-plus"></i>
                        <i class="fab-icon-active ti-close"></i>
                    </button>

                    <ul class="fab-buttons">
                        <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-calendar"></i></a></li>
                        <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-music"></i></a></li>
                        <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-video-camera"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/.header -->--}}

    @yield('header')


    <div class="main-content" id="app">


        @yield('content')


    </div><!--/.main-content -->


    <!-- Footer -->
    <footer class="site-footer">
        <div class="row">
            <div class="col-md-6">
                <p class="text-center text-md-left">&copy;2018 | Mundos en mi Barrio <a href="http://tizapapelbyte.co">TizaPapelByte</a>. Todos los derechos reservados.</p>
            </div>

            {{--<div class="col-md-6">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="../help/articles.html">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../help/faq.html">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://themeforest.net/item/theadmin-responsive-bootstrap-4-admin-dashboard-webapp-template/20475359?license=regular&amp;open_purchase_for_item_id=20475359&amp;purchasable=source&amp;ref=thethemeio">Purchase Now</a>
                    </li>
                </ul>
            </div>--}}
        </div>
    </footer>
    <!-- END Footer -->

</main>
<!-- END Main container -->



<!-- Global quickview -->
<div id="qv-global" class="quickview" data-url="../assets/data/quickview-global.html">
    <div class="spinner-linear">
        <div class="line"></div>
    </div>
</div>
<!-- END Global quickview -->



<!-- Scripts -->
<script src="/assets/js/core.min.js"></script>
<script src="/assets/js/app.min.js"></script>
<script src="/assets/js/script.min.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
