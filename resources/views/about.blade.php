@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    @component('components.banner')
        @slot('image')
            {{ asset('images/dallas_skyline_6_lined_lr.png') }}
        @endslot
        @slot('height')
            45vw
        @endslot
    @endcomponent
    <div class="row about-section-row">
        <div class="col-md-8 mx-auto about-section-col">
            <div class="about-section-header">WHO WE ARE</div>
            <div class="about-section-body">
                <span
                    class="about-section-main-phrase">We’re the financial partner you’ve always wanted on your team. </span>
                We have a combined 60 years of experience helping entrepreneurs build and grow; we’ve lent over 6
                billion dollars to fund working capital needs. Obstacles? Complications? You name it, we’ve seen it
                - and overcome it. We love forming long-term relationships with growing companies; we especially
                love getting to know you, your goals, and your needs. We’ll support your success as long as you need
                us.
            </div>
        </div>
    </div>
    <div class="row about-section-row">
        <div class="col-md-8 mx-auto about-section-col">
            <div class="about-section-header">WHAT WE DO</div>
            <div class="about-section-body">
                Do you need working capital to grow? Have outstanding invoices you'd love to get paid off today, not
                in 30 or 60 days? We factor accounts receivables and provide lines of credit for growing companies.
                <span class="about-section-main-phrase">We’ll be there to help you grow and scale; we’ll be there when you need advice or an introduction; and when there are problems, we strive to be your first call.</span>
                We’ll always tell you the truth−good news and bad news−and share everything that informs our
                decision making.
            </div>
        </div>
    </div>
    <div class="row about-section-row">
        <div class="col-md-8 mx-auto about-section-col">
            <div class="about-section-header">WHY WE DO IT</div>
            <div class="about-section-body">
                <span class="about-section-main-phrase">We’re really good at it! We’ve grown thousands of companies, most of whom have worked with us for years. And we know what it takes.</span>
                We’ve seen that successful businesses are built from a giving mindset, by courageous entrepreneurs
                who know their vulnerabilities, own their failures, and turn both into their biggest strengths.
                We've seen that the best measure of long-term success is in how a business treats its smallest
                partner. In giving, entrepreneurs foster trust and build relationships. When they dare to grow, we
                can provide the financial platform and trusted partnership they need to build the future that
                achieves their goals.
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100" alt="Dare Capital">
    <div class="row justify-content-center text-center core-values-row">
        <div class="col-md-4 core-values-col">
            <div class="core-values-header">"A Team" Effort</div>
            <div class="core-values-body">
                <span class="core-values-main-phrase d-block">We are more together than we are alone.</span>
                Our team is committed to working in lockstep with each other and our clients toward consistent long-term
                success.
            </div>
        </div>
        <div class="col-md-4 core-values-col">
            <div class="core-values-header">Dare to Give, First</div>
            <div class="core-values-body">
                <span class="core-values-main-phrase d-block">In Latin, "dare" means "to give."</span>
                We believe in giving our best, putting our best foot forward, and working with clients who dare to give
                trust, transparency, and match our best with their own.
            </div>
        </div>
    </div>
    <div class="row justify-content-center text-center core-values-row">
        <div class="col-md-4 core-values-col">
            <div class="core-values-header">Further & Onwards</div>
            <div class="core-values-body">
                <span class="core-values-main-phrase d-block">There is always another improvement to make.</span>
                We take a growth mindset approach to our business and our clients' success.
            </div>
        </div>
        <div class="col-md-4 core-values-col">
            <div class="core-values-header">Radical Transparency</div>
            <div class="core-values-body">
                <span class="core-values-main-phrase d-block">We strive to never surprise anyone with anything.</span>
                We will always share information − good or bad − with each other and with our clients, explaining every
                decision we make to the best of our ability.
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100" alt="Dare Capital">
    <h1 class="display-4 text-center">MEET OUR MANAGEMENT</h1>
    <div class="row justify-content-center mr-0 ml-0">
        <div class="col-md-4" style="padding: 50px 40px;
        margin: 50px 15px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
            <img src="{{ asset('storage/avatars/cole-harmonson.png') }}">
            <div style="
            color: #3a888b;
            font-size: 28px;
            line-height: 25px;
            margin-top: 15px;
            font-weight: 900;
            display: inline-block;
            letter-spacing: 0.84px;">COLE HARMONSON<br>
                <span style="font-weight: 400;letter-spacing: 0.84px;">co-founder and CEO</span>
            </div>
            <div style="margin-top: 5px;
            color: #011f4b;
            font-size: 18px;
            font-weight: 400;">From the very beginning of his career, Cole has recognized the transformative value
                of factoring and asset-based lending to manage cashflow for growing companies without impacting
                equity. In 1996, he founded State Bank’s factoring and asset based lending business; when they sold
                their business in 2007, Cole took the leap into entrepreneurship and founded Far West Capital, which
                had a successful bank exit in 2018 after supporting hundreds of companies’ growth.
            </div>
            <br>
            <a href="mailto:cole@darebizcapital.com" style="color: #3a888b;">Email Cole here</a>, or give him a call
            at <a href="tel:1-512-886-3272" style="color: #3a888b;">512-886-DARE x 101</a>
        </div>
        <div class="col-md-4" style="padding: 50px 40px;
        margin: 50px 15px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
            <img src="{{ asset('storage/avatars/debra-zukonik.png') }}">
            <div style="
            color: #3a888b;
            font-size: 28px;
            line-height: 25px;
            margin-top: 15px;
            font-weight: 900;
            display: inline-block;
            letter-spacing: 0.84px;">DEBRA ZUKONIK<br>
                <span style="font-weight: 400;letter-spacing: 0.84px;">co-founder and CCO</span>
            </div>
            <div style="margin-top: 5px;
            color: #011f4b;
            font-size: 18px;
            font-weight: 400;">Debra Zukonik is a well-known and respected leader in factoring and asset-based
                lending, with over 30 years’ experience. Her risk-management expertise is unparalleled in the
                working capital industry. Prior to joining Dare Capital as Chief Credit Officer, she was the
                President and Partner of Vertex Financial, a leading Texas-based factor, from 2001 to 2017, and
                served as Chief Credit Officer of BAMFi
                from 2017 to 2019.
            </div>
            <br>
            <a href="mailto:debra@darebizcapital.com" style="color: #3a888b;">Email Debra here</a>, or give her a
            call at <a href="tel:1-214-329-9922" style="color: #3a888b;">512-886-DARE x 102</a>
        </div>
    </div>
    @include('includes.visit-blog')
    @include('includes.get-started')
    @include('includes.footer')
@endsection
