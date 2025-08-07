@extends('layouts.auth')

@section('content')
    <div class="login-container">
        <div class="login-card">
            <div class="card-header">
                <h2><i class="ri-fingerprint-line"></i></h2>
                <h2>Account Login</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-4">
                        <label for="email" class="form-label">EMAIL</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ri-user-line"></i></span>
                            <input type="email" class="form-control" id="email" placeholder="your@email.com" required>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" class="form-label">PASSWORD</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ri-key-line"></i></span>
                            <input type="password" class="form-control" id="password" placeholder="••••••••" required>
                            <button class="btn password-toggle" type="button" id="togglePassword">
                                <i class="ri-eye-line" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-login mb-2">
                        <i class="ri-arrow-right-line me-2"></i> Login
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection