@extends('layouts.app')

@section('content')
    <div class="container mw-100 m-0 mt-5 pb-5">

        <div class="row flex-column justify-content-center mb-5" id="landing-page-banner">
            <div class="text-center col-4 offset-4">
                <h1 class="display-3">Dare Capital</h1>
                <h4>Dare to dream.<br>Dare to build.<br>Dare to grow.<br>Dare to breathe.</h4>
            </div>
        </div>

        <h1 class="display-5 text-center">{{ $post->title }}</h1>
        <div class="row">
            <div class="col-4 offset-4">
                <img class="img-fluid" src="{{ asset('storage/images/'.$post->image) }}"
                     alt="{{ $post->image }}">
            </div>
        </div>
        <div class="row">
            <blockquote class="blockquote col-4 offset-4">
                {!! $post->body !!}
                <footer class="blockquote-footer text-right">{{ $post->user->name }}
                    <br>{{ date_format($post->created_at, 'M d, Y') }}</footer>
            </blockquote>
        </div>

    </div>
@endsection
