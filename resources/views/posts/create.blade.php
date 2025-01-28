@extends('layouts.app')
@section('title', 'Create Post - Simple Blog')
@section('content')

    <div class="container mt-4">
        <h2>Create New Post</h2>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="content" rows="6" required></textarea>
                @error('content')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*">
                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

@endsection
