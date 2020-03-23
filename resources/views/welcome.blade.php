@extends('layouts.app')

@section('content')
    @component('components.banner')
        @slot('image')
            {{ asset('images/homepage_header_pic_lined_web.png') }}
        @endslot
        @slot('height')
            55vw
        @endslot
    @endcomponent
    <div class="row welcome-page-section text-center mx-md-5">
        <div class="col-md-4 welcome-page-offset-col my-5">
            <img src="{{ asset('images/shutterstock_1085127647.png') }}" alt="Dare Capital">
            <div class="welcome-page-section-header my-4"><strong>DARE TO BUILD</strong></div>
            <div class="welcome-page-shadow-box">
                A financing relationship you can <strong>build the future</strong> on.
                <div class="welcome-page-shadow-box-body mt-2">
                    Have outstanding AR? Want a steadier cashflow? Need a line of credit, but you don’t fit in a bank’s
                    box? We’re here to help, and we love a challenge.
                </div>
                <br>
                <a class="welcome-page-shadow-box-link" href="{{ route('about') }}"><strong>Read More >></strong></a>
            </div>
        </div>
        <div class="col-md-4 welcome-page-offset-col my-5">
            <img src="{{ asset('images/shutterstock_1564227556.png') }}" alt="Dare Capital">
            <div class="welcome-page-section-header my-4"><strong>DARE TO GROW</strong></div>
            <div class="welcome-page-shadow-box">
                <strong>A partnership</strong> you won’t have to sign away equity for.
                <div class="welcome-page-shadow-box-body mt-2">
                    We can help you grow, the right way, at the right pace. With working capital financing, you don’t
                    have to give up equity or mortgage your future−but you do get a financing partner invested in your
                    success.
                </div>
                <br>
                <a class="welcome-page-shadow-box-link" href="{{ route('about') }}"><strong>Read More >></strong></a>
            </div>
        </div>
        <div class="col-md-4 welcome-page-offset-col my-5">
            <img src="{{ asset('images/Vector_Smart_Object.png') }}" alt="Dare Capital">
            <div class="welcome-page-section-header my-4"><strong>DARE TO GIVE</strong></div>
            <div class="welcome-page-shadow-box">
                A resource you can rely on for <strong>more than financing</strong>.
                <div class="welcome-page-shadow-box-body mt-2">
                    We’ve worked with 1,000+ companies in every stage of growth. We’ve seen it all; we know all the
                    red flags, and we can usually help with obstacles large and small.
                </div>
                <br>
                <a class="welcome-page-shadow-box-link" href="{{ route('about') }}"><strong>Read More >></strong></a>
            </div>
        </div>

    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100" alt="Dare Capital">
    <div class="row welcome-page-section text-center ml-0 mr-0 mt-0">
        <div class="col">
            <h1 class="display-4">INDUSTRIES WE SERVE</h1>
            <div class="row justify-content-center mt-5">
                <figure class="figure mx-5">
                    <img
                        src="{{ asset('images/Vector_Smart_Object (1).png') }}"
                        class="figure-img img-fluid"
                        alt="Dare Capital">
                    <figcaption class="figure-caption text-center">Manufacturing</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img
                        src="{{ asset('images/Vector_Smart_Object (6).png') }}"
                        class="figure-img img-fluid"
                        alt="Dare Capital">
                    <figcaption class="figure-caption text-center">Staffing</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img
                        src="{{ asset('images/Vector_Smart_Object (5).png') }}"
                        class="figure-img img-fluid"
                        alt="Dare Capital">
                    <figcaption class="figure-caption text-center">Construction</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img
                        src="{{ asset('images/Vector_Smart_Object (4).png') }}"
                        class="figure-img img-fluid"
                        alt="Dare Capital">
                    <figcaption class="figure-caption text-center">B2B Services</figcaption>
                </figure>
            </div>
            <div class="row justify-content-center">
                <figure class="figure mx-5">
                    <img
                        src="{{ asset('images/Vector_Smart_Object (3).png') }}"
                        class="figure-img img-fluid"
                        alt="Dare Capital">
                    <figcaption class="figure-caption text-center">Oil & Gas<br>Services</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img
                        src="{{ asset('images/Vector_Smart_Object (2).png') }}"
                        class="figure-img img-fluid"
                        alt="Dare Capital">
                    <figcaption class="figure-caption text-center">Wholesale<br>Distributors</figcaption>
                </figure>
                <figure class="figure mx-5">
                    <img
                        src="{{ asset('images/Vector_Smart_Object (7).png') }}"
                        class="figure-img img-fluid"
                        alt="Dare Capital">
                    <figcaption class="figure-caption text-center">IT Services</figcaption>
                </figure>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100" alt="Dare Capital">
    <h1 class="display-4 text-center">WHAT PEOPLE ARE SAYING</h1>
    <div class="row welcome-page-section mx-md-5">
        <div class="col-md-4 welcome-page-quotes-col my-4">
            <div class="welcome-page-shadow-box">
                <div class="welcome-page-quote-author"><strong>Chris Croom, CEO of Aegis Energy Risk</strong></div>
                <div class="welcome-page-quote mt-3">
                    “I have seen firsthand the positive impact Cole on his clients, assisting them to capitalize on
                    opportunity and reach their maximum potential. There is no one else I would recommend as strongly.”
                </div>
            </div>
        </div>
        <div class="col-md-4 welcome-page-quotes-col my-4">
            <div class="welcome-page-shadow-box">
                <div class="welcome-page-quote-author">
                    <strong>Carrie Arsenault, Founder of Accountability Resources, LLC</strong>
                </div>
                <div class="welcome-page-quote mt-3">
                    “Cole will take the time to understand your business, and provide a solution that is in the best
                    interest of your needs.”
                </div>
            </div>
        </div>
        <div class="col-md-4 welcome-page-quotes-col my-4">
            <div class="welcome-page-shadow-box">
                <div class="welcome-page-quote-author"><strong>Arlen, CEO of design & engineering firm</strong></div>
                <div class="welcome-page-quote mt-3">
                    “Debra always does what she says she’ll do. She’s helped us
                    through rough spots and assisted on critical decisions. Our relationship has been critical to our
                    company's success.”
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100" alt="Dare Capital">
    @include('includes.get-started', ['marginTop' => 0])
    @include('includes.contact-us')
    @include('includes.footer')
@endsection
