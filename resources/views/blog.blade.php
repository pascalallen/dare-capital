@extends('layouts.app')

@section('title')
    Stories
@endsection

@section('content')
    <div
        style="background-image: url('images/header_pic_construction_blue_overlay_web.png'); background-repeat: no-repeat; background-size: cover; height: 55vw;">
        <img style="margin-top: 4%; margin-left: 5%; width: 15%;
  max-width: 400px;
  min-width: 90px;
  cursor: pointer;
  height: auto;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}"
             alt="Dare Logo" xmlns="http://www.w3.org/1999/html" onclick="window.location.href = '/';">
        @foreach($posts as $post)
            @if ($loop->odd)
                <div class="row" style="margin: 50px auto;">
                    <div class="col-md-7 mx-auto" style="padding: 50px 40px;
                box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
                border-radius: 4px;
                background-color: #ffffff;">
                        <div class="row">
                            <div class="col">
                                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 42px;
                font-weight: 700;
                line-height: 30px;
                text-transform: uppercase;
                letter-spacing: 0.87px;">{{ $post->title }}</div>
                                <div style="
                margin-top: 15px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 28px;">
                                    <span style="font-weight: 700;">{{ $post->subtitle }}</span>
                                    <br>
                                    {!! str_limit(strip_tags($post->body), $limit = 500, $end = '...') !!}
                                </div>

                            </div>
                            <div class="col"><img class="img-thumbnail" style="min-width: 200px;"
                                                  src="{{ asset('storage/images/'.$post->image) }}"
                                                  alt="{{ $post->image }}"></div>
                        </div>
                        <div class="row">
                            <a href="/blog/{{ $post->slug }}" style="padding-top: 15px;padding-left: 15px;
                        color: #3c8685;
                        font-family: 'Nunito', sans-serif;
                        font-size: 22px;
                        font-weight: 400;
                        line-height: 28px;
                        letter-spacing: 0.66px;">Read More >></a>
                        </div>
                    </div>
                </div>
            @else
                <div class="row" style="margin: 50px auto;">
                    <div class="col-md-7 mx-auto" style="padding: 50px 40px;
                box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
                border-radius: 4px;
                background-color: #ffffff;">
                        <div class="row">
                            <div class="col"><img class="img-thumbnail" style="min-width: 200px;"
                                                  src="{{ asset('storage/images/'.$post->image) }}"
                                                  alt="{{ $post->image }}"></div>
                            <div class="col">
                                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 42px;
                font-weight: 700;
                line-height: 30px;
                text-transform: uppercase;
                letter-spacing: 0.87px;">{{ $post->title }}</div>
                                <div style="
                margin-top: 15px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 28px;">
                                    <span style="font-weight: 700;">{{ $post->subtitle }}</span>
                                    <br>
                                    {!! str_limit(strip_tags($post->body), $limit = 500, $end = '...') !!}
                                </div>

                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <a href="/blog/{{ $post->slug }}" style="padding-top: 15px;padding-right: 15px;
                        color: #3c8685;
                        font-family: 'Nunito', sans-serif;
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
    </div>

@endsection
