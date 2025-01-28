@extends('layouts.app')
@section('title', 'Register - Simple Blog')
@section('content')

    <div class="container mt-4">
        <h2>Register</h2>
        <form action="{{ route('handleRegister') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="confirm-password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

@endsection
