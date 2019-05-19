<!DOCTYPE html>
<html view-source="no" viewsource="no" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      xmlns="http://www.w3.org/1999/xhtml"
      prefix="og: http://ogp.me/ns#" class="perfect-scrollbar-on">
<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Tags -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset('img/logo/apple-touch-icon-57x57.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('img/logo/apple-touch-icon-114x114.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('img/logo/apple-touch-icon-72x72.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('img/logo/apple-touch-icon-144x144.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{asset('img/logo/apple-touch-icon-60x60.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{asset('img/logo/apple-touch-icon-120x120.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{asset('img/logo/apple-touch-icon-76x76.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{asset('img/logo/apple-touch-icon-152x152.png')}}"/>
    <link rel="icon" type="image/png" href="{{asset('img/logo/favicon-196x196.png')}}" sizes="196x196"/>
    <link rel="icon" type="image/png" href="{{asset('img/logo/favicon-96x96.png')}}" sizes="96x96"/>
    <link rel="icon" type="image/png" href="{{asset('img/logo/favicon-32x32.png')}}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{asset('img/logo/favicon-16x16.png')}}" sizes="16x16"/>
    <link rel="icon" type="image/png" href="{{asset('img/logo/favicon-128.png')}}" sizes="128x128"/>
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="{{asset('img/logo/mstile-144x144.png')}}"/>
    <meta name="msapplication-square70x70logo" content="{{asset('img/logo/mstile-70x70.png')}}"/>
    <meta name="msapplication-square150x150logo" content="{{asset('img/logo/mstile-150x150.png')}}"/>
    <meta name="msapplication-wide310x150logo" content="{{asset('img/logo/mstile-310x150.png')}}"/>
    <meta name="msapplication-square310x310logo" content="{{asset('img/logo/mstile-310x310.png')}}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('css/argon.css?v=1.0.1')}}" rel="stylesheet">
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
</head>
<!-- BODY -->
<body>
<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="http://localhost/">
                <img src="{{asset('img/logo/logo-horizontal.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                    aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="http://localhost/">
                                <img src="{{asset('img/brand/blue.png')}}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <section class="section section-shaped section-lg">
        <div class="shape shape-style-1 bg-gradient-default">
            <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </section>
</main>
<!-- Scripts -->
<!-- Core -->
<script src="{{asset('vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/headroom/headroom.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('js/argon.js?v=1.0.1')}}"></script>
<!-- Optional JS -->
<script src="{{asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
</body>
<!-- /BODY -->
</html>
