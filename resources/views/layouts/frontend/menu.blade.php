<!-- ============================================
    ULTRA MODERN NAVBAR - PREMIUM BLACK THEME
    ============================================ -->
<nav class="modern-navbar" role="navigation" aria-label="Main navigation">
    <div class="navbar-container">
        <!-- Logo -->
        <a href="{{ route('frontEnd.home') }}" class="navbar-brand" aria-label="Rapid Care Home">
            <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Rapid Care Logo" class="logo-image" loading="lazy">
                <span class="brand-text">Rapid<span class="brand-highlight">Care</span></span>
            </div>
            <span class="brand-tagline">Healthcare</span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" id="navbarToggler" aria-label="Toggle navigation" aria-expanded="false">
            <span class="toggler-line"></span>
            <span class="toggler-line"></span>
            <span class="toggler-line"></span>
        </button>

        <!-- Navbar Links -->
        <div class="navbar-collapse" id="navbarCollapse" role="menubar">
            <ul class="navbar-nav" role="menu">
                <li class="nav-item" role="none">
                    <a href="{{ route('frontEnd.home') }}" class="nav-link active" role="menuitem">
                        <span class="nav-icon">🏠</span>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li class="nav-item" role="none">
                    <a href="{{ route('frontEnd.about') }}" class="nav-link" role="menuitem">
                        <span class="nav-icon">ℹ️</span>
                        <span class="nav-text">About</span>
                    </a>
                </li>
                <li class="nav-item dropdown" role="none">
                    <a href="#" class="nav-link dropdown-toggle" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" role="menuitem">
                        <span class="nav-icon">💊</span>
                        <span class="nav-text">Services</span>
                        <span class="dropdown-arrow">▾</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown" role="menu">
                        <li role="none"><a class="dropdown-item" href="service.html" role="menuitem">All Services</a></li>
                        <li role="none"><a class="dropdown-item" href="service.html#cosmetic" role="menuitem">Cosmetic Dentistry</a></li>
                        <li role="none"><a class="dropdown-item" href="service.html#implants" role="menuitem">Dental Implants</a></li>
                        <li role="none"><a class="dropdown-item" href="service.html#whitening" role="menuitem">Teeth Whitening</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="none">
                    <a href="{{ route('frontEnd.doctors') }}" class="nav-link" role="menuitem">
                        <span class="nav-icon">👨‍⚕️</span>
                        <span class="nav-text">Our Doctors</span>
                    </a>
                </li>
                <li class="nav-item" role="none">
                    <a href="{{ route('frontEnd.showContact') }}" class="nav-link" role="menuitem">
                        <span class="nav-icon">📞</span>
                        <span class="nav-text">Contact</span>
                    </a>
                </li>
            </ul>

            <!-- Navbar Actions -->
            <div class="navbar-actions">
                <!-- Search Button -->
                <button type="button" class="btn-search" data-bs-toggle="modal" data-bs-target="#searchModal" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                </button>

                <!-- Appointment Button -->
                <a href="{{ route('frontEnd.login') }}" class="btn-appointment">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    <span>Appointment</span>
                    <span class="btn-badge">New</span>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- ============================================
    ULTRA MODERN NAVBAR END
    ============================================ -->

<!-- ============================================
    ULTRA MODERN FULL SCREEN SEARCH - PREMIUM BLACK THEME
    ============================================ -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content search-modal-content">
            <div class="modal-header search-modal-header">
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"/>
                        <line x1="6" y1="6" x2="18" y2="18"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body search-modal-body">
                <div class="search-container">
                    <div class="search-icon-large">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                    </div>
                    <div class="search-input-wrapper">
                        <input type="text" class="search-input" placeholder="Type to search..." autofocus>
                        <button class="search-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                            </svg>
                        </button>
                    </div>
                    <p class="search-hint">Press <kbd>ESC</kbd> to close</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================
    ULTRA MODERN FULL SCREEN SEARCH END
    ============================================ -->

<!-- ============================================
    ENHANCED STYLES - PREMIUM BLACK THEME
    ============================================ -->
