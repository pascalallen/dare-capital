@extends('layouts.app')

@push('styles')
    <style>
        @media (min-width: 992px) {
            .dare-to-grow-card {
                bottom: 100px;
            }

            .dare-to-give-card {
                bottom: 200px;
            }
        }

        .section-heading {
            color: #6e748e;
            font-family: 'Nunito', sans-serif;
            font-size: 42px;
            font-weight: 400;
            text-transform: uppercase;
            text-align: center;
        }

        .figure-caption {
            color: #31364f;
            font-family: 'Nunito', sans-serif;
            font-size: 20px;
            font-weight: 300;
        }
    </style>
@endpush

@section('content')
    <div
        style="background-image: url('images/austin-skyline.png'); background-repeat: no-repeat; background-size: cover; height: 55vw;">
        <div style="padding-top: 4%; margin-left: 5%;">
            <img style=" width: 15%;
          max-width: 400px;
          min-width: 90px;
          cursor: pointer;
          height: auto;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}"
                 alt="Dare Logo" xmlns="http://www.w3.org/1999/html" onclick="window.location.href = '/';">
            <div style="margin-top: 80px;
                        color: #ffffff;
                            font-family: 'Nunito', sans-serif;
                        font-size: 42px;
                        font-weight: 300;
                        line-height: 59px;">
                Working capital<br>
                for growing companies.<br>
                <button style="width: 185px;
        height: 50px;
        box-shadow: 0 10px 25px 1px rgba(255, 159, 0, 0.14);
        background-color: #3a888b;margin-top: 68px;font-family: 'Nunito', sans-serif;color: #ffffff;border: #3a888b;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 30px;"
                        onclick="document.getElementById('contact-us-form').scrollIntoView({ behavior: 'smooth' });">
                    Apply for Funding
                </button>
            </div>
        </div>
    </div>
    <div class="row text-center mx-md-5">
        <div class="col-md-4" style="margin: 50px auto">
            <img src="{{ asset('images/shutterstock_1085127647.png') }}">
            <div style="
                            margin-top: 25px;
                            margin-bottom: 25px;
                            color: #3a888b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 29px;">DARE TO BUILD
            </div>
            <div
                style="padding: 30px; text-align: left;  box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                                    color: #011f4b;
                                    font-family: 'Nunito', sans-serif;
                                    font-size: 28px;
                                    line-height: 32px;
                                    font-weight: 100;
                                    ">A financing
                    relationship you can
                    <strong style="font-weight: 900">build the future</strong> on.
                </div>
                <div style="
                                margin-top: 10px;
                                color: #6e748e;
                                font-family: 'Nunito', sans-serif;
                                font-size: 21px;
                                font-weight: 400;
                                line-height: 27px;
                                letter-spacing: 1.05px;">Have outstanding AR? Want a steadier cashflow? Need a line of
                    credit,
                    but you don’t fit in a bank’s box?
                    We’re here to help, and we love a challenge.
                </div>
                <div style="padding-top: 15px;
        "><a style="
                                color: #3c8685;
                                font-family: 'Nunito', sans-serif;
                                font-size: 16px;
                                font-weight: 900;" href="{{ route('about') }}">Read More >></a></div>
            </div>
        </div>
        <div class="col-md-4 dare-to-grow-card" style="margin: 50px auto">
            <img src="{{ asset('images/shutterstock_1564227556.png') }}">
            <div style="
                            margin-top: 25px;
                            margin-bottom: 25px;
                            color: #3a888b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 29px;">DARE TO GROW
            </div>
            <div
                style="padding: 30px; text-align:left; box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                                    color: #011f4b;
                                    font-family: 'Nunito', sans-serif;
                                    font-size: 28px;
                                    line-height: 32px;
                                    font-weight: 300;
                                    ">
                    <strong style="font-weight: 900">A partnership</strong> you
                    won’t have to sign
                    away equity for.
                </div>
                <div style="
                                margin-top: 10px;
                                color: #6e748e;
                                font-family: 'Nunito', sans-serif;
                                font-size: 21px;
                                font-weight: 400;
                                line-height: 27px;
                                letter-spacing: 1.05px;">We can help you grow, the right way, at the right pace. With
                    working
                    capital financing, you don’t have to give up equity or mortgage your future−but you do get a
                    financing partner invested in your success.
                </div>
                <div style="padding-top: 15px;"><a style="
                                color: #3c8685;
                                font-family: 'Nunito', sans-serif;
                                font-size: 16px;
                                font-weight: 900;" href="{{ route('about') }}">Read More >></a></div>
            </div>
        </div>
        <div class="col-md-4 dare-to-give-card" style="margin: 50px auto">
            <img src="{{ asset('images/Vector_Smart_Object.png') }}">
            <div style="
                            margin-top: 25px;
                            margin-bottom: 25px;
                            color: #3a888b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 29px;">DARE TO GIVE
            </div>
            <div
                style="padding: 30px; text-align:left; box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                                    color: #011f4b;
                                    font-family: 'Nunito', sans-serif;
                                    font-size: 28px;
                                    line-height: 32px;
                                    font-weight: 300;
                                    ">A resource
                    you can rely on
                    for
                    <strong style="font-weight: 900">more than financing</strong>.
                </div>
                <div style="
                                margin-top: 10px;
                                color: #6e748e;
                                font-family: 'Nunito', sans-serif;
                                font-size: 21px;
                                font-weight: 400;
                                line-height: 27px;
                                letter-spacing: 1.05px;">We’ve worked with 1,000+ companies in every stage of growth.
                    We’ve seen
                    it all;
                    we know all the red flags, and we can usually help with obstacles large and small.
                </div>
                <div class="row" style="padding-top: 15px;padding-left: 15px;
                                "><a style="
                                color: #3c8685;
                                font-family: 'Nunito', sans-serif;
                                font-size: 16px;
                                font-weight: 900;" href="{{ route('about') }}">Read More >></a></div>
            </div>
        </div>

    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100"
         style="position: relative; bottom: 100px">
    <div class="row text-center ml-0 mr-0">
        <div class="col">
            <h1 class="section-heading">INDUSTRIES WE SERVE</h1>
            <div class="row justify-content-center mt-5">
                <figure class="figure mx-5">
                    <img src="{{ asset('images/Vector_Smart_Object (1).png') }}" class="figure-img img-fluid" alt="">
                    <figcaption class="figure-caption text-center">Manufacturing</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img src="{{ asset('images/Vector_Smart_Object (6).png') }}" class="figure-img img-fluid" alt="">
                    <figcaption class="figure-caption text-center">Staffing</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img src="{{ asset('images/Vector_Smart_Object (3).png') }}" class="figure-img img-fluid" alt="">
                    <figcaption class="figure-caption text-center">Oil & Gas<br>Services</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img src="{{ asset('images/Vector_Smart_Object (4).png') }}" class="figure-img img-fluid" alt="">
                    <figcaption class="figure-caption text-center">B2B Services</figcaption>
                </figure>
            </div>
            <div class="row justify-content-center">
                <figure class="figure mx-5">
                    <img src="{{ asset('images/Vector_Smart_Object (5).png') }}" class="figure-img img-fluid" alt="">
                    <figcaption class="figure-caption text-center">Construction</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img src="{{ asset('images/Vector_Smart_Object (2).png') }}" class="figure-img img-fluid" alt="">
                    <figcaption class="figure-caption text-center">Wholesale<br>Distributors</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img src="{{ asset('images/Vector_Smart_Object (7).png') }}" class="figure-img img-fluid" alt="">
                    <figcaption class="figure-caption text-center">IT Services</figcaption>
                </figure>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100">
    <h1 class="section-heading">WHAT PEOPLE<br>ARE SAYING</h1>
    <div class="row text-center mx-md-5">

        <div class="col-md-4" style="margin: 25px auto">
            <div
                style="height: 315px; padding: 30px; text-align: left;  box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                color: #515b69;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                font-weight: 400;
                line-height: 34px;
                            ">Chris Croom, CEO of Aegis Energy Risk
                </div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">“I have seen firsthand the positive impact Cole on his clients,
                    assisting them to capitalize on opportunity and reach their maximum potential. There is no one else
                    I would recommend as strongly.”
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin: 25px auto">
            <div
                style="height: 315px; padding: 30px; text-align: left;  box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                color: #515b69;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                font-weight: 400;
                line-height: 34px;
                            ">Carrie Arsenault, Founder of Accountability Resources, LLC
                </div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">“Cole will take the time to understand your business, and provide a
                    solution that is in the best interest of your needs.”
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin: 25px auto">
            <div
                style="height: 315px; padding: 30px; text-align: left;  box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                color: #515b69;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                font-weight: 400;
                line-height: 34px;
                            ">Arlen, CEO of design & engineering firm
                </div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;
              ">“Debra always does what she says she’ll do. She’s helped us through rough spots and assisted on critical
                    decisions. Our relationship has been critical to our company's success.”
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="row" style="margin-top: 42px;">--}}
    {{--        <div class="col-md-4 offset-md-4 text-center">--}}
    {{--        <a style="--}}
    {{--        padding: 10px 14px;--}}
    {{--box-shadow: 0 8px 16px 1px rgba(18, 18, 76, 0.14);--}}
    {{--background-color: #3a888b;color: white;border-radius: 50%;  margin-right: 20px"><i class="fas fa-arrow-left"></i></a>--}}
    {{--        <a style="--}}
    {{--        padding: 10px 14px;--}}
    {{--box-shadow: 0 8px 16px 1px rgba(19, 19, 78, 0.14);--}}
    {{--background-color: #03396c;color: white;border-radius: 50%; "><i class="fas fa-arrow-right"></i></a>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100">
    <h1 class="section-heading">Ready to<br>get financing?</h1>
    <div class="row justify-content-center my-5 ml-0 mr-0"
         style="letter-spacing: 0.57px;font-size: 19px;line-height: 30px;color: #292c78;">
        <div class="col-md-4" style="padding: 50px">
            <span style="
            font-family: 'Nunito', sans-serif;
            font-weight: 900;">We want to help you grow and build without worrying about cashflow.</span>
            <br>
            <span style="
            font-family: 'Nunito', sans-serif;">Leave us your name and contact information below, and one of our executives will give you a call as soon as possible.</span>
            <div style="
            margin-top: 30px;
            color: #3a888b;
            font-family: 'Nunito', sans-serif;
            font-size: 20px;
            font-weight: 400;
            line-height: 30px;"><span style="
            font-weight: 900;">Phone:</span> <a style="color: #3a888b;" href="tel:1-512-886-3273">512-886-<span style="
            font-weight: 900;">DARE</span></a></div>
        </div>
        <div class="col-md-4">
            <div id="contact-us-form" class="cognito"
                 style="padding: 30px;box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <script src="https://services.cognitoforms.com/s/xVHxdnmaP0uDY40yI9wkMw"></script>
                <script>Cognito.load("forms", {id: "2"});</script>
            </div>
        </div>
    </div>
    @include('includes.get-started')
    @include('includes.footer')
@endsection
