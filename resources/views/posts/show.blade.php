@extends('layouts.app')

@section('title')
    Blog
@endsection

@section('content')
    <div class="container mw-100 m-0 mt-5 pb-5">

        <div class="row flex-column mb-5 bg-white" id="landing-page-banner">
            <div class="col-2">
                <img src="{{ asset('images/Dare_Logo_AdmiralBlue_RGB.png') }}" class="banner-image img-fluid"
                     alt="Dare_Logo_AdmiralBlue_RGB.png"/>
            </div>
            <div class="text-center text-dark mb-4">
                <h4>Dare to build.<br>Dare to grow.<br>Dare to give.</h4>
            </div>
        </div>

        <h1 class="display-5 text-center text-light">{{ $post->title }}</h1>
        <div class="row p-5">
            <div class="col-4 offset-4">
                <img class="img-fluid shadow-lg" src="{{ asset('storage/images/'.$post->image) }}"
                     alt="{{ $post->image }}">
            </div>
        </div>
        <div class="row text-light">
            <blockquote class="blockquote col-4 offset-4">
                {!! $post->body !!}
                <footer class="blockquote-footer text-right">{{ $post->user->name }}
                    on {{ date_format($post->created_at, 'M d, Y') }}</footer>
            </blockquote>
        </div>

    </div>
@endsection
