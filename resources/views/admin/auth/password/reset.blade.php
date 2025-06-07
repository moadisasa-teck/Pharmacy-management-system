@extends('admin.layouts.plain')

@section('content')
<h1>Reset Password</h1>
<p class="account-subtitle">Enter your new password</p>

<!-- Form -->
<form action="{{ route('password.update') }}" method="post">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    
    <div class="form-group">
        <input class="form-control @error('email') is-invalid @enderror" 
               name="email" 
               type="email" 
               placeholder="Email"
               value="{{ $email ?? old('email') }}" 
               required autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div class="form-group">
        <input class="form-control @error('password') is-invalid @enderror" 
               name="password" 
               type="password" 
               placeholder="Enter new password" 
               required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div class="form-group">
        <input class="form-control" 
               name="password_confirmation" 
               type="password" 
               placeholder="Repeat new password" 
               required>
    </div>
    
    <div class="form-group mb-0">
        <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
    </div>
</form>
<!-- /Form -->

<div class="text-center dont-have">Remember your password? <a href="{{ route('login') }}">Login</a></div>
@endsection