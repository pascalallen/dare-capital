@extends('layouts.app')

@section('title')
    Blog
@endsection

@section('content')
    <div class="container mw-100 m-0 pb-5">

        <div class="row mb-5">
            <img src="{{ asset('/images/people-sunrise.jpg') }}" alt="Stories"
                 class="banner-image"/>
        </div>

        <div class="row mb-5 justify-content-center text-light">
            <div class="col-md-4 my-auto">
                <div class="card bg-light shadow-lg mb-2 border-0">
                    <img class="card-img blog-index-image"
                         src="{{ asset('storage/images/'.$post->image) }}"
                         alt="{{ $post->image }}">
                    <div class="card-img-overlay text-dark">
                        <h1 class="display-5 card-title">{{ $post->title }}</h1>
                    </div>
                </div>
                <blockquote class="blockquote card-text">
                    {!! str_limit(strip_tags($post->body), $limit = 500, $end = '...') !!}
                    <footer
                        class="blockquote-footer text-right card-text mt-3">{{ $post->user->name }}
                        on {{ date_format($post->created_at, 'M d, Y') }}</footer>
                </blockquote>
            </div>
        </div>

    </div>
@endsection
