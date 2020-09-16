<!--
=========================================================
 Paper Dashboard - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 UPDIVISION (https://updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('paper') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('paper') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard-laravel" />


    <!--  Social tags      -->
    <meta name="keywords" content="design system, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, paper, paper dashboard, creative tim, updivision, html dashboard, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap dashboard, responsive dashboard, laravel, laravel php, laravel php framework, free laravel admin template, free laravel admin, free laravel admin template + Front End + CRUD, crud laravel php, crud laravel, laravel backend admin dashboard">
    <meta name="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up.">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Dashboard Laravel by Creative Tim">
    <meta itemprop="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/209/opt_pd_laravel_thumbnail.jpg">


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Paper Dashboard Laravel by Creative Tim">

    <meta name="twitter:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/209/opt_pd_laravel_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Paper Dashboard Laravel by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.creative-tim.com/live/paper-dashboard-laravel" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/209/opt_pd_laravel_thumbnail.jpg"/>
    <meta property="og:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up." />
    <meta property="og:site_name" content="Creative Tim" />
    
    <title>
        {{ __('Paper Dashboard by Creative Tim') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('paper') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('paper') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('paper') }}/demo/demo.css" rel="stylesheet" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->

    <script>
    // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
        }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");
        } catch (err) {
        console.log('Facebook Track Error:', err);
        }
    </script>
    <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>
</head>


<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
            <div class="wrapper">

                <div class="sidebar" data-color="white" data-active-color="danger">
                    <div class="logo">
                        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                            <div class="logo-image-small">
                                <img src="{{ asset('paper') }}/img/logo-small.png">
                            </div>
                        </a>
                        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                            {{ __('Creative Tim') }}
                        </a>
                    </div>
                    <div class="sidebar-wrapper">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('page.index', 'dashboard') }}">
                                    <i class="nc-icon nc-bank"></i>
                                    <p>{{ __('Dashboard') }}</p>
                                </a>
                            </li>
                            <li >
                                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                                    <p>
                                            {{ __('Laravel examples') }}
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse show" id="laravelExamples">
                                    <ul class="nav">
                                        <li >
                                            <a href="{{ route('profile.edit') }}">
                                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('page.index', 'user') }}">
                                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li >
                                <a href="{{ route('page.index', 'icons') }}">
                                    <i class="nc-icon nc-diamond"></i>
                                    <p>{{ __('Icons') }}</p>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('page.index', 'map') }}">
                                    <i class="nc-icon nc-pin-3"></i>
                                    <p>{{ __('Maps') }}</p>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('page.index', 'notifications') }}">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>{{ __('Notifications') }}</p>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('page.index', 'tables') }}">
                                    <i class="nc-icon nc-tile-56"></i>
                                    <p>{{ __('Table List') }}</p>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('page.index', 'typography') }}">
                                    <i class="nc-icon nc-caps-small"></i>
                                    <p>{{ __('Typography') }}</p>
                                </a>
                            </li>
                            {{-- <li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                                <a href="{{ route('page.index', 'upgrade') }}" class="bg-danger">
                                    <i class="nc-icon nc-spaceship text-white"></i>
                                    <p class="text-white">{{ __('Upgrade to PRO') }}</p>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">{{ __('Paper Dashboard') }}</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="#pablo">
                                <i class="nc-icon nc-layout-11"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __('Stats') }}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __('Some Actions') }}</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                                <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                                <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                            </div>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __('Account') }}</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                                <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOut" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">{{ __('Log out') }}</a>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('My profile') }}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>            <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Users</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">Add user</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Creation Date</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>Admin Admin</td>
                                            <td>
                                                <a href="mailto:admin@paper.com">admin@paper.com</a>
                                            </td>
                                            <td>25/02/2020 11:37</td>
                                                                                    </tr>
                                                                    </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-danger alert-dismissible fade show">
                <span>
                    <b> </b> This is a PRO feature!</span>
            </div>
        </div>
    </div>
        <footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                    </li>
                    <li>
                        <a href="https://updivision.com" target="_blank">UpDivision</a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>2020, made with <i class="fa fa-heart heart"></i> by <a class="" href="https://www.creative-tim.com" target="_blank">Creative Tim</a> and <a class="" target="_blank" href="https://updivision.com">UPDIVISION</a>
                </span>
            </div>
        </div>
    </div>
</footer>    </div>
</div>        <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-light active" data-color="white"></span>
                        <span class="badge filter badge-dark" data-color="black"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title"> Sidebar Active Color</li>
            <li class="adjustments-line text-center">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <span class="badge filter badge-primary" data-color="primary"></span>
                    <span class="badge filter badge-info" data-color="info"></span>
                    <span class="badge filter badge-success" data-color="success"></span>
                    <span class="badge filter badge-warning" data-color="warning"></span>
                    <span class="badge filter badge-danger active" data-color="danger"></span>
                </a>
            </li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/paper-dashboard-laravel" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
            </li>
            <li class="button-container">
                <a href="https://paper-dashboard-laravel.creative-tim.com/docs/getting-started/laravel-setup.html" target="_blank" class="btn btn-outline-default btn-block btn-round">
                    <i class="nc-icon nc-paper"></i> Documentation
                </a>
            </li>
            <li class="header-title">
                Want more components?
            </li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/paper-dashboard-pro-laravel" target="_blank" class="btn btn-danger btn-block btn-round">
                    Get Pro Version
                </a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
                <button id="twitter" class="btn btn-outline-default btn-round btn-sm sharrre"><i class="fa fa-twitter"></i>
                    · 45</button>
                <button id="facebook" class="btn btn-outline-default btn-round btn-sm sharrre"><i class="fa fa-facebook-f"></i>
                    · 50</button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/paper-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>        
    <!--   Core JS Files   -->
    <script src="{{ asset('paper') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('paper') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('paper') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('paper') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('paper') }}/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('paper') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('paper') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('paper') }}/demo/demo.js"></script>
    <!-- Sharrre libray -->
    <script src="{{ asset('paper') }}/demo/jquery.sharrre.js"></script>
    
    @stack('scripts')

    @include('layouts.navbars.fixed-plugin-js')
</body>

</html>
