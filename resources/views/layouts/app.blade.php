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
            <div class="row text-center" style="margin-left: 90px; margin-right: 90px">
                <div class="col-md-4">
                    <img src="{{ asset('images/shutterstock_1085127647.png') }}">
                    <div style="
                    margin-top: 25px;
                    margin-bottom: 25px;
                    color: #3a888b;
                    font-family: 'Nunito', sans-serif;
                    font-size: 29px;">DARE TO BUILD</div>
                    <div style="height: 400px; padding: 30px; text-align: left; margin:auto;width: 85%; box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                        <div style="
                            color: #011f4b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 28px;
                            font-weight: 300;
                            ">A financing
                            relationship you can
                            <strong style="font-weight: 900">build the future</strong> on.</div>
                        <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">Have outstanding AR? Want a steadier cashflow? Need a line of credit, but you don’t fit in a bank’s box?
                            We’re here to help, and we love a challenge.</div>
                        <div style="
                        width: 113px;
                        height: 13px;
                        color: #3c8685;
                        font-family: 'Nunito', sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        position: absolute;
                        bottom: 50px;
"><a>Read More >></a></div>
                    </div>
                </div>
                <div class="col-md-4" style="bottom: 100px;">
                    <img src="{{ asset('images/shutterstock_1564227556.png') }}">
                    <div style="
                    margin-top: 25px;
                    margin-bottom: 25px;
                    color: #3a888b;
                    font-family: 'Nunito', sans-serif;
                    font-size: 29px;">DARE TO GROW</div>
                    <div style="height: 400px; padding: 30px; text-align:left; margin:auto;width: 85%;box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                        <div style="
                            color: #011f4b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 28px;
                            font-weight: 300;
                            ">
                            <strong style="font-weight: 900">A partnership</strong> you
                            won’t have to sign
                            away equity for.*</div>
                        <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">We can help you grow, the right way, at the right pace. With working capital financing, you don’t have to give up equity or mortgage your future−but you do get a financing partner invested in your success.
                        </div>
                        <div style="
                        width: 113px;
                        height: 13px;
                        color: #3c8685;
                        font-family: 'Nunito', sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        position: absolute;
                        bottom: 50px;"><a>Read More >></a></div>
                    </div>
                </div>
                <div class="col-md-4" style="bottom: 200px;">
                    <img src="{{ asset('images/Vector_Smart_Object.png') }}">
                    <div style="
                    margin-top: 25px;
                    margin-bottom: 25px;
                    color: #3a888b;
                    font-family: 'Nunito', sans-serif;
                    font-size: 29px;">DARE TO GIVE</div>
                    <div style="min-height: 400px; padding: 30px; text-align:left; margin:auto;width: 85%;box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                        <div style="
                            color: #011f4b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 28px;
                            font-weight: 300;
                            ">A resource
                            you can rely on
                            for
                            <strong style="font-weight: 900">more than financing</strong>.</div>
                        <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">We’ve worked with 1,000+ companies in every stage of growth. We’ve seen it all;
                            we know all the red flags, and we can usually help with obstacles large and small. </div>
                        <div style="
                        width: 113px;
                        height: 13px;
                        color: #3c8685;
                        font-family: 'Nunito', sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        position: absolute;
                        bottom: 50px;
                        "><a>Read More >></a></div>
                    </div>
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
