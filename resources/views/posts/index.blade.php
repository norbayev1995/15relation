@extends('layouts.app')
@section('title', 'Simple Blog')
@section('content')

    <div class="container mt-4">
        <h2>Recent Posts</h2>
        <div class="row">
            <div class="col-md-8">
                @forelse($posts as $post)
                    <div class="card mb-4">
                        <img src="{{ '/storage/images/'.$post->image }}" class="card-img-top" alt="Image for Example Post Title 1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Read More</a>
                            @if($post->id == auth()->user()->id)
                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-secondary ms-2">Edit</a>
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            {{ $post->user->username}}
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger">Posts empty</div>
                @endforelse
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About</h5>
                        <p class="card-text">This is a simple blog website created using HTML, CSS, and Bootstrap. It
                            features posts with titles, descriptions, and images.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
