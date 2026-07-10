<!-- ============================================
    MODERN TOP BAR / UTILITY NAVIGATION
    ============================================ -->

@if (Route::is('frontEnd.appointments*'))
    <!-- ===== Appointments Top Bar ===== -->
    <div class="topbar topbar-appointments">
        <div class="topbar-container">
            <div class="topbar-content">
                <!-- Left: Breadcrumb -->
                <div class="topbar-left">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb-modern">
                            <li class="breadcrumb-item">
                                <a href="{{ route('frontEnd.home') }}" class="breadcrumb-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="breadcrumb-separator">›</span>
                                <a href="{{ route('frontEnd.appointments.create') }}" class="breadcrumb-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6"/>
                                        <line x1="8" y1="2" x2="8" y2="6"/>
                                        <line x1="3" y1="10" x2="21" y2="10"/>
                                    </svg>
                                    <span>New Appointment</span>
                                </a>
                            </li>
                            @if (Route::is('frontEnd.appointments.show'))
                                <li class="breadcrumb-item">
                                    <span class="breadcrumb-separator">›</span>
                                    <span class="breadcrumb-current">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                            <circle cx="12" cy="7" r="4"/>
                                        </svg>
                                        <span>Appointment Details</span>
                                    </span>
                                </li>
                            @endif
                        </ol>
                    </nav>
                </div>

                <!-- Right: User Actions -->
                <div class="topbar-right">
                    <!-- Card Info -->
                    @if (Route::is('frontEnd.appointments.show') && isset($appointment) && $appointment->user->card)
                        <div class="topbar-item card-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="5" width="20" height="14" rx="2"/>
                                <line x1="2" y1="10" x2="22" y2="10"/>
                            </svg>
                            <span class="card-label">Card No.</span>
                            <span class="card-number">{{ $appointment->user->card->card_no }}</span>
                        </div>
                    @endif

                    <!-- My Appointments -->
                    <a href="{{ route('frontEnd.appointments.index') }}" class="topbar-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        <span>My Appointments</span>
                        <span class="badge-count">3</span>
                    </a>

                    <!-- Profile -->
                    <a href="#" class="topbar-link profile-link">
                        <div class="profile-avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </div>
                        <span>Profile</span>
                    </a>

                    <!-- Logout -->
                    <a href="{{ route('frontEnd.logout') }}" class="topbar-link logout-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" y1="12" x2="9" y2="12"/>
                        </svg>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

@else
    <!-- ===== Public Top Bar ===== -->
    <div class="topbar topbar-public">
        <div class="topbar-container">
            <div class="topbar-content">
                <!-- Left: Opening Hours -->
                <div class="topbar-left">
                    <div class="topbar-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span class="info-label">Opening Hours:</span>
                        <span class="info-value">Everyday Evening : 5.00 pm - 10.00 pm</span>
                    </div>
                </div>

                <!-- Right: Contact & Auth -->
                <div class="topbar-right">
                    <!-- Email -->
                    <a href="mailto:info@rapidcare.com" class="topbar-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span>info@rapidcare.com</span>
                    </a>

                    <!-- Phone -->
                    <a href="tel:+8801733172007" class="topbar-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                        </svg>
                        <span>+880 1733 172 007</span>
                    </a>

                    <!-- Login Link -->
                    @if (Route::is('frontEnd.login'))
                        <a href="{{ route('frontEnd.login') }}" class="topbar-link login-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                                <polyline points="10 17 15 12 10 7"/>
                                <line x1="15" y1="12" x2="3" y2="12"/>
                            </svg>
                            <span>Sign In</span>
                        </a>
                    @else
                        <a href="{{ route('frontEnd.login') }}" class="topbar-link login-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                                <polyline points="10 17 15 12 10 7"/>
                                <line x1="15" y1="12" x2="3" y2="12"/>
                            </svg>
                            <span>Login</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif

<!-- ============================================
    STYLES
    ============================================ -->

