@extends('layouts.app')

@section('content')
    <div class="container mw-100 welcome-container">

        @if (session('status'))
            <div class="alert alert-success position-fixed mt-5 col-4 offset-4" style="z-index: 1">
                {{ session('status') }}
            </div>
        @endif

        <div class="row mb-4">
            <img src="{{ asset('/images/plants-sprouting.jpg') }}" alt="quarters-plants.jpg"
                 class="banner-image"/>
        </div>

        <div class="row text-light">
            <h1 class="display-5 mx-auto">How We Help</h1>
            <div class="row justify-content-center mt-lg-1 p-sm-3 welcome-panel w-100">
                <div class="col-md-4 welcome-panel-text px-5 py-5" style="background-color: #242363; color: #a7a9ac">
                    <h3>Understand Your Goals</h3>
                    <p>What do you want? What do you envision your company, your life, looking like in five years? We
                        want to help you build your future and grow toward your goals.</p>
                </div>
                <div class="col-md-4 welcome-panel-image">
                    <img src="//via.placeholder.com/350" class="img-fluid float-right shadow-lg">
                </div>
            </div>
            <div class="row justify-content-center p-sm-3 welcome-panel w-100">
                <div class="col-md-4 desktop-panel-image welcome-panel-image">
                    <img src="//via.placeholder.com/350" class="img-fluid float-left shadow-lg">
                </div>
                <div class="col-md-4 welcome-panel-text px-5 py-5" style="background-color: #242363; color: #a7a9ac">
                    <h3>Document Your Path</h3>
                    <p>We’ll work with you to understand your past, present, and future. Have a detour you’re not proud
                        of? We can overcome most challenges and plot an achievable path forward.</p>
                </div>
                <div class="col-md-4 mobile-panel-image welcome-panel-image">
                    <img src="//via.placeholder.com/350" class="img-fluid float-left shadow-lg">
                </div>
            </div>
            <div class="row justify-content-center mb-lg-5 p-sm-3 welcome-panel w-100">
                <div class="col-md-4 welcome-panel-text px-5 py-5" style="background-color: #242363; color: #a7a9ac">
                    <h3>Plan Your Future</h3>
                    <p>We’re not just here to help with your cashflow. We’re a resource you can depend on - whether the
                        help you need is financial - or just an introduction to the right person.</p>
                </div>
                <div class="col-md-4 welcome-panel-image">
                    <img src="//via.placeholder.com/350" class="img-fluid float-right shadow-lg">
                </div>
            </div>
        </div>
        <div class="row mb-5 text-light" id="apply-now-form">
            <div class="cognito col-lg-6 offset-lg-3">
                <h5 class="lead">Talk to us. Let us understand your goals.</h5>
                <p>We want to help you grow and build. Leave us your name and number below, and one of our executives
                    will give you a call as soon as possible.</p>
                <script src="https://services.cognitoforms.com/s/xVHxdnmaP0uDY40yI9wkMw"></script>
                <script>Cognito.load("forms", {id: "2"});</script>
            </div>
        </div>
    </div>

@endsection
