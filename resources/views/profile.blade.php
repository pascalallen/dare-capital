@extends('layouts.app')

@section('title')
    Edit Profile
@endsection

@push('styles')
    <style>
        .footer {
            display: none;
        }
    </style>
@endpush


@section('content')
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-8">
            <div class="card card-dark text-light">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" rows="8"
                                      name="bio">{{ $user->bio }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       value="{{ $user->email }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="avatar">Avatar</label>
                                <input type="file" class="form-control-file" id="avatar" name="avatar"
                                       value="{{ $user->avatar }}">
                                <img src="{{ asset('storage/avatars/'.$user->avatar) }}" alt="{{ $user->avatar }}"
                                     class="img-thumbnail">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                     document.getElementById('destroy-profile-image-form').submit();">Remove image
                        </button>
                    </form>
                    <form id="destroy-profile-image-form" action="{{ route('profile.destroy-image') }}" method="POST"
                          style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
