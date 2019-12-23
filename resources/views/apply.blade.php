@extends('layouts.app')

@section('title')
    Apply Now
@endsection

@section('content')
    <div class="cognito container mt-5 pt-5">
        <script src="https://services.cognitoforms.com/s/xVHxdnmaP0uDY40yI9wkMw"></script>
        <script>Cognito.load("forms", {id: "1"});</script>
    </div>
@endsection
