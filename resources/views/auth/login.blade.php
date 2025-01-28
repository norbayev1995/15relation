@extends('layouts.app')
@section('title', 'Login - Simple Blog')
@section('content')

    <div class="container mt-4">
        <h2>Login</h2>
        <form action="{{ route('handleLogin') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

@endsection
