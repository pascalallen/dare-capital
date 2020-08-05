@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@push('styles')
    <style type="text/css">
        .note-float-left {
            padding: 25px 25px 25px 0;
        }

        .note-float-right {
            padding: 25px 0 25px 25px;
        }
    </style>
@endpush

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
        <div class="col-md-8 mx-auto p-5" style="box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;background-color: #ffffff;z-index: 1">
            <img class="img-fluid mb-5 w-100" src="{{ asset('storage/images/'.$post->image) }}" alt="{{ $post->image }}">
            <div style="
            color: #3a888b;
            font-size: 29px;
            font-weight: 900;
            line-height: 30px;
            text-transform: uppercase;
            cursor: pointer;
            letter-spacing: 0.87px;">{{ $post->title }}</div>
            <div>
                <span style="font-weight: 700; font-size: 28px">{{ $post->subtitle }}</span>
                <div style="margin-top: 15px">{!! $post->body !!}</div>
            </div>
        </div>
    </div>
    @include('includes.get-started')
    @include('includes.footer')
@endsection
