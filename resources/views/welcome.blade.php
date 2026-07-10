<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* Reset and Base */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
                min-height: 100vh;
                background: #0f0f1a;
                color: #ffffff;
                overflow-x: hidden;
                position: relative;
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
            }

            .bg-animation .gradient {
                position: absolute;
                border-radius: 50%;
                filter: blur(80px);
                opacity: 0.3;
                animation: float 20s ease-in-out infinite;
            }

            .bg-animation .gradient:nth-child(1) {
                width: 500px;
                height: 500px;
                background: #8b5cf6;
                top: -10%;
                left: -5%;
                animation-delay: 0s;
            }

            .bg-animation .gradient:nth-child(2) {
                width: 400px;
                height: 400px;
                background: #ec4899;
                bottom: -10%;
                right: -5%;
                animation-delay: -5s;
            }

            .bg-animation .gradient:nth-child(3) {
                width: 350px;
                height: 350px;
                background: #3b82f6;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                animation-delay: -10s;
            }

            .bg-animation .gradient:nth-child(4) {
                width: 300px;
                height: 300px;
                background: #10b981;
                top: 20%;
                right: 10%;
                animation-delay: -15s;
            }

            @keyframes float {
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

            /* Main Container */
            .main-container {
                position: relative;
                z-index: 1;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem 1.5rem;
            }

            /* Glass Card */
            .glass-card {
                max-width: 1200px;
                width: 100%;
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 2rem;
                padding: 3rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
                position: relative;
                overflow: hidden;
            }

            .glass-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: radial-gradient(circle at 30% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 60%);
                pointer-events: none;
            }

            /* Navbar */
            .navbar {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                gap: 1rem;
                margin-bottom: 3rem;
                position: relative;
                z-index: 2;
            }

            .nav-link {
                color: rgba(255, 255, 255, 0.7);
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 500;
                padding: 0.6rem 1.2rem;
                border-radius: 0.75rem;
                transition: all 0.3s ease;
                border: 1px solid transparent;
                letter-spacing: 0.01em;
            }

            .nav-link:hover {
                color: #ffffff;
                background: rgba(255, 255, 255, 0.08);
                border-color: rgba(255, 255, 255, 0.1);
                transform: translateY(-2px);
            }

            .nav-link-primary {
                background: linear-gradient(135deg, #8b5cf6, #6d28d9);
                color: #fff;
                border: none;
                padding: 0.6rem 1.5rem;
                font-weight: 600;
                box-shadow: 0 4px 15px rgba(139, 92, 246, 0.3);
            }

            .nav-link-primary:hover {
                background: linear-gradient(135deg, #7c3aed, #5b21b6);
                transform: translateY(-2px) scale(1.02);
                box-shadow: 0 8px 25px rgba(139, 92, 246, 0.4);
                border-color: transparent;
            }

            /* Logo Section */
            .logo-section {
                text-align: center;
                margin-bottom: 3rem;
                position: relative;
                z-index: 2;
            }

            .logo-wrapper {
                display: inline-flex;
                align-items: center;
                gap: 1rem;
                margin-bottom: 0.5rem;
                animation: fadeInDown 0.8s ease-out;
            }

            .logo-icon {
                width: 60px;
                height: 60px;
                background: linear-gradient(135deg, #8b5cf6, #ec4899);
                border-radius: 1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2rem;
                font-weight: 900;
                color: #fff;
                box-shadow: 0 10px 30px rgba(139, 92, 246, 0.3);
            }

            .logo-text {
                font-size: 2.5rem;
                font-weight: 800;
                background: linear-gradient(135deg, #ffffff 0%, #a78bfa 50%, #ec4899 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                letter-spacing: -0.02em;
            }

            .logo-subtitle {
                font-size: 1.1rem;
                color: rgba(255, 255, 255, 0.5);
                font-weight: 300;
                letter-spacing: 0.05em;
                margin-top: 0.25rem;
            }

            /* Grid Cards */
            .cards-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 1.5rem;
                margin-bottom: 2rem;
                position: relative;
                z-index: 2;
            }

            .card {
                background: rgba(255, 255, 255, 0.04);
                border: 1px solid rgba(255, 255, 255, 0.06);
                border-radius: 1.25rem;
                padding: 1.75rem;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                cursor: default;
                position: relative;
                overflow: hidden;
            }

            .card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(135deg, rgba(139, 92, 246, 0.05), rgba(236, 72, 153, 0.05));
                opacity: 0;
                transition: opacity 0.4s ease;
                border-radius: 1.25rem;
            }

            .card:hover {
                transform: translateY(-8px) scale(1.01);
                border-color: rgba(139, 92, 246, 0.3);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }

            .card:hover::before {
                opacity: 1;
            }

            .card-icon {
                width: 48px;
                height: 48px;
                border-radius: 0.75rem;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 1rem;
                font-size: 1.5rem;
                background: linear-gradient(135deg, rgba(139, 92, 246, 0.2), rgba(236, 72, 153, 0.2));
                border: 1px solid rgba(139, 92, 246, 0.15);
                transition: all 0.3s ease;
            }

            .card:hover .card-icon {
                transform: scale(1.1) rotate(-5deg);
                background: linear-gradient(135deg, rgba(139, 92, 246, 0.3), rgba(236, 72, 153, 0.3));
            }

            .card-icon svg {
                width: 24px;
                height: 24px;
                stroke: #a78bfa;
            }

            .card-title {
                font-size: 1.1rem;
                font-weight: 600;
                color: #ffffff;
                margin-bottom: 0.5rem;
                letter-spacing: -0.01em;
            }

            .card-title a {
                color: inherit;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            .card-title a:hover {
                color: #a78bfa;
            }

            .card-description {
                font-size: 0.9rem;
                line-height: 1.6;
                color: rgba(255, 255, 255, 0.6);
                font-weight: 300;
            }

            /* Footer */
            .footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-top: 2rem;
                border-top: 1px solid rgba(255, 255, 255, 0.06);
                margin-top: 1rem;
                position: relative;
                z-index: 2;
                flex-wrap: wrap;
                gap: 1rem;
            }

            .footer-links {
                display: flex;
                align-items: center;
                gap: 1.5rem;
                flex-wrap: wrap;
            }

            .footer-link {
                color: rgba(255, 255, 255, 0.4);
                text-decoration: none;
                font-size: 0.85rem;
                font-weight: 400;
                display: flex;
                align-items: center;
                gap: 0.4rem;
                transition: all 0.3s ease;
            }

            .footer-link:hover {
                color: rgba(255, 255, 255, 0.8);
                transform: translateY(-1px);
            }

            .footer-link svg {
                width: 18px;
                height: 18px;
                stroke: currentColor;
            }

            .footer-version {
                font-size: 0.85rem;
                color: rgba(255, 255, 255, 0.3);
                font-weight: 300;
                padding: 0.4rem 0.8rem;
                background: rgba(255, 255, 255, 0.04);
                border-radius: 0.5rem;
                border: 1px solid rgba(255, 255, 255, 0.05);
            }

            .footer-version span {
                color: rgba(255, 255, 255, 0.5);
                font-weight: 400;
            }

            /* Animations */
            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .card {
                animation: fadeInUp 0.6s ease-out forwards;
                opacity: 0;
            }

            .card:nth-child(1) { animation-delay: 0.1s; }
            .card:nth-child(2) { animation-delay: 0.2s; }
            .card:nth-child(3) { animation-delay: 0.3s; }
            .card:nth-child(4) { animation-delay: 0.4s; }

            .footer {
                animation: fadeInUp 0.6s ease-out 0.5s forwards;
                opacity: 0;
            }

            /* Scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }
            ::-webkit-scrollbar-track {
                background: #1a1a2e;
            }
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #8b5cf6, #ec4899);
                border-radius: 4px;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .glass-card {
                    padding: 1.5rem;
                    border-radius: 1.25rem;
                }

                .logo-text {
                    font-size: 1.8rem;
                }

                .logo-icon {
                    width: 48px;
                    height: 48px;
                    font-size: 1.5rem;
                }

                .cards-grid {
                    grid-template-columns: 1fr;
                }

                .navbar {
                    justify-content: center;
                    flex-wrap: wrap;
                }

                .footer {
                    flex-direction: column;
                    text-align: center;
                }

                .footer-links {
                    justify-content: center;
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

            @media (max-width: 480px) {
                .glass-card {
                    padding: 1rem;
                }
                .card {
                    padding: 1.25rem;
                }
                .logo-text {
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
            <div class="gradient"></div>
        </div>

        <!-- Main Content -->
        <div class="main-container">
            <div class="glass-card">
                <!-- Navigation -->
                @if (Route::has('login'))
                    <nav class="navbar">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link">
                                Dashboard
                            </a>
                            <a href="{{ route('logout') }}" class="nav-link"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">
                                Sign In
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link nav-link-primary">
                                    Get Started
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif

                <!-- Logo Section -->
                <div class="logo-section">
                    <div class="logo-wrapper">
                        <div class="logo-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 32px; height: 32px;">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                <path d="M2 17l10 5 10-5"/>
                                <path d="M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <span class="logo-text">{{ config('app.name', 'RapidCare') }}</span>
                    </div>
                    <div class="logo-subtitle">Build something amazing ✨</div>
                </div>

                <!-- Cards Grid -->
                <div class="cards-grid">
                    <!-- Card 1: Documentation -->
                    <div class="card">
                        <div class="card-icon">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div class="card-title">
                            <a href="https://laravel.com/docs">Documentation</a>
                        </div>
                        <div class="card-description">
                            Comprehensive documentation covering every aspect of the framework. Start here to master Laravel.
                        </div>
                    </div>

                    <!-- Card 2: Laracasts -->
                    <div class="card">
                        <div class="card-icon">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="card-title">
                            <a href="https://laracasts.com">Laracasts</a>
                        </div>
                        <div class="card-description">
                            Thousands of video tutorials on Laravel, PHP, and JavaScript development. Level up your skills.
                        </div>
                    </div>

                    <!-- Card 3: Laravel News -->
                    <div class="card">
                        <div class="card-icon">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                        </div>
                        <div class="card-title">
                            <a href="https://laravel-news.com/">Laravel News</a>
                        </div>
                        <div class="card-description">
                            Community-driven portal and newsletter aggregating the latest Laravel ecosystem news and tutorials.
                        </div>
                    </div>

                    <!-- Card 4: Ecosystem -->
                    <div class="card">
                        <div class="card-icon">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="card-title">Vibrant Ecosystem</div>
                        <div class="card-description">
                            First-party tools like Forge, Vapor, Nova, and Envoyer, plus open-source libraries including Cashier, Dusk, Echo, Horizon, Sanctum, and Telescope.
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="footer-links">
                        <a href="https://laravel.bigcartel.com" class="footer-link">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Shop
                        </a>
                        <a href="https://github.com/sponsors/taylorotwell" class="footer-link">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            Sponsor
                        </a>
                        <a href="https://github.com/laravel/laravel" class="footer-link">
                            <svg fill="currentColor" viewBox="0 0 24 24" style="width: 18px; height: 18px;">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.399 1.02 0 2.046.133 3.003.399 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            GitHub
                        </a>
                    </div>

                    <div class="footer-version">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} <span>·</span> PHP v{{ PHP_VERSION }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
