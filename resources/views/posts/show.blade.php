@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    @component('components.banner')
        @slot('image')
            {{ asset('images/dallas_skyline_1_lined_web.png') }}
        @endslot
        @slot('height')
            55vw
        @endslot
    @endcomponent
    <div class="row mr-0 ml-0">
        <div class="col-md-8 mx-auto" style="padding: 50px 40px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;z-index: 1">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <img class="img-fluid"
                         src="{{ asset('storage/images/'.$post->image) }}"
                         alt="{{ $post->image }}">
                </div>
            </div>
            <div style="
            color: #3a888b;
            font-size: 29px;
            font-weight: 900;
            line-height: 30px;
            text-transform: uppercase;
            cursor: pointer;
            letter-spacing: 0.87px;">{{ $post->title }}</div>
            <div style="font-size: 28px">
                <span style="font-weight: 700;">{{ $post->subtitle }}</span>
                <div style="margin-top: 15px">{!! $post->body !!}</div>
            </div>
        </div>
    </div>
    @include('includes.get-started')
    @include('includes.footer')
@endsection
