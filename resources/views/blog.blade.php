@extends('layouts.app')

@section('content')
    <div class="container mw-100 m-0 mt-5">

        <div class="row flex-column justify-content-center mb-5" id="landing-page-banner">
            <div class="text-center col-4 offset-4">
                <h1 class="display-3">Dare Capital</h1>
                <h4>Dare to dream.<br>Dare to build.<br>Dare to grow.<br>Dare to breathe.</h4>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-4">
                @foreach($posts['case-studies'] as $caseStudy)
                    <div class="row m-5">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('storage/images/'.$caseStudy->image) }}"
                                 alt="{{ $caseStudy->image }}">
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{ $caseStudy->title }}</h5>
                                <p class="card-text">{!! $caseStudy->body !!}</p>
                                <p class="card-text">{{ $caseStudy->user->name }} on {{ $caseStudy->created_at }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-4">
                @foreach($posts['education'] as $education)
                    <div class="row m-5">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('storage/images/'.$education->image) }}"
                                 alt="{{ $education->image }}">
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{ $education->title }}</h5>
                                <p class="card-text">{!! $education->body !!}</p>
                                <p class="card-text">{{ $education->user->name }} on {{ $education->created_at }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <script type="text/javascript">
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                $('.carousel').carousel();
            }, false);
        })();
    </script>
@endsection
