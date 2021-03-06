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

    <!-- Styles -->
    <link href="/assets/css/core.min.css" rel="stylesheet">
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <link href="/assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" href="/assets/img/favicon.png">
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
<header class="topbar topbar-expand-lg">
    <div class="topbar-left">
        <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>
        <span class="topbar-brand">
            <img src="/assets/img/logo.svg" alt="" style="width: 50px;">
        </span>

        <div class="topbar-divider d-none d-xl-block"></div>

        <nav class="topbar-navigation">
            <ul class="menu">

                <li class="menu-item">
                    <a class="menu-link" href="../index.html">
                        <span class="title">Feed</span>
                    </a>
                </li>


                <li class="menu-item active">
                    <a class="menu-link" href="#">
                        <span class="title">Textos</span>
                    </a>
                </li>


                <li class="menu-item">
                    <a class="menu-link" href="#">
                        <span class="title">Autores</span>
                    </a>
                </li>


                <li class="menu-item">
                    <a class="menu-link" href="#">
                        <span class="title">Registrate</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>

    <div class="topbar-right">

        {{--<ul class="topbar-btns">
            <li class="dropdown">
                <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="../assets/img/avatar/1.jpg" alt="..."></span>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                    <a class="dropdown-item" href="#">
                        <div class="flexbox">
                            <i class="ti-email"></i>
                            <span class="flex-grow">Inbox</span>
                            <span class="badge badge-pill badge-info">5</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ti-lock"></i> Lock</a>
                    <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
                </div>
            </li>

            <!-- Notifications -->
            <li class="dropdown d-none d-md-block">
                <span class="topbar-btn has-new" data-toggle="dropdown"><i class="ti-bell"></i></span>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="media-list media-list-hover media-list-divided media-list-xs">
                        <a class="media media-new" href="#">
                            <span class="avatar bg-success"><i class="ti-user"></i></span>
                            <div class="media-body">
                                <p>New user registered</p>
                                <time datetime="2017-07-14 20:00">Just now</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                            <div class="media-body">
                                <p>New order received</p>
                                <time datetime="2017-07-14 20:00">2 min ago</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
                            <div class="media-body">
                                <p>Refund request from <b>Ashlyn Culotta</b></p>
                                <time datetime="2017-07-14 20:00">24 min ago</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-primary"><i class="ti-money"></i></span>
                            <div class="media-body">
                                <p>New payment has made through PayPal</p>
                                <time datetime="2017-07-14 20:00">53 min ago</time>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-footer">
                        <div class="left">
                            <a href="#">Read all notifications</a>
                        </div>

                        <div class="right">
                            <a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>
                            <a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>
                            <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                        </div>
                    </div>

                </div>
            </li>
            <!-- END Notifications -->

            <!-- Messages -->
            <li class="dropdown d-none d-md-block">
                <span class="topbar-btn" data-toggle="dropdown"><i class="ti-email"></i></span>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="media-list media-list-divided media-list-hover media-list-xs scrollable" style="height: 290px">
                        <a class="media media-new" href="#">
                  <span class="avatar status-success">
                    <img src="../assets/img/avatar/1.jpg" alt="...">
                  </span>

                            <div class="media-body">
                                <p><strong>Maryam Amiri</strong> <time class="float-right" datetime="2017-07-14 20:00">23 min ago</time></p>
                                <p class="text-truncate">Authoritatively exploit resource maximizing technologies before technically.</p>
                            </div>
                        </a>

                        <a class="media media-new" href="#">
                  <span class="avatar status-warning">
                    <img src="../assets/img/avatar/2.jpg" alt="...">
                  </span>

                            <div class="media-body">
                                <p><strong>Hossein Shams</strong> <time class="float-right" datetime="2017-07-14 20:00">48 min ago</time></p>
                                <p class="text-truncate">Continually plagiarize efficient interfaces after bricks-and-clicks niches.</p>
                            </div>
                        </a>

                        <a class="media" href="#">
                  <span class="avatar status-dark">
                    <img src="../assets/img/avatar/3.jpg" alt="...">
                  </span>

                            <div class="media-body">
                                <p><strong>Helen Bennett</strong> <time class="float-right" datetime="2017-07-14 20:00">3 hours ago</time></p>
                                <p class="text-truncate">Objectively underwhelm cross-unit web-readiness before sticky outsourcing.</p>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar status-success bg-purple">FT</span>

                            <div class="media-body">
                                <p><strong>Fidel Tonn</strong> <time class="float-right" datetime="2017-07-14 20:00">21 hours ago</time></p>
                                <p class="text-truncate">Interactively innovate transparent relationships with holistic infrastructures.</p>
                            </div>
                        </a>

                        <a class="media" href="#">
                  <span class="avatar status-danger">
                    <img src="../assets/img/avatar/4.jpg" alt="...">
                  </span>

                            <div class="media-body">
                                <p><strong>Freddie Arends</strong> <time class="float-right" datetime="2017-07-14 20:00">Yesterday</time></p>
                                <p class="text-truncate">Collaboratively visualize corporate initiatives for web-enabled value.</p>
                            </div>
                        </a>

                        <a class="media" href="#">
                  <span class="avatar status-success">
                    <img src="../assets/img/avatar/5.jpg" alt="...">
                  </span>

                            <div class="media-body">
                                <p><strong>Freddie Arends</strong> <time class="float-right" datetime="2017-07-14 20:00">Yesterday</time></p>
                                <p class="text-truncate">Interactively reinvent standards compliant supply chains through next-generation bandwidth.</p>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-footer">
                        <div class="left">
                            <a href="#">Read all messages</a>
                        </div>

                        <div class="right">
                            <a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>
                            <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                        </div>
                    </div>

                </div>
            </li>
            <!-- END Messages -->
        </ul>--}}

        {{--<div class="topbar-divider d-none d-md-block"></div>--}}

        <form class="lookup lookup-circle lookup-right" target="index.html">
            <input type="text" name="s">
        </form>

    </div>
</header>
<!-- END Topbar -->





<!-- Main container -->
<main class="main-container">

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


    <div class="main-content">

        <div class="card">
            <h4 class="card-title"><strong>Sample</strong> card</h4>

            <div class="card-body">

            </div>
        </div>


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
<script src="assets/js/core.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/script.min.js"></script>

</body>
</html>
