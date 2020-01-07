@extends('layouts.app')

@section('title')
    Blog
@endsection

@section('content')
    <div class="container mw-100 m-0 mt-5">

        <div class="row flex-column justify-content-center mb-5" id="landing-page-banner">
            <div class="text-center col-4 offset-4">
                <img src="{{ asset('images/Dare_Logo_AdmiralBlue_RGB.png') }}" class="banner-image img-fluid"/>
                <h4>Dare to build.<br>Dare to grow.<br>Dare to give.</h4>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-4">
                <h1 class="display-5">{{ $posts['case-studies']->first()->category->name }}</h1>
                @foreach($posts['case-studies'] as $caseStudy)
                    <div class="row m-5 blog-index-card shadow-lg"
                         onclick="window.location.href = '/blog/{{ $caseStudy->slug }}';">
                        <div class="card bg-dark text-white">
                            <img class="card-img blog-index-image"
                                 src="{{ asset('storage/images/'.$caseStudy->image) }}"
                                 alt="{{ $caseStudy->image }}">
                            <div class="card-img-overlay">
                                <h1 class="display-5 card-title">{{ $caseStudy->title }}</h1>
                                <blockquote class="blockquote card-text">
                                    {!! $caseStudy->body !!}
                                    <footer
                                        class="blockquote-footer text-white text-right card-text">{{ $caseStudy->user->name }}
                                        on {{ date_format($caseStudy->created_at, 'M d, Y') }}</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
                <h1 class="display-5">{{ $posts['education']->first()->category->name }}</h1>
                @foreach($posts['education'] as $education)
                    <div class="row m-5 blog-index-card shadow-lg"
                         onclick="window.location.href = '/blog/{{ $education->slug }}';">
                        <div class="card bg-dark text-white">
                            <img class="card-img blog-index-image"
                                 src="{{ asset('storage/images/'.$education->image) }}"
                                 alt="{{ $education->image }}">
                            <div class="card-img-overlay">
                                <h1 class="display-5 card-title">{{ $education->title }}</h1>
                                <blockquote class="blockquote card-text">
                                    {!! $education->body !!}
                                    <footer
                                        class="blockquote-footer text-white text-right card-text">{{ $education->user->name }}
                                        on {{ date_format($education->created_at, 'M d, Y') }}</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection

@push('styles')
    <style>
        .blog-index-card:hover {
            opacity: .9;
        }
    </style>
@endpush

@push('scripts')
    <script type="text/javascript">
        (function () {
            'use strict';

            const goToPost = (slug) => {
                console.log(slug)
            };

            window.addEventListener('load', function () {
                $('.carousel').carousel();
            }, false);
        })();
    </script>
@endpush
