@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <td class="card">
                    <div class="card-header">Edit Post</div>

                    <div class="card-body">
                        <form action="{{ route('posts.update', $post) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" id="body" rows="8"
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
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection