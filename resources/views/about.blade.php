@extends('layouts.app')

@section('content')
    <div class="container mw-100 m-0 mt-5">
        <div class="row">
            <div class="jumbotron w-100" id="about-page-banner">
                <h1 class="display-4">About Dare Capital</h1>
                <p class="lead">Dare to dream. Dare to build. Dare to grow. Dare to breathe.</p>
            </div>
        </div>
        <div class="row">
            <h1 class="display-5 mx-auto d-block">Our Process</h1>
            <div class="row m-lg-5 p-sm-3">
                <div class="col-lg-4">
                    <p class="lead">Who we are</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis fugiat harum magni maiores
                        nobis quo reiciendis rem, similique temporibus veniam! Ab laudantium nobis odio perferendis
                        reprehenderit sequi similique vero voluptates.</p>
                </div>
                <div class="col-lg-4">
                    <p class="lead">Why we do it</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis fugiat harum magni maiores
                        nobis quo reiciendis rem, similique temporibus veniam! Ab laudantium nobis odio perferendis
                        reprehenderit sequi similique vero voluptates.</p>
                </div>
                <div class="col-lg-4">
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
                <div class="row m-sm-5 p-sm-3 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('storage/avatars/'.$user->avatar) }}" alt="{{ $user->avatar }}"
                             class="img-thumbnail">
                    </div>
                    <div class="col-lg-4">
                        <p class="lead">{{ $user->name }}</p>
                        <p>{{ $user->bio }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
