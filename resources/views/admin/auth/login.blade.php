<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login - Rapid Care</title>

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ============================================
        ADMIN LOGIN PAGE - BLACK THEME
        ============================================ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0a0a0a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .bg-animation .gradient {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            animation: floatBg 25s ease-in-out infinite;
        }

        .bg-animation .gradient:nth-child(1) {
            width: 600px;
            height: 600px;
            background: #8b5cf6;
            top: -20%;
            left: -10%;
            animation-delay: 0s;
        }

        .bg-animation .gradient:nth-child(2) {
            width: 500px;
            height: 500px;
            background: #ec4899;
            bottom: -20%;
            right: -10%;
            animation-delay: -8s;
        }

        .bg-animation .gradient:nth-child(3) {
            width: 400px;
            height: 400px;
            background: #3b82f6;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: -16s;
        }

        @keyframes floatBg {
            0%, 100% {
                transform: translate(0, 0) scale(1) rotate(0deg);
            }
            25% {
                transform: translate(30px, -50px) scale(1.1) rotate(5deg);
            }
            50% {
                transform: translate(-20px, 30px) scale(0.9) rotate(-5deg);
            }
            75% {
                transform: translate(40px, 20px) scale(1.05) rotate(3deg);
            }
        }

        /* Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            animation: floatParticle 20s ease-in-out infinite;
        }

        @keyframes floatParticle {
            0%, 100% {
                transform: translate(0, 0);
                opacity: 0.08;
            }
            25% {
                transform: translate(20px, -30px);
                opacity: 0.2;
            }
            50% {
                transform: translate(-20px, 20px);
                opacity: 0.08;
            }
            75% {
                transform: translate(30px, 10px);
                opacity: 0.15;
            }
        }

        /* Login Container */
        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 440px;
            margin: 0 auto;
            animation: fadeInUp 0.8s ease forwards;
            opacity: 0;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Glass Card */
        .login-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 2rem;
            padding: 2.5rem;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 30% 20%, rgba(139, 92, 246, 0.05) 0%, transparent 60%);
            pointer-events: none;
        }

        /* Logo */
        .login-logo {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-logo .logo-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
            border-radius: 1rem;
            font-size: 2rem;
            font-weight: 900;
            color: white;
            margin-bottom: 0.75rem;
            box-shadow: 0 10px 30px rgba(139, 92, 246, 0.3);
        }

        .login-logo h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: -0.02em;
        }

        .login-logo p {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.4);
            margin-top: 0.25rem;
        }

        /* Title */
        .login-title {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-title h5 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
            background: linear-gradient(135deg, #a78bfa, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .login-title .subtitle {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.35);
            margin-top: 0.25rem;
        }

        /* Form */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .form-group {
            position: relative;
        }

        .form-group .input-group {
            position: relative;
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.04);
            border: 2px solid rgba(255, 255, 255, 0.06);
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .form-group .input-group:focus-within {
            border-color: rgba(139, 92, 246, 0.4);
            background: rgba(255, 255, 255, 0.06);
            box-shadow: 0 0 0 4px rgba(139, 92, 246, 0.06);
        }

        .form-group .input-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 0.75rem 0 1rem;
            color: rgba(255, 255, 255, 0.25);
            flex-shrink: 0;
            transition: color 0.3s ease;
        }

        .form-group .input-group:focus-within .input-icon {
            color: #a78bfa;
        }

        .form-group .input-icon svg {
            width: 20px;
            height: 20px;
            stroke: currentColor;
        }

        .form-control {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 0;
            background: transparent;
            border: none;
            font-size: 0.95rem;
            color: #ffffff;
            outline: none;
            font-weight: 400;
            transition: all 0.3s ease;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.25);
            font-weight: 300;
        }

        .form-control:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 30px rgba(255, 255, 255, 0.04) inset !important;
            -webkit-text-fill-color: #ffffff !important;
        }

        .password-toggle {
            display: flex;
            align-items: center;
            padding-right: 0.75rem;
            color: rgba(255, 255, 255, 0.25);
            cursor: pointer;
            transition: color 0.3s ease;
            background: none;
            border: none;
            flex-shrink: 0;
        }

        .password-toggle:hover {
            color: rgba(255, 255, 255, 0.5);
        }

        .password-toggle svg {
            width: 20px;
            height: 20px;
            stroke: currentColor;
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.25rem 0;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .remember-me:hover {
            color: rgba(255, 255, 255, 0.7);
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #8b5cf6;
            cursor: pointer;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .remember-me input[type="checkbox"]:checked {
            background: #8b5cf6;
            border-color: #8b5cf6;
        }

        .forgot-link {
            color: rgba(255, 255, 255, 0.35);
            font-size: 0.85rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: #a78bfa;
        }

        .btn-primary-custom {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 0.875rem 2rem;
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
            border: none;
            border-radius: 0.75rem;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(139, 92, 246, 0.3);
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .btn-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .btn-primary-custom:hover::before {
            left: 100%;
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(139, 92, 246, 0.4);
        }

        .btn-primary-custom svg {
            transition: transform 0.3s ease;
        }

        .btn-primary-custom:hover svg {
            transform: translateX(4px);
        }

        .btn-secondary-custom {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.875rem 2rem;
            background: rgba(255, 255, 255, 0.04);
            border: 2px solid rgba(255, 255, 255, 0.06);
            border-radius: 0.75rem;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            text-decoration: none;
            text-align: center;
        }

        .btn-secondary-custom:hover {
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(255, 255, 255, 0.12);
            color: #ffffff;
            transform: translateY(-3px);
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            margin-top: 0.5rem;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 0.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.06);
        }

        .divider span {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.25);
            font-weight: 400;
            white-space: nowrap;
        }

        .login-footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.04);
        }

        .login-footer p {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.25);
        }

        .login-footer a {
            color: rgba(255, 255, 255, 0.4);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-footer a:hover {
            color: #a78bfa;
        }

        .alert-danger {
            background: rgba(248, 113, 113, 0.1);
            border: 1px solid rgba(248, 113, 113, 0.2);
            color: #f87171;
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }

        .alert-danger ul {
            margin: 0;
            padding-left: 1.25rem;
        }

        .form-control.is-invalid {
            border-color: #f87171 !important;
        }

        .text-red-400 {
            color: #f87171;
        }

        .text-xs {
            font-size: 0.75rem;
        }

        .mt-1 {
            margin-top: 0.25rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 1.75rem;
                border-radius: 1.5rem;
            }

            .login-logo .logo-icon {
                width: 56px;
                height: 56px;
                font-size: 1.6rem;
            }

            .login-title h5 {
                font-size: 1.25rem;
            }

            .form-control {
                font-size: 0.9rem;
                padding: 0.75rem 0.75rem 0.75rem 0;
            }

            .btn-primary-custom,
            .btn-secondary-custom {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }

            .form-options {
                flex-direction: column;
                gap: 0.5rem;
                align-items: flex-start;
            }

            .bg-animation .gradient:nth-child(1) {
                width: 300px;
                height: 300px;
            }
            .bg-animation .gradient:nth-child(2) {
                width: 250px;
                height: 250px;
            }
            .bg-animation .gradient:nth-child(3) {
                width: 200px;
                height: 200px;
            }
        }

        @media (max-width: 380px) {
            .login-card {
                padding: 1.25rem;
            }

            .login-logo .logo-icon {
                width: 48px;
                height: 48px;
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="gradient"></div>
        <div class="gradient"></div>
        <div class="gradient"></div>
    </div>

    <!-- Particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-card">
            <!-- Logo -->
            <div class="login-logo">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h2>Rapid Care</h2>
                <p>Admin Panel</p>
            </div>

            <!-- Title -->
            <div class="login-title">
                <h5>Welcome Back</h5>
                <p class="subtitle">Sign in to your admin account</p>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="alert-danger mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form -->
            <form class="login-form" action="{{ route('admin.login.store') }}" method="POST">
                @csrf

                <!-- Email Field -->
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', 'monir@gmail.com') }}" placeholder="Email Address" required autofocus>
                    </div>
                    @error('email')
                        <small class="text-red-400 text-xs mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v4M6 2v4M18 2v4M2 6h20M4 6v14a2 2 0 002 2h12a2 2 0 002-2V6"/>
                                <rect x="8" y="12" width="2" height="6" rx="0.5"/>
                                <rect x="14" y="12" width="2" height="6" rx="0.5"/>
                            </svg>
                        </span>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="123456" placeholder="Password" id="password" required>
                        <button type="button" class="password-toggle" id="togglePassword" aria-label="Toggle password visibility">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <small class="text-red-400 text-xs mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Options -->
                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <!-- Buttons -->
                <div class="btn-group">
                    <button type="submit" class="btn-primary-custom">
                        <span>Sign In</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </button>

                    <div class="divider">
                        <span>or</span>
                    </div>

                    <a href="{{ route('admin.register') }}" class="btn-secondary-custom">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="8.5" cy="7" r="4"/>
                            <line x1="20" y1="8" x2="20" y2="14"/>
                            <line x1="23" y1="11" x2="17" y2="11"/>
                        </svg>
                        <span>Create Account</span>
                    </a>
                </div>
            </form>

            <!-- Footer -->
            <div class="login-footer">
                <p>&copy; {{ date('Y') }} <a href="{{ route('frontEnd.home') }}">Rapid Care</a>. All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password Toggle
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');

            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    const icon = this.querySelector('svg');
                    if (type === 'text') {
                        icon.innerHTML = `
                            <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
                            <line x1="1" y1="1" x2="23" y2="23"/>
                        `;
                    } else {
                        icon.innerHTML = `
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        `;
                    }
                });
            }
        });
    </script>
</body>
</html>