<style>
    /* ===== Top Bar Base ===== */
    .topbar {
        position: relative;
        z-index: 1060;
        padding: 0.35rem 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
    }

    .topbar-appointments {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        border-bottom: none;
    }

    .topbar-public {
        background: #f8f9fa;
        color: #4a5568;
    }

    .topbar-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .topbar-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 0.5rem 1rem;
        min-height: 42px;
    }

    /* ===== Left Side ===== */
    .topbar-left {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex: 1;
    }

    /* ===== Breadcrumb ===== */
    .breadcrumb-modern {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        list-style: none;
        padding: 0;
        margin: 0;
        flex-wrap: wrap;
    }

    .breadcrumb-item {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.85rem;
    }

    .breadcrumb-link {
        display: flex;
        align-items: center;
        gap: 0.3rem;
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        transition: all 0.3s ease;
        padding: 0.2rem 0.4rem;
        border-radius: 4px;
    }

    .breadcrumb-link:hover {
        color: white;
        background: rgba(255, 255, 255, 0.1);
    }

    .breadcrumb-link svg {
        stroke: currentColor;
        flex-shrink: 0;
    }

    .breadcrumb-separator {
        color: rgba(255, 255, 255, 0.4);
        font-size: 1.1rem;
        font-weight: 300;
        padding: 0 0.1rem;
    }

    .breadcrumb-current {
        display: flex;
        align-items: center;
        gap: 0.3rem;
        color: rgba(255, 255, 255, 0.7);
        font-weight: 500;
        padding: 0.2rem 0.4rem;
    }

    .breadcrumb-current svg {
        stroke: currentColor;
        flex-shrink: 0;
    }

    /* ===== Topbar Info (Public) ===== */
    .topbar-info {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.85rem;
    }

    .topbar-info svg {
        stroke: #667eea;
        flex-shrink: 0;
    }

    .info-label {
        font-weight: 600;
        color: #4a5568;
    }

    .info-value {
        color: #718096;
    }

    /* ===== Right Side ===== */
    .topbar-right {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        flex-wrap: wrap;
    }

    /* ===== Topbar Links ===== */
    .topbar-link {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.3rem 0.75rem;
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        font-size: 0.85rem;
        border-radius: 6px;
        transition: all 0.3s ease;
        position: relative;
        border: none;
        background: none;
        cursor: pointer;
    }

    .topbar-appointments .topbar-link {
        color: rgba(255, 255, 255, 0.85);
    }

    .topbar-appointments .topbar-link:hover {
        color: white;
        background: rgba(255, 255, 255, 0.1);
    }

    .topbar-public .topbar-link {
        color: #4a5568;
    }

    .topbar-public .topbar-link:hover {
        color: #667eea;
        background: rgba(102, 126, 234, 0.06);
    }

    .topbar-link svg {
        stroke: currentColor;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    .topbar-link:hover svg {
        transform: scale(1.1);
    }

    /* ===== Badge Count ===== */
    .badge-count {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #f56565;
        color: white;
        font-size: 0.6rem;
        font-weight: 700;
        min-width: 18px;
        height: 18px;
        padding: 0 5px;
        border-radius: 50px;
        line-height: 1;
        margin-left: -2px;
    }

    /* ===== Card Info ===== */
    .card-info {
        display: flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.3rem 0.75rem;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 6px;
        font-size: 0.85rem;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .card-info svg {
        stroke: rgba(255, 255, 255, 0.7);
        flex-shrink: 0;
    }

    .card-label {
        color: rgba(255, 255, 255, 0.6);
        font-weight: 400;
    }

    .card-number {
        color: white;
        font-weight: 700;
        letter-spacing: 0.5px;
        font-family: 'Courier New', monospace;
        background: rgba(255, 255, 255, 0.08);
        padding: 0.1rem 0.5rem;
        border-radius: 4px;
    }

    /* ===== Profile Avatar ===== */
    .profile-avatar {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .topbar-link:hover .profile-avatar {
        border-color: rgba(255, 255, 255, 0.3);
        background: rgba(255, 255, 255, 0.25);
    }

    .profile-avatar svg {
        stroke: rgba(255, 255, 255, 0.7);
        width: 16px;
        height: 16px;
    }

    /* ===== Login Link ===== */
    .login-link {
        font-weight: 600;
        padding: 0.3rem 1rem;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white !important;
        border-radius: 50px;
        border: none;
        box-shadow: 0 2px 10px rgba(102, 126, 234, 0.2);
    }

    .login-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(102, 126, 234, 0.3);
        background: linear-gradient(135deg, #5a6fd6, #6a3f92);
        color: white !important;
    }

    .login-link svg {
        stroke: white !important;
    }

    /* ===== Logout Link ===== */
    .logout-link {
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50px;
    }

    .logout-link:hover {
        background: rgba(255, 255, 255, 0.15);
    }

    /* ===== Responsive Design ===== */
    @media (max-width: 992px) {
        .topbar {
            display: none !important;
        }
    }

    @media (max-width: 768px) {
        .topbar-content {
            flex-direction: column;
            align-items: stretch;
            gap: 0.3rem;
            padding: 0.3rem 0;
        }

        .topbar-left,
        .topbar-right {
            justify-content: center;
            flex-wrap: wrap;
        }

        .breadcrumb-modern {
            justify-content: center;
        }

        .topbar-info {
            flex-wrap: wrap;
            justify-content: center;
        }

        .card-info {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .breadcrumb-item {
            font-size: 0.75rem;
        }

        .breadcrumb-link {
            padding: 0.1rem 0.3rem;
        }

        .topbar-link {
            font-size: 0.75rem;
            padding: 0.2rem 0.5rem;
        }

        .card-number {
            font-size: 0.8rem;
        }

        .topbar-container {
            padding: 0 0.75rem;
        }
    }

    /* ===== Dark Mode ===== */
    @media (prefers-color-scheme: dark) {
        .topbar-public {
            background: rgba(255, 255, 255, 0.03);
            border-bottom-color: rgba(255, 255, 255, 0.04);
        }

        .topbar-public .topbar-link {
            color: #a0aec0;
        }

        .topbar-public .topbar-link:hover {
            color: #a78bfa;
            background: rgba(167, 139, 250, 0.06);
        }

        .info-label {
            color: #e2e8f0;
        }

        .info-value {
            color: #a0aec0;
        }

        .topbar-info svg {
            stroke: #a78bfa;
        }
    }
</style>

<!-- ============================================
    JAVASCRIPT
    ============================================ -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== Topbar Scroll Effect =====
        const topbar = document.querySelector('.topbar');
        if (topbar) {
            let lastScroll = 0;
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
                if (currentScroll > 100) {
                    topbar.style.transform = 'translateY(-100%)';
                    topbar.style.opacity = '0';
                } else {
                    topbar.style.transform = 'translateY(0)';
                    topbar.style.opacity = '1';
                }
                lastScroll = currentScroll;
            });
        }

        // ===== Breadcrumb Click Tracking =====
        document.querySelectorAll('.breadcrumb-link').forEach(link => {
            link.addEventListener('click', function(e) {
                // Optional analytics tracking
                if (window.gtag) {
                    gtag('event', 'breadcrumb_click', {
                        'event_category': 'navigation',
                        'event_label': this.textContent.trim(),
                        'value': 1
                    });
                }
            });
        });

        // ===== Logout Confirmation =====
        document.querySelectorAll('.logout-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (!confirm('Are you sure you want to logout?')) {
                    e.preventDefault();
                }
            });
        });
    });
</script>
