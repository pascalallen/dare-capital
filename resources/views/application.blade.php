@extends('layouts.app')

@section('title')
    {{$pageTitle}}
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
    <div class="row application-page-section">
        <div class="col-md-8 mx-auto application-page-section-col">
            <div class="cognito">
                <script src="https://services.cognitoforms.com/s/xVHxdnmaP0uDY40yI9wkMw"></script>
                <script>Cognito.load("forms", {id: {{$cognitoFormId}}});</script>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100">
    @include('includes.get-started')
    @include('includes.footer')
@endsection
