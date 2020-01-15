<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156288410-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-156288410-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="Dare Business Capital | Dare to dream. Dare to build. Dare to grow. Dare to breathe.">

    <title>{{ config('app.name', 'Dare Capital') }} | @yield('title', 'Dare to give.')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/b05f5595ec.js" crossorigin="anonymous"></script>
    @stack('styles')
    @stack('scripts')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav nav-left">
            <li class="nav-item bg-light nav-logo" style="width: 65px">
                <a class="navbar-brand ml-1 mr-1" href="{{ url('/') }}">
                    <img
                        src="{{ asset('images/Dare_Logo_AdmiralBlue_RGB.png') }}"
                        class="img-fluid"
                        alt="Dare_Logo_AdmiralBlue_RGB.png"
                    />
                </a>
            </li>
        </ul>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-tagline">
                    <a class="nav-link" href="{{ url('/') }}">{{ __('Dare to build. Dare to grow. Dare to give.') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">{{ __('About Dare Capital') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">{{ __('Stories') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fab fa-linkedin"></i></a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-light" href="{{ route('posts.index') }}">
                                {{ __('Posts') }}
                                    </a>
                                    <a class="dropdown-item text-light" href="{{ route('profile.index') }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
        </nav>

        <main class="mb-5">
            @yield('content')
        </main>

    <nav class="navbar navbar-expand-md navbar-dark shadow-sm nav-bottom">
        <div class="container">

            <div class="collapse navbar-collapse" id="bottomNavbarSupportedContent">

                <!-- Center Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link">3021 Ridge Drive PMB 110 Rockwall, TX 75032 (512) 886-DARE</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fab fa-linkedin"></i></a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js"
        data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function (L) {
        L.start({
            "baseUrl": "mc.us4.list-manage.com",
            "uuid": "0968335fd5eea8b521b69b7ca",
            "lid": "414a8fe985",
            "uniqueMethods": true
        })
    })</script>
</body>
</html>
