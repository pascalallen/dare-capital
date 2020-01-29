@extends('layouts.app')

@section('title')
    Stories
@endsection

@section('content')
    <div
        style="background-image: url('images/2-layers.png'); background-repeat: no-repeat; background-size: cover; height: 55vw;">
        <img style="margin-top: 4%; margin-left: 5%; width: 15%;
  max-width: 400px;
  min-width: 90px;
  height: auto;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}"
             alt="Dare Logo" xmlns="http://www.w3.org/1999/html">
        @foreach($posts as $post)
            @if ($loop->odd)
                <div class="row" style="margin: 50px;">
                    <div class="col-md-7 mx-auto" style="padding: 50px 40px;
                box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
                border-radius: 4px;
                background-color: #ffffff;">
                        <div class="row">
                            <div class="col">
                                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 3vh;
                font-weight: 900;
                line-height: 30px;
                text-transform: uppercase;
                letter-spacing: 0.87px;">{{ $post->title }}</div>
                                <div style="
                margin-top: 15px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 2.5vh;
                font-weight: 300;">
                                    <span style="font-weight: 900;">{{ $post->title }}</span>
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
                <div class="row" style="margin: 50px;">
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
                font-size: 3vh;
                font-weight: 900;
                line-height: 30px;
                text-transform: uppercase;
                letter-spacing: 0.87px;">{{ $post->title }}</div>
                                <div style="
                margin-top: 15px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 2.5vh;
                font-weight: 300;">
                                    <span style="font-weight: 900;">{{ $post->title }}</span>
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
        <div class="row text-center" style="margin-top: 125px;">
            <div class="col-md-8 offset-md-2">
                <div style="font-family: 'Nunito', sans-serif;
            font-size: 3.2vh;
            font-weight: 400;
            color: #6e748e;
            line-height: 34px;">
                    <span style="color: #31364f;font-weight: 900;">Interested to Know More?</span> Check Out Our Blog.
                </div>
                <button style="
                margin-top: 35px;
            width: 170px;
            height: 46px;
            box-shadow: 0 10px 25px 1px rgba(1, 31, 75, 0.14);
            background-color: #132149;color: #ffffff;font-family: 'Nunito', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 30px;">Visit the Blog
                </button>
            </div>
        </div>
        @include('includes.get-started')
        @include('includes.footer')
    </div>

@endsection
