<!DOCTYPE html>
<html view-source="no" viewsource="no" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      xmlns="http://www.w3.org/1999/xhtml"
      prefix="og: http://ogp.me/ns#" class="perfect-scrollbar-on">
<head>
    <title>{{isset($title)?$title:'Simalili'}}</title>
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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -- >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">-->
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
            <a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
                <img src="{{asset('img/logo/logo-horizontal.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="profile-page">
    @if (isset($typeUser))
        <div class="position-relative">
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-250">
                <div class="shape shape-style-1 shape-primary alpha-4">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="container py-lg-md d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="display-3  text-white">Bienvenido
                                    <span>{{$typeUser}}</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 1st Hero Variation -->
        </div>
        <section class="section">
            <div class="container">
                @yield('content')
            </div>
        </section>
    @elseif(isset($crud))
        <section class="section-profile-cover section-shaped my-0" style="height: 440px">
            <!-- Circles background -->
            <div class="shape shape-style-1 shape-primary alpha-4">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section">
            <div class="container">
                @yield('content')
            </div>
        </section>
    @else
    <!-- shape Hero -->
        <section class="section section-shaped section-lg">
            <div class="shape shape-style-1 bg-gradient-default">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
            <!-- Content -->
            @yield('content')
        </section>
    @endif
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
