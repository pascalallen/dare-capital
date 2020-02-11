@extends('layouts.app')

@section('title')
    Stories
@endsection

@section('content')
    @component('components.banner')
        @slot('image')
            {{ asset('images/austin_skyline_2_lined_web.png') }}
        @endslot
        @slot('height')
            55vw
        @endslot
    @endcomponent
    @foreach($posts as $post)
        @if ($loop->odd)
            <div class="row mr-0 ml-0">
                <div class="col-md-8 mx-auto" style="padding: 50px 40px;
            box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
            border-radius: 4px;
            background-color: #ffffff;">
                    <div style="
            color: #3a888b;
            font-size: 29px;
            font-weight: 900;
            line-height: 30px;
            text-transform: uppercase;
            cursor: pointer;
            letter-spacing: 0.87px;"
                         onclick="window.location.href = '/blog/'+ '{{ $post->slug }}'">{{ $post->title }}</div>
                    <div class="row">
                        <div class="col">
                            <div style="
            margin-top: 25px;
            color: #011f4b;
            font-size: 21px;
            font-weight: 300;">
                                <span style="font-weight: 700;">{{ $post->subtitle }}</span>
                                <br>
                                @if(!isset($post->excerpt))
                                    {!! str_limit(strip_tags($post->body), $limit = 500, $end = '...') !!}
                                @else
                                    {{ $post->excerpt }}
                                @endif
                            </div>

                        </div>
                        <div class="col"><img class="img-thumbnail" style="min-width: 200px;"
                                              src="{{ asset('storage/images/'.$post->image) }}"
                                              alt="{{ $post->image }}"></div>
                    </div>
                    <div class="row">
                        <a href="/blog/{{ $post->slug }}" style="padding-top: 15px;padding-left: 15px;
                    color: #3c8685;
                    font-size: 22px;
                    font-weight: 400;
                    line-height: 28px;
                    letter-spacing: 0.66px;">Read More >></a>
                    </div>
                </div>
            </div>
        @else
            <div class="row mr-0 ml-0" style="margin: 50px auto;">
                <div class="col-md-8 mx-auto" style="padding: 50px 40px;
            box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
            border-radius: 4px;
            background-color: #ffffff;">
                    <div style="
            color: #3a888b;
            font-size: 29px;
            font-weight: 900;
            line-height: 30px;
            text-transform: uppercase;
            cursor: pointer;
            letter-spacing: 0.87px;"
                         onclick="window.location.href = '/blog/'+ '{{ $post->slug }}'">{{ $post->title }}</div>
                    <div class="row">
                        <div class="col"><img class="img-thumbnail" style="min-width: 200px;"
                                              src="{{ asset('storage/images/'.$post->image) }}"
                                              alt="{{ $post->image }}"></div>
                        <div class="col">
                            <div style="
            margin-top: 25px;
            color: #011f4b;
            font-size: 21px;
            font-weight: 300;">
                                <span style="font-weight: 700;">{{ $post->subtitle }}</span>
                                <br>
                                @if(!isset($post->excerpt))
                                    {!! str_limit(strip_tags($post->body), $limit = 500, $end = '...') !!}
                                @else
                                    {{ $post->excerpt }}
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <a href="/blog/{{ $post->slug }}" style="padding-top: 15px;padding-right: 15px;
                    color: #3c8685;
                    font-size: 22px;
                    font-weight: 400;
                    line-height: 28px;
                    letter-spacing: 0.66px;">Read More >></a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    @include('includes.get-started')
    @include('includes.footer')
@endsection
