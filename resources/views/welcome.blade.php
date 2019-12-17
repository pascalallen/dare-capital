@extends('layouts.app')

@section('content')
    <div class="container mw-100 m-0 mt-5 pb-5">

        @if (session('status'))
            <div class="alert alert-success position-fixed m-2">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
            <div class="jumbotron w-100" id="landing-page-banner">
                <h1 class="display-4">Dare Capital</h1>
                <p class="lead">Dare to dream. Dare to build. Dare to grow. Dare to breathe.</p>
            </div>
        </div>

        <div class="row">
            <h1 class="display-5 mx-auto d-block">How We Help</h1>
            <div class="row justify-content-center m-lg-5 p-sm-3">
                <div class="col-lg-4">
                    <p class="lead">Understand Your Goals</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores atque consequuntur cum est nemo possimus quia, quis tempora ullam? Culpa dolorem exercitationem facere fugit, id ipsa nihil sequi vel.</p>
                </div>
                <div class="col-lg-4">
                    <img src="//via.placeholder.com/350" class="img-fluid float-right">
                </div>
            </div>
            <div class="row justify-content-center m-lg-5 p-sm-3">
                <div class="col-lg-4">
                    <img src="//via.placeholder.com/350" class="img-fluid float-left">
                </div>
                <div class="col-lg-4">
                    <p class="lead">Document Your Path</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores atque consequuntur cum est nemo possimus quia, quis tempora ullam? Culpa dolorem exercitationem facere fugit, id ipsa nihil sequi vel.</p>
                </div>
            </div>
            <div class="row justify-content-center m-lg-5 p-sm-3">
                <div class="col-lg-4">
                    <p class="lead">Plan Your Future</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores atque consequuntur cum est nemo possimus quia, quis tempora ullam? Culpa dolorem exercitationem facere fugit, id ipsa nihil sequi vel.</p>
                </div>
                <div class="col-lg-4">
                    <img src="//via.placeholder.com/350" class="img-fluid float-right">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="jumbotron w-100" id="get-financing-banner">
                <h1 class="display-4">Dare to Grow Your Business</h1>
                <p class="lead">Dare to dream. Dare to build. Dare to grow. Dare to breathe.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <p class="lead">Talk to us. Let us understand your goals.</p>
                <p>We don't want to get you easy money. We want to understand your long-term plan - and how we can help
                    you grow your business. Set up a time to talk to us about your goals today.</p>
            </div>
        </div>

        <div class="row">
            <form action="{{ route('contact') }}" method="post" class="col-lg-4 offset-lg-4 needs-validation"
                  novalidate>
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="companyName">Company name</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" required>
                </div>
                <div class="form-group">
                    <label for="industry">Industry</label>
                    <input type="text" class="form-control" id="industry" name="industry">
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="companySize">Company size</label>
                        <select class="form-control" id="companySize" name="companySize">
                            <option>0-50</option>
                            <option>50-150</option>
                            <option>150-500</option>
                            <option>500+</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="phoneNumber">Phone number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Contact email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <input type="hidden" name="recaptchaToken" id="recaptchaToken" required>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="row justify-content-center">
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

    <script src="https://www.google.com/recaptcha/api.js?render=6LcjEsgUAAAAAHnO0KBQyeLpcKE42lta1nj67FU6"></script>
    <script type="text/javascript">
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcjEsgUAAAAAHnO0KBQyeLpcKE42lta1nj67FU6').then(function (token) {
                document.getElementById('recaptchaToken').value = token;
            });
        });

        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection

