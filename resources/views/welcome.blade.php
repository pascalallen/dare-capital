@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Landing Page</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut fuga fugit hic recusandae sequi voluptate? Culpa, esse, eum hic ipsa, nam natus non obcaecati quas sunt suscipit totam vel.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

