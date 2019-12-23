@extends('layouts.app')

@section('title')
    Your Posts
@endsection

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success position-fixed m-2">
                    {{ session('status') }}
                </div>
            @endif

            <div class="col-md-8">
                <td class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">
                        <table class="table table-light table-sm">
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
                                            onclick="event.preventDefault();document.getElementById('delete-post-' + {{$post->id}} + '-form').submit();"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                    <form action="{{ route('posts.destroy', $post) }}"
                                          id="delete-post-{{$post->id}}-form"
                                          method="post" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $posts->render() }}
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection
