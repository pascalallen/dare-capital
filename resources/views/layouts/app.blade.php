<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--Meta data--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="Dare Business Capital | Dare to dream. Dare to build. Dare to grow. Dare to breathe.">
    <title>{{ config('app.name', 'Dare Capital') }} | @yield('title', 'Dare to give.')</title>
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
@include('includes.nav')
<div class="container-fluid px-0">
    @yield('content')
</div>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js"
        data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">
    window.dojoRequire(["mojo/signup-forms/Loader"], function (L) {
        L.start({
            "baseUrl": "mc.us4.list-manage.com",
            "uuid": "0968335fd5eea8b521b69b7ca",
            "lid": "414a8fe985",
            "uniqueMethods": true
                })
            });
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    </body>
</html>
