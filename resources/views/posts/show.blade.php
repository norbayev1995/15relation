@extends('layouts.app')
@section('title', 'Read More - Simple Blog')
@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <article>
                    <h1 class="mb-4">{{ $post->title }}</h1>
                    <img src="{{ '/storage/images/'.$post->image }}" class="img-fluid rounded mb-4"
                         alt="Image for Example Blog Post Title">
                    <div class="mb-4">
                        <span class="text-muted">{{ date('Y-m-d', strtotime($post->created_at)).' '. $post->user->username }}</span>
                    </div>
                    <div class="content">
                        <p>{{ $post->content }}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>

@endsection
