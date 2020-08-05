@extends('layouts.auth')

@section('title')
    Your Posts
@endsection

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8 offset-md-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>
                                    <button type="button" class="btn btn-success btn-sm"
                                            onclick="window.location.href = '{{route('posts.create')}}'">Add
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="{{ route('posts.edit', $post) }}">{{ $post->title }}</a></td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>
                                        <button
                                            type="button"
                                            class="btn btn-danger btn-sm"
                                            data-toggle="modal"
                                            data-target="#delete-post-{{$post->id}}-modal"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <form action="{{ route('posts.destroy', $post) }}"
                                      id="delete-post-{{$post->id}}-form"
                                      method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <div class="modal fade" id="delete-post-{{$post->id}}-modal" tabindex="-1" role="dialog"
                                     aria-labelledby="delete-post-{{$post->id}}-modal-label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="delete-post-{{$post->id}}-modal-label">
                                                    Deleting post: {{$post->title}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete post: {{$post->title}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                        data-dismiss="modal">Cancel
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault();document.getElementById('delete-post-' + {{$post->id}} + '-form').submit();"
                                                >Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                            {{ $posts->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
