<!-- Modern Banner/Info Section Start -->
<section class="banner-section">
    <div class="banner-container">
        <div class="banner-grid">
            <!-- Card 1: Opening Hours -->
            <div class="banner-card card-hours wow fadeInUp" data-wow-delay="0.1s">
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Opening Hours</h3>
                    </div>

                    <div class="hours-list">
                        <div class="hour-item">
                            <span class="day">Monday - Friday</span>
                            <span class="time">8:00 AM - 9:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span class="day">Saturday</span>
                            <span class="time">8:00 AM - 7:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span class="day">Sunday</span>
                            <span class="time">8:00 AM - 5:00 PM</span>
                        </div>
                    </div>

                    <a href="{{ route('frontEnd.login') }}" class="btn-appointment-card">
                        <span>Book Appointment</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/>
                            <path d="M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Search Doctor -->
            <div class="banner-card card-search wow fadeInUp" data-wow-delay="0.3s">
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Find a Doctor</h3>
                    </div>

                    <div class="search-form">
                        <div class="input-group">
                            <div class="input-wrapper">
                                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                <input type="datetime-local" class="search-input" placeholder="Select Date & Time">
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-wrapper">
                                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                                <select class="search-select">
                                    <option value="">Select Department</option>
                                    @foreach ($users ?? [] as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <a href="#" class="btn-search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                            </svg>
                            Search Doctor
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Call for Appointment -->
            <div class="banner-card card-call wow fadeInUp" data-wow-delay="0.6s">
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Call for Appointment</h3>
                    </div>

                    <div class="call-content">
                        <div class="support-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <polyline points="9 12 11 14 15 10"/>
                            </svg>
                            24/7 Support Available
                        </div>

                        <p class="call-label">Emergency & Appointment Hotline</p>

                        <div class="phone-number">
                            <span class="phone-icon">📞</span>
                            <a href="tel:+88000000000" class="phone-link">+880 0000 00000</a>
                        </div>

                        <div class="call-features">
                            <div class="feature-item">
                                <span class="feature-dot"></span>
                                <span>Emergency Services</span>
                            </div>
                            <div class="feature-item">
                                <span class="feature-dot"></span>
                                <span>Appointment Booking</span>
                            </div>
                            <div class="feature-item">
                                <span class="feature-dot"></span>
                                <span>Health Consultation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modern Banner/Info Section End -->

<!-- Custom CSS -->
<style>
    /* ===== Banner Section ===== */
    .banner-section {
        padding: 3rem 1.5rem;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        position: relative;
        overflow: hidden;
    }

    .banner-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at 30% 50%, rgba(102, 126, 234, 0.05) 0%, transparent 50%);
        animation: rotateGradient 30s linear infinite;
        pointer-events: none;
    }

    @keyframes rotateGradient {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .banner-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .banner-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }

    /* ===== Banner Cards ===== */
    .banner-card {
        position: relative;
        border-radius: 1.25rem;
        padding: 2rem;
        min-height: 350px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        isolation: isolate;
    }

    .banner-card:hover {
        transform: translateY(-10px) scale(1.01);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    .card-glow {
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1), transparent 70%);
        pointer-events: none;
        transition: all 0.6s ease;
    }

    .banner-card:hover .card-glow {
        transform: scale(1.2);
        opacity: 0.8;
    }

    /* Card 1: Hours */
    .card-hours {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .card-hours .card-glow {
        background: radial-gradient(circle, rgba(255, 255, 255, 0.15), transparent 70%);
    }

    /* Card 2: Search */
    .card-search {
        background: linear-gradient(135deg, #2d3436 0%, #1a1a2e 100%);
        color: white;
    }

    .card-search .card-glow {
        background: radial-gradient(circle, rgba(102, 126, 234, 0.1), transparent 70%);
    }

    /* Card 3: Call */
    .card-call {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
    }

    .card-call .card-glow {
        background: radial-gradient(circle, rgba(255, 255, 255, 0.15), transparent 70%);
    }

    /* ===== Card Content ===== */
    .card-content {
        position: relative;
        z-index: 2;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .card-icon {
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .banner-card:hover .card-icon {
        transform: scale(1.1) rotate(-5deg);
        background: rgba(255, 255, 255, 0.25);
    }

    .card-icon svg {
        stroke: white;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 0;
        letter-spacing: -0.01em;
    }

    /* ===== Hours List ===== */
    .hours-list {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .hour-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .hour-item:last-child {
        border-bottom: none;
    }

    .day {
        font-weight: 500;
        opacity: 0.9;
    }

    .time {
        font-weight: 600;
        background: rgba(255, 255, 255, 0.1);
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
        font-size: 0.85rem;
    }

    /* ===== Appointment Button ===== */
    .btn-appointment-card {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.65rem 1.5rem;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50px;
        color: white;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        text-decoration: none;
        margin-top: auto;
    }

    .btn-appointment-card:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateX(4px);
        color: white;
        border-color: rgba(255, 255, 255, 0.4);
    }

    .btn-appointment-card svg {
        transition: transform 0.3s ease;
    }

    .btn-appointment-card:hover svg {
        transform: translateX(4px);
    }

    /* ===== Search Form ===== */
    .search-form {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .input-group {
        width: 100%;
    }

    .input-wrapper {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 0.75rem;
        padding: 0 1rem;
        border: 1px solid rgba(255, 255, 255, 0.06);
        transition: all 0.3s ease;
    }

    .input-wrapper:focus-within {
        background: rgba(255, 255, 255, 0.12);
        border-color: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 20px rgba(102, 126, 234, 0.1);
    }

    .input-icon {
        color: rgba(255, 255, 255, 0.5);
        flex-shrink: 0;
    }

    .search-input,
    .search-select {
        width: 100%;
        padding: 0.75rem 0;
        background: transparent;
        border: none;
        color: white;
        font-size: 0.9rem;
        outline: none;
    }

    .search-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .search-select {
        color: white;
        cursor: pointer;
    }

    .search-select option {
        background: #1a1a2e;
        color: white;
    }

    .search-select:invalid {
        color: rgba(255, 255, 255, 0.4);
    }

    .btn-search {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.75rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 0.75rem;
        color: white;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
        margin-top: auto;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-search:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        color: white;
    }

    .btn-search svg {
        transition: transform 0.3s ease;
    }

    .btn-search:hover svg {
        transform: scale(1.1);
    }

    /* ===== Call Card ===== */
    .call-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .support-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        padding: 0.35rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 500;
        width: fit-content;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .call-label {
        font-size: 0.95rem;
        opacity: 0.8;
        margin: 0;
    }

    .phone-number {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 0.5rem 0;
    }

    .phone-icon {
        font-size: 2rem;
    }

    .phone-link {
        font-size: 2rem;
        font-weight: 800;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        letter-spacing: -0.02em;
    }

    .phone-link:hover {
        transform: scale(1.05);
        color: white;
    }

    .call-features {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 0.5rem;
        margin-top: auto;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.8rem;
        background: rgba(255, 255, 255, 0.08);
        padding: 0.35rem 0.75rem;
        border-radius: 0.5rem;
        white-space: nowrap;
    }

    .feature-dot {
        width: 6px;
        height: 6px;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 50%;
        flex-shrink: 0;
    }

    /* ===== Animations ===== */
    .wow {
        visibility: hidden;
    }

    .fadeInUp {
        animation: fadeInUp 0.8s ease forwards;
        visibility: visible;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== Responsive Design ===== */
    @media (max-width: 992px) {
        .banner-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.25rem;
        }

        .banner-card {
            min-height: 320px;
            padding: 1.75rem;
        }

        .phone-link {
            font-size: 1.5rem;
        }

        .call-features {
            grid-template-columns: 1fr;
            gap: 0.4rem;
        }
    }

    @media (max-width: 768px) {
        .banner-section {
            padding: 2rem 1rem;
        }

        .banner-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .banner-card {
            min-height: 280px;
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.1rem;
        }

        .card-icon {
            width: 40px;
            height: 40px;
        }

        .phone-link {
            font-size: 1.3rem;
        }

        .phone-icon {
            font-size: 1.5rem;
        }

        .hour-item {
            padding: 0.4rem 0;
        }

        .call-features {
            grid-template-columns: 1fr 1fr;
        }

        .btn-appointment-card {
            padding: 0.55rem 1.25rem;
            font-size: 0.85rem;
        }
    }

    @media (max-width: 480px) {
        .banner-card {
            min-height: 250px;
            padding: 1.25rem;
            border-radius: 1rem;
        }

        .card-header {
            margin-bottom: 1rem;
        }

        .card-icon {
            width: 36px;
            height: 36px;
        }

        .card-icon svg {
            width: 20px;
            height: 20px;
        }

        .time {
            font-size: 0.75rem;
            padding: 0.15rem 0.5rem;
        }

        .search-input,
        .search-select {
            font-size: 0.8rem;
            padding: 0.6rem 0;
        }

        .btn-search {
            font-size: 0.85rem;
            padding: 0.65rem;
        }

        .phone-link {
            font-size: 1.1rem;
        }

        .call-features {
            grid-template-columns: 1fr;
        }
    }

    /* ===== Accessibility ===== */
    .banner-card:focus-within {
        outline: 2px solid rgba(102, 126, 234, 0.5);
        outline-offset: 2px;
    }

    .search-input:focus,
    .search-select:focus {
        outline: none;
    }

    /* ===== Dark Mode Support ===== */
    @media (prefers-color-scheme: dark) {
        .banner-section {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        }
    }
</style>
