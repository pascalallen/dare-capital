@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    <div class="container mw-100 m-0 px-0 pb-5">
        <div class="row flex-column mb-5 bg-white" id="about-page-banner">
            <div class="col-2">
                <img src="{{ asset('images/Dare_Logo_AdmiralBlue_RGB.png') }}" class="banner-image img-fluid"
                     alt="Dare_Logo_AdmiralBlue_RGB.png"/>
            </div>
            <div class="text-center text-dark mb-4">
                <h4>Dare to build.<br>Dare to grow.<br>Dare to give.</h4>
            </div>
        </div>
        <div class="row text-light">
            <h1 class="display-5 mx-auto d-block">Our Process</h1>
            <div class="row mt-lg-5 about-column" style="background-color: #a7a9ac">
                <div class="col-md-4 offset-md-4 p-sm-3">
                    <h5 class="lead">Who we are</h5>
                    <p>We’re the financial partner you’ve always wanted on your team. Dare Capital is a commercial lending company founded on the principle of giving - giving trust with transparency, giving empathy with solutions, and giving support with the promise of a long-term commitment to your success.</p>
                </div>
            </div>
            <div class="row about-column" style="background-color: #6d6e71">
                <div class="col-md-4 offset-md-4 p-sm-3">
                    <h5 class="lead">Why we do it</h5>
                    <p>We’re really good at it! We’ve grown thousands of companies, most of whom have worked with us for years. And we know what it takes. We’ve seen that successful businesses are built from a giving mindset, by courageous entrepreneurs who know their vulnerabilities, own their failures, and turn both into their biggest strengths.<br/>We've seen that the best measure of long-term success is in how a business treats its smallest partner. In giving, entrepreneurs foster trust and build relationships. When they dare to grow, we can provide the financial platform and trusted partnership they need to build the future that achieves their goals.</p>
                </div>
            </div>
            <div class="row mb-lg-5 about-column" style="background-color: #a7a9ac">
                <div class="col-md-4 offset-md-4 p-sm-3">
                    <h5 class="lead">What we do</h5>
                    <p>Does your company have outstanding invoices? What about equipment, inventory, or other assets needed to grow your business? Need to cover payroll? That’s where we come in - but that’s just the beginning. We’ll be there to help you grow and scale; we’ll be there when you need advice or an introduction; and when there are problems, we strive to be your first call. We’ll always tell you the truth - good news and bad news - and share everything that informs our decision making.</p>
                </div>
            </div>
        </div>
        <div class="row text-light">
            <h1 class="display-5 mx-auto d-block">Meet the Team</h1>
            @foreach($users as $user)
                <div class="row m-5 justify-content-center">
                    <div class="col-md-4">
                        @if($user->avatar && asset('storage/avatars/'.$user->avatar))
                            <img src="{{ asset('storage/avatars/'.$user->avatar) }}" alt="{{ $user->avatar }}"
                                 class="img-fluid shadow-lg">
                        @else
                            <img src="//via.placeholder.com/500" class="img-fluid shadow-lg">
                        @endif
                    </div>
                    <div class="col-md-4">
                        <h5 class="lead">{{ $user->name }}</h5>
                        <p>{!!  nl2br($user->bio) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            let delay = 800;
            $('.about-column').each(function (i) {
                $(this).delay(delay).animate({
                    opacity: 1,
                }, 500);
                delay += 800;
            });
        });
    </script>
@endpush
