@extends('layouts.email')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <p class="lead">We've received and are reviewing your information, please fill out an application at
                    this page <a href="{{ route('apply') }}">here</a> and we'll back to you shortly!</p>
            </div>
        </div>
    </div>
@endsection
