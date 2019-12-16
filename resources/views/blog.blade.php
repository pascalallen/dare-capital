@extends('layouts.app')

@section('content')
    <div class="container mw-100 m-0 mt-5">

        <div class="row">
            <div class="jumbotron w-100" id="landing-page-banner">
                <h1 class="display-4">Dare Capital</h1>
                <p class="lead">Dare to dream. Dare to build. Dare to grow. Dare to breathe.</p>
            </div>
        </div>

        <div class="row justify-content-center m-lg-5 p-sm-3">

            <div class="col-lg-4">
                @foreach($posts['case-studies'] as $post)
                    <div class="row">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('storage/images/'.$post->image) }}"
                                 alt="{{ $post->image }}">
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->body }}</p>
                                <p class="card-text">{{ $post->user->name }} on {{ $post->created_at }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-lg-4">
                @foreach($posts['education'] as $education)
                    <div class="row">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('storage/images/'.$post->image) }}"
                                 alt="{{ $post->image }}">
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->body }}</p>
                                <p class="card-text">{{ $post->user->name }} on {{ $post->created_at }}</p>
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
