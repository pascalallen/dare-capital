@extends('layouts.app')

@section('title')
    Apply Now
@endsection

@section('content')
    <div
        style="background-image: url({{ asset('images/austin_skyline_4_lined_web.png') }}); background-repeat: no-repeat; background-size: cover; height: 55vw;">
        <img style="margin-top: 4%; margin-left: 5%; width: 15%;
  max-width: 400px;
  min-width: 90px;
  cursor:pointer;
  height: auto;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}"
             alt="Dare Logo" xmlns="http://www.w3.org/1999/html" onclick="window.location.href = '/';">
        <div class="row" style="margin: 50px auto; margin-top: 35%; margin-bottom: 0">
            <div class="col-md-8 mx-auto" style="padding: 50px 40px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
                <div class="cognito">
                    <script src="https://services.cognitoforms.com/s/xVHxdnmaP0uDY40yI9wkMw"></script>
                    <script>Cognito.load("forms", {id: "1"});</script>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100">
        @include('includes.get-started')
        @include('includes.footer')
    </div>
@endsection
