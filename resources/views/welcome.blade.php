@extends('layouts.app')

@section('content')
    <div class="container mw-100 m-0 pb-5">

        @if (session('status'))
            <div class="alert alert-success position-fixed mt-5 col-4 offset-4" style="z-index: 1">
                {{ session('status') }}
            </div>
        @endif

        <div class="row mb-5" id="landing-page-banner">
            <span class="align-middle ml-2">Dare to build.<br>Dare to grow.<br>Dare to give.</span>
        </div>

        <div class="row text-light">
            <h1 class="display-5 mx-auto d-block">How We Help</h1>
            <div class="row justify-content-center m-lg-5 p-sm-3 welcome-panel">
                <div class="col-4">
                    <p class="lead">Understand Your Goals</p>
                    <p>What do you want? What do you envision your company, your life, looking like in five years? We
                        want to help you build your future and grow toward your goals.</p>
                </div>
                <div class="col-4">
                    <img src="//via.placeholder.com/350" class="img-fluid float-right shadow-lg">
                </div>
            </div>
            <div class="row justify-content-center m-lg-5 p-sm-3 welcome-panel">
                <div class="col-4">
                    <img src="//via.placeholder.com/350" class="img-fluid float-left shadow-lg">
                </div>
                <div class="col-4">
                    <p class="lead">Document Your Path</p>
                    <p>We’ll work with you to understand your past, present, and future. Have a detour you’re not proud
                        of? We can overcome most challenges and plot an achievable path forward.</p>
                </div>
            </div>
            <div class="row justify-content-center m-lg-5 p-sm-3 welcome-panel">
                <div class="col-4">
                    <p class="lead">Plan Your Future</p>
                    <p>We’re not just here to help with your cashflow. We’re a resource you can depend on - whether the
                        help you need is financial - or just an introduction to the right person.</p>
                </div>
                <div class="col-4">
                    <img src="//via.placeholder.com/350" class="img-fluid float-right shadow-lg">
                </div>
            </div>
        </div>

        <div class="row flex-column justify-content-center mb-5" id="get-financing-banner">
            <div class="text-center col-4 offset-4">
                <h1 class="display-3">Dare to Grow Your Business</h1>
                <h4>Dare to dream.<br>Dare to build.<br>Dare to grow.<br>Dare to breathe.</h4>
            </div>
        </div>

        <div class="row text-light">
            <div class="col-lg-4 offset-lg-4">
                <p class="lead">Talk to us. Let us understand your goals.</p>
                <p>We want to help you grow and build. Leave us your name and number below, and one of our executives
                    will give you a call as soon as possible.</p>
            </div>
        </div>

        <div class="row mb-5 text-light">
            <div class="cognito col-lg-4 offset-lg-4">
                <script src="https://services.cognitoforms.com/s/xVHxdnmaP0uDY40yI9wkMw"></script>
                <script>Cognito.load("forms", {id: "2"});</script>
            </div>
        </div>

        <div class="row justify-content-center text-light">
                <div class="col-lg-2">
                    <p class="lead">Document Your Path</p>
                    <p>What we'll ask about</p>
                    <p>No problem is insurmountable</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="col-lg-2">
                <p class="lead">Plan Your Future</p>
                <p>What we'll deliver for you</p>
                <p>Read our success stories</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


    </div>

@endsection

@push('styles')
    <style>
        .welcome-panel {
            opacity: 0;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render=6LcjEsgUAAAAAHnO0KBQyeLpcKE42lta1nj67FU6"></script>
    <script type="text/javascript">
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcjEsgUAAAAAHnO0KBQyeLpcKE42lta1nj67FU6').then(function (token) {
                document.getElementById('recaptchaToken').value = token;
            });
        });

        $(document).ready(function () {
            $('.welcome-panel').first().delay(800).animate({
                opacity: 1,
            }, 500);

            $(window).scroll(function () {
                /* Check the location of each desired element */
                $('.welcome-panel').each(function (i) {
                    const bottom_of_object = $(this).offset().top + $(this).outerHeight();
                    const bottom_of_window = $(window).scrollTop() + $(window).height();

                    /* If the object is completely visible in the window, fade it it */
                    if (bottom_of_window > bottom_of_object) {
                        $(this).animate({
                            opacity: 1,
                        }, 500);
                    }
                });
            });
        });
    </script>
@endpush
