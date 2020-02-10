@extends('layouts.app')

@section('title')
    Edit Post
@endsection

@section('content')
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">
                    <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                   value="{{ $post->subtitle }}">
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Excerpt</label>
                            <textarea class="form-control" id="excerpt"
                                      name="excerpt">{{ $post->excerpt }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" id="body"
                                      name="body">{{ $post->body }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="category">Category</label>
                                <select id="category" class="form-control" name="category_id">
                                    <option selected
                                            value="{{ $post->category_id }}">{{ $post->category->name }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image"
                                       value="{{ $post->image }}">
                                <img src="{{ asset('storage/images/'.$post->image) }}" alt="{{ $post->image }}"
                                     class="img-thumbnail">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                     document.getElementById('destroy-post-image-form').submit();">Remove image
                        </button>
                    </form>
                    <form id="destroy-post-image-form" action="{{ route('posts.destroy-image', $post) }}" method="POST"
                          style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- include summernote css/js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function () {
            $('#body').summernote();
        });
    </script>
@endpush