<style>
    /* ============================================
    CSS VARIABLES
    ============================================ */
    :root {
        --navbar-bg: rgba(10, 10, 10, 0.92);
        --navbar-scrolled: rgba(10, 10, 10, 0.98);
        --navbar-border: rgba(255, 255, 255, 0.04);
        --text-primary: #ffffff;
        --text-secondary: #e2e8f0;
        --text-muted: #94a3b8;
        --text-nav: #94a3b8;
        --text-nav-hover: #c084fc;
        --text-nav-active: #c084fc;
        --gradient-primary: linear-gradient(135deg, #667eea, #764ba2);
        --gradient-glow: linear-gradient(135deg, #8b8bf7, #c084fc);
        --shadow-glow: 0 4px 25px rgba(102, 126, 234, 0.3);
        --shadow-heavy: 0 20px 60px rgba(0, 0, 0, 0.6);
        --transition-smooth: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        --transition-fast: all 0.3s ease;
    }

    /* ============================================
    MODERN NAVBAR - PREMIUM BLACK THEME
    ============================================ */
    .modern-navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1050;
        background: var(--navbar-bg);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid var(--navbar-border);
        transition: var(--transition-smooth);
        padding: 0 1.5rem;
    }

    .modern-navbar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 10% 50%, rgba(102, 126, 234, 0.03) 0%, transparent 50%),
            radial-gradient(circle at 90% 50%, rgba(236, 72, 153, 0.02) 0%, transparent 50%);
        pointer-events: none;
        z-index: 0;
    }

    .modern-navbar.scrolled {
        background: var(--navbar-scrolled);
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.6);
        border-bottom-color: rgba(255, 255, 255, 0.06);
    }

    .navbar-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 70px;
        position: relative;
        z-index: 1;
    }

    /* ============================================
    BRAND LOGO
    ============================================ */
    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
        flex-shrink: 0;
        transition: var(--transition-smooth);
        position: relative;
    }

    .navbar-brand:hover {
        transform: scale(1.03);
    }

    .brand-logo {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .logo-image {
        height: 45px;
        width: auto;
        transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        filter: brightness(0) invert(1);
    }

    .navbar-brand:hover .logo-image {
        transform: scale(1.05) rotate(-3deg);
    }

    .brand-text {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--text-primary);
        letter-spacing: -0.02em;
        text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
    }

    .brand-highlight {
        background: var(--gradient-glow);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
    }

    .brand-highlight::after {
        content: '';
        position: absolute;
        bottom: 2px;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--gradient-glow);
        border-radius: 2px;
        opacity: 0.3;
    }

    .brand-tagline {
        font-size: 0.6rem;
        font-weight: 400;
        color: var(--text-muted);
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 0.1rem 0.5rem;
        background: rgba(255, 255, 255, 0.04);
        border-radius: 50px;
        border: 1px solid rgba(255, 255, 255, 0.04);
        margin-left: -0.25rem;
        opacity: 0.6;
        transition: var(--transition-fast);
    }

    .navbar-brand:hover .brand-tagline {
        opacity: 1;
    }

    /* ============================================
    MOBILE TOGGLER
    ============================================ */
    .navbar-toggler {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: none;
        border: none;
        padding: 0.5rem;
        cursor: pointer;
        transition: var(--transition-fast);
        z-index: 2;
    }

    .navbar-toggler.active .toggler-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
        background: var(--text-nav-hover);
    }

    .navbar-toggler.active .toggler-line:nth-child(2) {
        opacity: 0;
        transform: scaleX(0);
    }

    .navbar-toggler.active .toggler-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
        background: var(--text-nav-hover);
    }

    .toggler-line {
        width: 28px;
        height: 2.5px;
        background: var(--text-secondary);
        border-radius: 2px;
        transition: var(--transition-fast);
        transform-origin: center;
    }

    /* ============================================
    NAVBAR COLLAPSE
    ============================================ */
    .navbar-collapse {
        display: flex;
        align-items: center;
        flex: 1;
        justify-content: flex-end;
        gap: 1.5rem;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-item {
        position: relative;
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.5rem 1rem;
        color: var(--text-nav);
        font-weight: 500;
        font-size: 0.95rem;
        text-decoration: none;
        border-radius: 0.5rem;
        transition: var(--transition-fast);
        position: relative;
        cursor: pointer;
    }

    .nav-link .nav-icon {
        font-size: 1.1rem;
        opacity: 0.5;
        transition: var(--transition-fast);
        filter: grayscale(0.3);
    }

    .nav-link:hover .nav-icon {
        opacity: 1;
        filter: grayscale(0);
        transform: scale(1.1);
    }

    .nav-link .nav-text {
        transition: var(--transition-fast);
    }

    .nav-link:hover {
        color: var(--text-nav-hover);
        background: rgba(139, 139, 247, 0.06);
    }

    .nav-link:hover .nav-text {
        transform: translateX(2px);
    }

    .nav-link.active {
        color: var(--text-nav-active);
        background: rgba(139, 139, 247, 0.08);
    }

    .nav-link.active .nav-icon {
        opacity: 1;
        filter: grayscale(0);
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 4px;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 2.5px;
        background: var(--gradient-glow);
        border-radius: 2px;
        box-shadow: 0 0 20px rgba(139, 139, 247, 0.3);
        animation: activePulse 2s ease-in-out infinite;
    }

    @keyframes activePulse {
        0%, 100% {
            opacity: 1;
            transform: translateX(-50%) scaleX(1);
        }
        50% {
            opacity: 0.7;
            transform: translateX(-50%) scaleX(0.8);
        }
    }

    /* ============================================
    DROPDOWN
    ============================================ */
    .dropdown-arrow {
        font-size: 0.6rem;
        transition: var(--transition-fast);
        opacity: 0.5;
    }

    .nav-link:hover .dropdown-arrow {
        opacity: 1;
        transform: rotate(180deg);
    }

    .dropdown-menu {
        position: absolute;
        top: calc(100% + 0.5rem);
        left: 50%;
        transform: translateX(-50%) translateY(10px);
        background: rgba(10, 10, 10, 0.95);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 0.75rem;
        padding: 0.5rem;
        min-width: 220px;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: var(--transition-smooth);
        box-shadow: var(--shadow-heavy);
    }

    .dropdown-menu.show {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
        transform: translateX(-50%) translateY(0);
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1rem;
        color: var(--text-muted);
        font-weight: 500;
        font-size: 0.9rem;
        text-decoration: none;
        border-radius: 0.5rem;
        transition: var(--transition-fast);
        position: relative;
    }

    .dropdown-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%) scaleX(0);
        width: 3px;
        height: 60%;
        background: var(--gradient-glow);
        border-radius: 0 2px 2px 0;
        transition: var(--transition-fast);
    }

    .dropdown-item:hover::before {
        transform: translateY(-50%) scaleX(1);
    }

    .dropdown-item:hover {
        background: rgba(139, 139, 247, 0.08);
        color: var(--text-nav-hover);
        transform: translateX(4px);
    }

    /* ============================================
    NAVBAR ACTIONS
    ============================================ */
    .navbar-actions {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-shrink: 0;
    }

    .btn-search {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 50%;
        color: var(--text-muted);
        transition: var(--transition-smooth);
        cursor: pointer;
        position: relative;
    }

    .btn-search::before {
        content: '';
        position: absolute;
        inset: -2px;
        border-radius: 50%;
        background: var(--gradient-glow);
        opacity: 0;
        transition: var(--transition-fast);
        z-index: -1;
        filter: blur(8px);
    }

    .btn-search:hover::before {
        opacity: 0.3;
    }

    .btn-search:hover {
        background: rgba(139, 139, 247, 0.1);
        color: var(--text-nav-hover);
        transform: scale(1.05);
        border-color: rgba(139, 139, 247, 0.1);
    }

    .btn-search svg {
        transition: var(--transition-fast);
        stroke: currentColor;
    }

    .btn-search:hover svg {
        transform: scale(1.1);
    }

    .btn-appointment {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.5rem;
        background: var(--gradient-primary);
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: var(--transition-smooth);
        box-shadow: var(--shadow-glow);
        position: relative;
        overflow: hidden;
    }

    .btn-appointment::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
        transition: left 0.6s ease;
    }

    .btn-appointment:hover::before {
        left: 100%;
    }

    .btn-appointment:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 8px 35px rgba(102, 126, 234, 0.4);
        color: white;
    }

    .btn-appointment svg {
        transition: var(--transition-fast);
        stroke: currentColor;
    }

    .btn-appointment:hover svg {
        transform: scale(1.1) rotate(-5deg);
    }

    .btn-badge {
        display: inline-block;
        padding: 0.1rem 0.5rem;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50px;
        font-size: 0.55rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        animation: badgePulse 2s ease-in-out infinite;
    }

    @keyframes badgePulse {
        0%, 100% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(0.9);
            opacity: 0.7;
        }
    }

    /* ============================================
    SEARCH MODAL - PREMIUM BLACK THEME
    ============================================ */
    .search-modal-content {
        background: rgba(0, 0, 0, 0.96);
        backdrop-filter: blur(30px);
        -webkit-backdrop-filter: blur(30px);
        border: none;
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .search-modal-header {
        border: none;
        padding: 2rem 2rem 0;
        justify-content: flex-end;
        flex-shrink: 0;
    }

    .btn-close-custom {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 50%;
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-muted);
        transition: var(--transition-smooth);
        cursor: pointer;
    }

    .btn-close-custom:hover {
        background: rgba(255, 255, 255, 0.08);
        transform: rotate(90deg);
        color: white;
    }

    .btn-close-custom svg {
        stroke: currentColor;
    }

    .search-modal-body {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
        flex: 1;
    }

    .search-container {
        width: 100%;
        max-width: 700px;
        text-align: center;
        animation: searchFadeIn 0.6s ease forwards;
    }

    @keyframes searchFadeIn {
        from {
            opacity: 0;
            transform: translateY(20px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .search-icon-large {
        color: rgba(255, 255, 255, 0.06);
        margin-bottom: 2rem;
        animation: pulseGlow 2s ease-in-out infinite;
    }

    .search-icon-large svg {
        stroke: currentColor;
    }

    @keyframes pulseGlow {
        0%, 100% {
            transform: scale(1);
            opacity: 0.06;
        }
        50% {
            transform: scale(1.05);
            opacity: 0.15;
        }
    }

    .search-input-wrapper {
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.04);
        border: 2px solid rgba(255, 255, 255, 0.06);
        border-radius: 1rem;
        overflow: hidden;
        transition: var(--transition-smooth);
    }

    .search-input-wrapper:focus-within {
        border-color: rgba(139, 139, 247, 0.3);
        box-shadow: 0 0 0 4px rgba(139, 139, 247, 0.05);
        background: rgba(255, 255, 255, 0.06);
        transform: scale(1.02);
    }

    .search-input {
        flex: 1;
        padding: 1.25rem 1.5rem;
        background: transparent;
        border: none;
        color: var(--text-primary);
        font-size: 1.2rem;
        outline: none;
        font-weight: 300;
        font-family: 'Inter', sans-serif;
    }

    .search-input::placeholder {
        color: rgba(255, 255, 255, 0.15);
    }

    .search-input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 30px rgba(0, 0, 0, 0.8) inset !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .search-submit {
        padding: 1.25rem 1.5rem;
        background: var(--gradient-primary);
        border: none;
        color: white;
        cursor: pointer;
        transition: var(--transition-fast);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .search-submit:hover {
        opacity: 0.9;
        transform: scale(1.02);
    }

    .search-submit svg {
        stroke: currentColor;
    }

    .search-hint {
        color: rgba(255, 255, 255, 0.15);
        font-size: 0.85rem;
        margin-top: 1.5rem;
        font-weight: 300;
        letter-spacing: 0.5px;
    }

    .search-hint kbd {
        background: rgba(255, 255, 255, 0.04);
        padding: 0.15rem 0.6rem;
        border-radius: 4px;
        font-size: 0.75rem;
        color: rgba(255, 255, 255, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.04);
        font-family: 'Inter', monospace;
    }

    /* ============================================
    ANIMATIONS
    ============================================ */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .navbar-collapse.show {
        animation: slideDown 0.3s ease forwards;
    }

    /* ============================================
    RESPONSIVE DESIGN
    ============================================ */
    @media (max-width: 992px) {
        .navbar-toggler {
            display: flex;
        }

        .navbar-collapse {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: rgba(10, 10, 10, 0.98);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 1.5rem;
            flex-direction: column;
            align-items: stretch;
            gap: 1rem;
            box-shadow: var(--shadow-heavy);
            border-top: 1px solid rgba(255, 255, 255, 0.04);
            display: none;
        }

        .navbar-collapse.show {
            display: flex;
        }

        .navbar-nav {
            flex-direction: column;
            align-items: stretch;
            gap: 0.25rem;
            width: 100%;
        }

        .nav-link {
            padding: 0.75rem 1rem;
            font-size: 1rem;
            color: var(--text-secondary);
        }

        .nav-link.active::after {
            display: none;
        }

        .nav-link.active {
            background: rgba(139, 139, 247, 0.06);
        }

        .dropdown-menu {
            position: static;
            transform: none;
            background: rgba(255, 255, 255, 0.02);
            border: none;
            box-shadow: none;
            padding: 0.25rem 0 0.25rem 1.5rem;
            margin-top: 0.25rem;
            opacity: 1;
            visibility: visible;
            pointer-events: all;
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-item {
            color: var(--text-muted);
            padding: 0.5rem 0.75rem;
        }

        .dropdown-item:hover {
            background: rgba(139, 139, 247, 0.04);
        }

        .dropdown-item::before {
            display: none;
        }

        .navbar-actions {
            width: 100%;
            justify-content: center;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.04);
        }

        .btn-appointment {
            flex: 1;
            justify-content: center;
        }

        .btn-search {
            width: 44px;
            height: 44px;
        }

        .brand-tagline {
            display: none;
        }

        .btn-badge {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .modern-navbar {
            padding: 0 1rem;
        }

        .brand-text {
            font-size: 1.2rem;
        }

        .logo-image {
            height: 35px;
        }

        .navbar-container {
            height: 60px;
        }

        .btn-appointment span {
            display: none;
        }

        .btn-appointment {
            padding: 0.6rem 1rem;
            min-width: 44px;
            justify-content: center;
        }

        .search-modal-body {
            padding: 1rem;
        }

        .search-input {
            font-size: 1rem;
            padding: 1rem;
        }

        .search-submit {
            padding: 1rem;
        }

        .search-icon-large svg {
            width: 32px;
            height: 32px;
        }

        .btn-close-custom {
            width: 40px;
            height: 40px;
        }

        .btn-close-custom svg {
            width: 22px;
            height: 22px;
        }
    }

    @media (max-width: 380px) {
        .brand-text {
            font-size: 1rem;
        }

        .logo-image {
            height: 30px;
        }

        .navbar-container {
            height: 55px;
        }

        .btn-search {
            width: 38px;
            height: 38px;
        }

        .btn-appointment {
            padding: 0.5rem 0.75rem;
            font-size: 0.8rem;
        }
    }

    /* ============================================
    DARK MODE OVERRIDE (already black)
    ============================================ */
    @media (prefers-color-scheme: light) {
        .modern-navbar {
            background: rgba(10, 10, 10, 0.92);
        }

        .modern-navbar.scrolled {
            background: rgba(10, 10, 10, 0.98);
        }

        .logo-image {
            filter: brightness(0) invert(1);
        }

        .brand-text {
            color: var(--text-primary);
        }

        .nav-link {
            color: var(--text-nav);
        }

        .nav-link:hover {
            color: var(--text-nav-hover);
        }

        .nav-link.active {
            color: var(--text-nav-active);
        }

        .btn-search {
            color: var(--text-muted);
        }

        .dropdown-menu {
            background: rgba(10, 10, 10, 0.95);
        }

        .dropdown-item {
            color: var(--text-muted);
        }

        .navbar-collapse.show {
            background: rgba(10, 10, 10, 0.98);
        }

        .search-modal-content {
            background: rgba(0, 0, 0, 0.96);
        }

        .navbar-actions {
            border-top-color: rgba(255, 255, 255, 0.04);
        }

        .toggler-line {
            background: var(--text-secondary);
        }

        .brand-tagline {
            color: var(--text-muted);
        }
    }
</style>

<!-- ============================================
    JAVASCRIPT
    ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== Mobile Toggle =====
        const toggler = document.getElementById('navbarToggler');
        const collapse = document.getElementById('navbarCollapse');

        if (toggler && collapse) {
            toggler.addEventListener('click', function() {
                const isOpen = this.classList.toggle('active');
                collapse.classList.toggle('show');
                this.setAttribute('aria-expanded', isOpen);
                document.body.style.overflow = isOpen ? 'hidden' : '';
            });
        }

        // ===== Close menu on link click (mobile) =====
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Don't close if it's a dropdown toggle on mobile
                if (this.classList.contains('dropdown-toggle')) {
                    if (window.innerWidth <= 992) {
                        e.preventDefault();
                        const menu = this.nextElementSibling;
                        if (menu && menu.classList.contains('dropdown-menu')) {
                            menu.classList.toggle('show');
                        }
                    }
                    return;
                }

                if (window.innerWidth <= 992) {
                    toggler.classList.remove('active');
                    toggler.setAttribute('aria-expanded', 'false');
                    collapse.classList.remove('show');
                    document.body.style.overflow = '';
                }
            });
        });

        // ===== Navbar scroll effect =====
        const navbar = document.querySelector('.modern-navbar');
        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        }, { passive: true });

        // ===== Close search modal with ESC key =====
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const searchModal = document.getElementById('searchModal');
                if (searchModal && searchModal.classList.contains('show')) {
                    const closeBtn = searchModal.querySelector('.btn-close-custom');
                    if (closeBtn) {
                        closeBtn.click();
                    }
                }
            }
        });

        // ===== Focus search input when modal opens =====
        const searchModal = document.getElementById('searchModal');
        if (searchModal) {
            searchModal.addEventListener('shown.bs.modal', function() {
                const input = this.querySelector('.search-input');
                if (input) {
                    setTimeout(() => input.focus(), 300);
                }
            });
        }

        // ===== Logo image error fallback =====
        const logoImg = document.querySelector('.logo-image');
        if (logoImg) {
            logoImg.addEventListener('error', function() {
                this.style.display = 'none';
                const brandText = document.querySelector('.brand-text');
                if (brandText) {
                    brandText.style.display = 'block';
                }
            });
        }

        // ===== Smooth scroll for anchor links =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    const navbarHeight = navbar ? navbar.offsetHeight : 0;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
