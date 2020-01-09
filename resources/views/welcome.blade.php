@extends('layouts.app')

@section('content')
    <div class="container mw-100 m-0 mt-5 pb-5">

        @if (session('status'))
            <div class="alert alert-success position-fixed mt-5 col-4 offset-4" style="z-index: 1">
                {{ session('status') }}
            </div>
        @endif

        <div class="row flex-column mb-5 bg-white" id="landing-page-banner">
            <div class="col-md-2">
                <img src="{{ asset('images/Dare_Logo_AdmiralBlue_RGB.png') }}" class="banner-image img-fluid"
                     alt="Dare_Logo_AdmiralBlue_RGB.png"/>
            </div>
            <div class="text-center text-dark mb-4">
                <h4>Dare to build.<br>Dare to grow.<br>Dare to give.</h4>
            </div>
        </div>

        <div class="row text-light">
            <h1 class="display-5 mx-auto d-block">How We Help</h1>
            <div class="row justify-content-center m-lg-5 p-sm-3 welcome-panel">
                <div class="col-4">
                    <p class="lead">Understand Your Goals</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores atque
                        consequuntur cum est nemo possimus quia, quis tempora ullam? Culpa dolorem exercitationem
                        facere
                        fugit, id ipsa nihil sequi vel.</p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores atque
                            consequuntur cum est nemo possimus quia, quis tempora ullam? Culpa dolorem exercitationem
                            facere
                            fugit, id ipsa nihil sequi vel.</p>
                    </div>
                </div>
                <div class="row justify-content-center m-lg-5 p-sm-3 welcome-panel">
                    <div class="col-4">
                        <p class="lead">Plan Your Future</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores atque
                            consequuntur cum est nemo possimus quia, quis tempora ullam? Culpa dolorem exercitationem
                            facere
                            fugit, id ipsa nihil sequi vel.</p>
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
                    <p>We don't want to get you easy money. We want to understand your long-term plan - and how we can
                        help
                        you grow your business. Set up a time to talk to us about your goals today.</p>
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
