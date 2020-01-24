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
            <div style="background-image: url('images/austin-skyline.png'); background-repeat: no-repeat; background-size: cover; height: 55vw;">
                <div style="float: right; margin-top: 62px;">

                <a style="width: 75px;
                    height: 15px;
                    color: #ffffff;
                    font-family: 'Nunito', sans-serif;
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 30px;
                    margin-right: 50px;">About Us</a>
                <a style="width: 75px;
                    height: 15px;
                    color: #ffffff;
                    font-family: 'Nunito', sans-serif;
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 30px;margin-right: 50px;">Resources</a>
                <a style="width: 75px;
                    height: 15px;
                    color: #ffffff;
                    font-family: 'Nunito', sans-serif;
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 30px;margin-right: 50px;">Stories</a>
                    <a style="margin-right: 35px;font-size: x-large;
color: #ffffff;" href="https://www.twitter.com/coledoescapital" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                    <a style="margin-right: 35px;font-size: x-large;
color: #ffffff;" href="https://www.facebook.com/DareBizCapital" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a style="margin-right: 100px;font-size: x-large;
color: #ffffff;" href="https://www.linkedin.com/company/darecapital" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <img style="margin-top: 62px; margin-left: 90px;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}" alt="Dare Logo">
                <div style="margin-top: 80px; margin-left: 102px;
                width: 427px;
                height: 102px;
                color: #ffffff;
                    font-family: 'Nunito', sans-serif;
                font-size: 42px;
                font-weight: 300;
                line-height: 59px;">
                    Working capital
                    for growing companies.
                </div>
                <div>
                    <button style="width: 185px;
height: 50px;
box-shadow: 0 10px 25px 1px rgba(255, 159, 0, 0.14);
background-color: #3a888b;margin-left: 105px; margin-top: 68px;font-family: 'Nunito', sans-serif;color: #ffffff;border: #3a888b;
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 30px;">Apply for Funding</button>
                </div>
            </div>
{{--            <img src="{{ asset('images/austin-skyline.png') }}" alt="Austin Skyline" class="img-fluid w-100">--}}
{{--            <img src="{{ asset('/images/shutterstock_451729549.png') }}" alt="Austin skyline" class="Austin skyline" />--}}
{{--            @include('includes.navbar')--}}

{{--            <main class="mb-5" style="margin-top: 118px">--}}
{{--                @yield('content')--}}
{{--            </main>--}}
{{----}}
{{--            @include('includes.footer')--}}
        </div>

        <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
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
