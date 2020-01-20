@extends('layouts.app')

@section('title')
    Blog
@endsection

@push('styles')
    <style>
        @media (max-width: 576px) {
            .banner-image {
                height: 163px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container mw-100 m-0 pb-5">

        <div class="row mb-5">
            <img src="{{ asset('/images/people-sunrise.jpg') }}" alt="Stories"
                 class="banner-image"/>
        </div>

        <div class="row mb-5 justify-content-center text-light">
            <h1 class="display-5">Stories</h1>
        </div>

        @foreach($posts as $post)
            <div class="row mb-5 blog-index-card justify-content-center text-light"
                 onclick="window.location.href = '/blog/{{ $post->slug }}';">
                <div class="col-md-4 my-auto">
                    <div class="card bg-dark text-white shadow-lg">
                        <img class="card-img blog-index-image"
                             src="{{ asset('storage/images/'.$post->image) }}"
                             alt="{{ $post->image }}">
                        <div class="card-img-overlay">
                            <h1 class="display-5 card-title">{{ $post->title }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote card-text">
                        {!! str_limit($post->body, 1000, ' ... ') !!}
                        <footer
                            class="blockquote-footer text-white text-right card-text">{{ $post->user->name }}
                            on {{ date_format($post->created_at, 'M d, Y') }}</footer>
                    </blockquote>
                </div>
            </div>
        @endforeach

        {{ $posts->links() }}
    </div>

@endsection
