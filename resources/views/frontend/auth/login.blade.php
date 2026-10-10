@extends('frontend.layouts.app')
@section('content')
<div class="auth-page">
    <div class="signup-card-login mt-5">
        <div class="form-title">LOGIN</div>
        <p class="form-subtitle">Welcome back! Please sign in to continue.</p>
        {{-- Success Message --}}
        @if(session('success'))
            <div class="auth-alert success">{{ session('success') }}</div>
        @endif

        {{-- Error Messages --}}
        @if($errors->any())
            <div class="auth-alert error">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <div class="field-group">
                <label class="form-label">Email <span>*</span></label>
                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email"/>
            </div>

            {{-- Password --}}
            <div class="field-group">
                <label class="form-label">Password <span>*</span></label>
                <div class="pass-wrap">
        <input type="password" name="password" class="form-control" id="password"placeholder="Password" required autocomplete="current-password" />
                    <button type="button" class="pass-toggle" onclick="togglePass('password', this)" aria-label="Toggle password">
                        {{-- Eye Open --}}
                        <svg class="eye-show" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        {{-- Eye Closed (hidden by default) --}}
                        <svg class="eye-hide" viewBox="0 0 24 24" style="display:none"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                    </button>
                </div>
                {{-- Forgot Password --}}
                <div class="forgot-link-wrap">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>

            {{-- Submit --}}
            <div class="field-group" style="margin-bottom:0">
                <button type="submit" class="btn-register-user">Login</button>
            </div>
        </form>
        <div class="login-link">
            Don't have an account? <a href="{{ route('register') }}">Register</a>
        </div>

    </div>
</div>
<br><br>
<script>
function togglePass(fieldId, btn) {
    const input = document.getElementById(fieldId);
    const eyeShow = btn.querySelector('.eye-show');
    const eyeHide = btn.querySelector('.eye-hide');

    if (input.type === 'password') {
        input.type = 'text';
        eyeShow.style.display = 'none';
        eyeHide.style.display = 'block';
        btn.style.color = 'var(--primary)';
    } else {
        input.type = 'password';
        eyeShow.style.display = 'block';
        eyeHide.style.display = 'none';
        btn.style.color = '';
    }
}
</script>

@endsection