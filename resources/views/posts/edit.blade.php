@extends('layouts.app')
@section('title', 'Edit Post - Simple Blog')
@section('content')

    <div class="container mt-4">
        <h2>Edit Post</h2>
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}" required>
                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="content" rows="6" required>{{ $post->content }}</textarea>
                @error('content')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="current-image" class="form-label">Current Image</label>
                <img src="{{ '/storage/images/'.$post->image }}" width="100" alt="Current post image" class="img-fluid mb-2" id="current-image">
                <input type="file" name="image" class="form-control" id="new-image" accept="image/*">
                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>

@endsection
