@extends('layouts.email')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <p class="lead">Contact information:</p>
                <p>First name: {{ $contact['firstName'] }}</p>
                <p>Last name: {{ $contact['lastName'] }}</p>
                <p>Company name: {{ $contact['companyName'] }}</p>
                <p>Industry: {{ $contact['industry'] }}</p>
                <p>Company size: {{ $contact['companySize'] }}</p>
                <p>Phone number: {{ $contact['phoneNumber'] }}</p>
                <p>Email: {{ $contact['email'] }}</p>
                <p>An email containing the application form has been sent to this contact.</p>
            </div>
        </div>
    </div>
@endsection
