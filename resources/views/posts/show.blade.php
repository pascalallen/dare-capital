@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div
        style="background-image: url({{  asset('images/austin_skyline_2_updated_web.png') }}); background-repeat: no-repeat; background-size: cover; height: 55vw;">
        <img style="margin-top: 4%; margin-left: 5%; width: 15%;
  max-width: 400px;
  min-width: 90px;
  cursor:pointer;
  height: auto;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}"
             alt="Dare Logo" xmlns="http://www.w3.org/1999/html" onclick="window.location.href = '/';">
        <div class="row" style="margin: 50px auto;">
            <div class="col-md-6 mx-auto" style="padding: 50px 40px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;z-index: 1">
                <img class="img-fluid"
                     src="{{ asset('storage/images/'.$post->image) }}"
                     alt="{{ $post->image }}">
                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 42px;
                font-weight: 800;
                text-transform: uppercase;">{{ $post->title }}</div>
                <div style="font-size: 28px">
                    <span style="font-weight: 700;">{{ $post->subtitle }}</span>
                    <div style="margin-top: 15px">{!! $post->body !!}</div>
                </div>
            </div>
        </div>
        @include('includes.get-started')
        @include('includes.footer')
    </div>
@endsection
