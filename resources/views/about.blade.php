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
    <div class="row about-page-section">
        <div class="col-md-8 mx-auto about-page-section-col">
            <div class="about-page-section-header"><strong>WHO WE ARE</strong></div>
            <div class="about-page-section-body">
                <strong>We’re the financial partner you’ve always wanted on your team. </strong>
                We have a combined 60 years of experience helping entrepreneurs build and grow; we’ve lent over 6
                billion dollars to fund working capital needs. Obstacles? Complications? You name it, we’ve seen it
                - and overcome it. We love forming long-term relationships with growing companies; we especially
                love getting to know you, your goals, and your needs. We’ll support your success as long as you need
                us.
            </div>
        </div>
    </div>
    <div class="row about-page-section">
        <div class="col-md-8 mx-auto about-page-section-col">
            <div class="about-page-section-header"><strong>WHAT WE DO</strong></div>
            <div class="about-page-section-body">
                Do you need working capital to grow? Have outstanding invoices you'd love to get paid off today, not
                in 30 or 60 days? We factor accounts receivables and provide lines of credit for growing companies.
                <strong>We’ll be there to help you grow and scale; we’ll be there when you need advice or an
                    introduction; and when there are problems, we strive to be your first call.</strong>
                We’ll always tell you the truth−good news and bad news−and share everything that informs our
                decision making.
            </div>
        </div>
    </div>
    <div class="row about-page-section">
        <div class="col-md-8 mx-auto about-page-section-col">
            <div class="about-page-section-header"><strong>WHY WE DO IT</strong></div>
            <div class="about-page-section-body">
                <strong>We’re really good at it! We’ve grown thousands of companies, most of whom have worked with us
                    for years. And we know what it takes.</strong>
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
    <div class="row justify-content-center text-center about-page-section">
        <div class="col-md-4 about-page-section-col">
            <div class="about-page-section-header"><strong>"A Team" Effort</strong></div>
            <div class="about-page-section-body">
                <strong class="d-block">We are more together than we are alone.</strong>
                Our team is committed to working in lockstep with each other and our clients toward consistent long-term
                success.
            </div>
        </div>
        <div class="col-md-4 about-page-section-col">
            <div class="about-page-section-header"><strong>Dare to Give, First</strong></div>
            <div class="about-page-section-body">
                <strong class="d-block">In Latin, "dare" means "to give."</strong>
                We believe in giving our best, putting our best foot forward, and working with clients who dare to give
                trust, transparency, and match our best with their own.
            </div>
        </div>
    </div>
    <div class="row justify-content-center text-center about-page-section">
        <div class="col-md-4 about-page-section-col">
            <div class="about-page-section-header"><strong>Further & Onwards</strong></div>
            <div class="about-page-section-body">
                <strong class="d-block">There is always another improvement to make.</strong>
                We take a growth mindset approach to our business and our clients' success.
            </div>
        </div>
        <div class="col-md-4 about-page-section-col">
            <div class="about-page-section-header"><strong>Radical Transparency</strong></div>
            <div class="about-page-section-body">
                <strong class="d-block">We strive to never surprise anyone with anything.</strong>
                We will always share information − good or bad − with each other and with our clients, explaining every
                decision we make to the best of our ability.
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100" alt="Dare Capital">
    <h1 class="display-4 text-center" id="our-team">MEET OUR MANAGEMENT</h1>
    <div class="row justify-content-center about-page-section">
        <div class="col-md-4 about-page-section-col">
            <img src="{{ asset('storage/avatars/cole-harmonson.png') }}" alt="Dare Capital">
            <div class="about-page-section-header">
                <strong>COLE HARMONSON</strong>
                <br>
                <span>co-founder and CEO</span>
            </div>
            <div class="about-page-bio-body">
                From the very beginning of his career, Cole has recognized the transformative value
                of factoring and asset-based lending to manage cashflow for growing companies without impacting
                equity. In 1996, he founded State Bank’s factoring and asset based lending business; when they sold
                their business in 2007, Cole took the leap into entrepreneurship and founded Far West Capital, which
                had a successful bank exit in 2018 after supporting hundreds of companies’ growth.
                <br>
                <br>
                <a href="mailto:cole@darebizcapital.com">Email Cole here</a>, or give him a call
                at <a href="tel:1-512-886-3272">512-886-DARE x 101</a>
            </div>
        </div>
        <div class="col-md-4 about-page-section-col">
            <img src="{{ asset('storage/avatars/debra-zukonik.png') }}" alt="Dare Capital">
            <div class="about-page-section-header">
                <strong>DEBRA ZUKONIK</strong>
                <br>
                <span>co-founder and CCO</span>
            </div>
            <div class="about-page-bio-body">
                Debra Zukonik is a well-known and respected leader in factoring and asset-based
                lending, with over 30 years’ experience. Her risk-management expertise is unparalleled in the
                working capital industry. Prior to joining Dare Capital as Chief Credit Officer, she was the
                President and Partner of Vertex Financial, a leading Texas-based factor, from 2001 to 2017, and
                served as Chief Credit Officer of BAMFi
                from 2017 to 2019.
                <br>
                <br>
                <a href="mailto:debra@darebizcapital.com">Email Debra here</a>, or give her a
                call at <a href="tel:1-214-329-9922">512-886-DARE x 102</a>
            </div>
        </div>
    </div>
    @include('includes.visit-blog')
    @include('includes.get-started')
    @include('includes.footer')
@endsection
