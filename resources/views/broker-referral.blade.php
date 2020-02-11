@extends('layouts.app')

@section('title')
    Broker Referral
@endsection

@section('content')
    @component('components.banner')
        @slot('image')
            {{ asset('images/austin_skyline_4_lined_web.png') }}
        @endslot
        @slot('height')
            55vw
        @endslot
    @endcomponent
    <div class="row ml-0 mr-0">
        <div class="col-md-8 mx-auto" style="padding: 50px 40px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
            <div class="cognito">
                <script src="https://services.cognitoforms.com/s/xVHxdnmaP0uDY40yI9wkMw"></script>
                <script>Cognito.load("forms", {id: "3"});</script>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100">
    @include('includes.get-started')
    @include('includes.footer')
@endsection
