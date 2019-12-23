@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    <div class="container mw-100 m-0 mt-5">
        <div class="row flex-column justify-content-center mb-5" id="about-page-banner">
            <div class="text-center col-4 offset-4">
                <h1 class="display-3">About Dare Capital</h1>
                <h4>Dare to dream.<br>Dare to build.<br>Dare to grow.<br>Dare to breathe.</h4>
            </div>
        </div>
        <div class="row">
            <h1 class="display-5 mx-auto d-block">Our Process</h1>
            <div class="row m-5">
                <div class="col-md-4">
                    <p class="lead">Who we are</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis fugiat harum magni maiores
                        nobis quo reiciendis rem, similique temporibus veniam! Ab laudantium nobis odio perferendis
                        reprehenderit sequi similique vero voluptates.</p>
                </div>
                <div class="col-md-4">
                    <p class="lead">Why we do it</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis fugiat harum magni maiores
                        nobis quo reiciendis rem, similique temporibus veniam! Ab laudantium nobis odio perferendis
                        reprehenderit sequi similique vero voluptates.</p>
                </div>
                <div class="col-md-4">
                    <p class="lead">What inspires us</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis fugiat harum magni maiores
                        nobis quo reiciendis rem, similique temporibus veniam! Ab laudantium nobis odio perferendis
                        reprehenderit sequi similique vero voluptates.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="display-5 mx-auto d-block">Meet the Team</h1>
            @foreach($users as $user)
                <div class="row m-5 justify-content-center">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/avatars/'.$user->avatar) }}" alt="{{ $user->avatar }}"
                             class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <p class="lead">{{ $user->name }}</p>
                        <p>{{ $user->bio }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
