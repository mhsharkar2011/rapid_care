<!-- Modern Hero Carousel Start -->
<section class="hero-carousel-section">
    <div id="heroCarousel" class="hero-carousel carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            @for ($i = 0; $i < 3; $i++)
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $i }}"
                        class="{{ $i === 0 ? 'active' : '' }}"
                        aria-label="Slide {{ $i + 1 }}">
                    <span class="indicator-number">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                </button>
            @endfor
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="slide-wrapper">
                    <div class="slide-background">
                        <img class="slide-image" src="{{ asset('upload/img/carousel-1.jpg') }}" alt="Healthcare Excellence">
                        <div class="slide-overlay"></div>
                        <div class="slide-gradient"></div>
                    </div>

                    <div class="slide-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="slide-badge animate__animated animate__fadeInDown">
                                        <span class="badge-icon">⚕️</span>
                                        Trusted Healthcare Provider
                                    </div>

                                    <h5 class="slide-subtitle animate__animated animate__fadeInUp">
                                        Keep Your Health Healthy
                                    </h5>

                                    <h1 class="slide-title animate__animated animate__fadeInUp animate__delay-1s">
                                        Take The Best Quality<br>
                                        <span class="gradient-text">Health Treatment</span>
                                    </h1>

                                    <p class="slide-description animate__animated animate__fadeInUp animate__delay-2s">
                                        Experience world-class healthcare with our team of expert physicians,
                                        state-of-the-art technology, and compassionate care tailored to your needs.
                                    </p>

                                    <div class="slide-buttons animate__animated animate__fadeInUp animate__delay-3s">
                                        <a href="{{ route('frontEnd.appointments.create') }}" class="btn btn-primary btn-lg btn-appointment">
                                            <span>Book Appointment</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"/>
                                                <path d="M12 5l7 7-7 7"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('frontEnd.showContact') }}" class="btn btn-outline-light btn-lg btn-contact">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                                            </svg>
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="slide-wrapper">
                    <div class="slide-background">
                        <img class="slide-image" src="{{ asset('upload/img/carousel-2.jpg') }}" alt="Medical Excellence">
                        <div class="slide-overlay"></div>
                        <div class="slide-gradient slide-gradient-2"></div>
                    </div>

                    <div class="slide-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="slide-badge animate__animated animate__fadeInDown">
                                        <span class="badge-icon">🏥</span>
                                        24/7 Emergency Care
                                    </div>

                                    <h5 class="slide-subtitle animate__animated animate__fadeInUp">
                                        Your Health Is Our Priority
                                    </h5>

                                    <h1 class="slide-title animate__animated animate__fadeInUp animate__delay-1s">
                                        Advanced Medical<br>
                                        <span class="gradient-text-2">Care & Treatment</span>
                                    </h1>

                                    <p class="slide-description animate__animated animate__fadeInUp animate__delay-2s">
                                        From routine check-ups to complex surgeries, we provide comprehensive
                                        medical services using the latest technology and evidence-based practices.
                                    </p>

                                    <div class="slide-buttons animate__animated animate__fadeInUp animate__delay-3s">
                                        <a href="{{ route('frontEnd.appointments.create') }}" class="btn btn-primary btn-lg btn-appointment">
                                            <span>Book Appointment</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"/>
                                                <path d="M12 5l7 7-7 7"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('frontEnd.showContact') }}" class="btn btn-outline-light btn-lg btn-contact">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                                            </svg>
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="slide-wrapper">
                    <div class="slide-background">
                        <img class="slide-image" src="{{ asset('upload/img/carousel-3.jpg') }}" alt="Healthcare Innovation">
                        <div class="slide-overlay"></div>
                        <div class="slide-gradient slide-gradient-3"></div>
                    </div>

                    <div class="slide-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="slide-badge animate__animated animate__fadeInDown">
                                        <span class="badge-icon">🌟</span>
                                        Excellence in Healthcare
                                    </div>

                                    <h5 class="slide-subtitle animate__animated animate__fadeInUp">
                                        Compassionate & Expert Care
                                    </h5>

                                    <h1 class="slide-title animate__animated animate__fadeInUp animate__delay-1s">
                                        Your Journey to<br>
                                        <span class="gradient-text-3">Better Health Starts Here</span>
                                    </h1>

                                    <p class="slide-description animate__animated animate__fadeInUp animate__delay-2s">
                                        Join thousands of satisfied patients who have trusted us with their health.
                                        We're committed to providing personalized care that exceeds expectations.
                                    </p>

                                    <div class="slide-buttons animate__animated animate__fadeInUp animate__delay-3s">
                                        <a href="{{ route('frontEnd.appointments.create') }}" class="btn btn-primary btn-lg btn-appointment">
                                            <span>Book Appointment</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"/>
                                                <path d="M12 5l7 7-7 7"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('frontEnd.showContact') }}" class="btn btn-outline-light btn-lg btn-contact">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                                            </svg>
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="control-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"/>
                </svg>
            </span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="control-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Floating Particles -->
    <div class="particles-container">
        <div class="particle particle-1"></div>
        <div class="particle particle-2"></div>
        <div class="particle particle-3"></div>
        <div class="particle particle-4"></div>
        <div class="particle particle-5"></div>
    </div>
</section>
<!-- Modern Hero Carousel End -->

<!-- Custom CSS -->
<style>
    /* ===== Hero Carousel Section ===== */
    .hero-carousel-section {
        position: relative;
        width: 100%;
        height: 100vh;
        min-height: 600px;
        max-height: 900px;
        overflow: hidden;
        background: #0a0a1a;
    }

    .hero-carousel {
        width: 100%;
        height: 100%;
    }

    /* ===== Slide Wrapper ===== */
    .slide-wrapper {
        position: relative;
        width: 100%;
        height: 100vh;
        min-height: 600px;
        max-height: 900px;
        overflow: hidden;
    }

    .slide-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .slide-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.05);
        transition: transform 8s ease;
    }

    .carousel-item.active .slide-image {
        transform: scale(1);
    }

    /* ===== Overlays ===== */
    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .slide-gradient {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg,
            rgba(102, 126, 234, 0.3) 0%,
            rgba(118, 75, 162, 0.2) 50%,
            rgba(0, 0, 0, 0.6) 100%
        );
        z-index: 1;
    }

    .slide-gradient-2 {
        background: linear-gradient(135deg,
            rgba(245, 87, 108, 0.3) 0%,
            rgba(243, 147, 251, 0.2) 50%,
            rgba(0, 0, 0, 0.6) 100%
        );
    }

    .slide-gradient-3 {
        background: linear-gradient(135deg,
            rgba(16, 185, 129, 0.3) 0%,
            rgba(52, 211, 153, 0.2) 50%,
            rgba(0, 0, 0, 0.6) 100%
        );
    }

    /* ===== Slide Content ===== */
    .slide-content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        padding: 2rem;
    }

    /* ===== Slide Badge ===== */
    .slide-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 0.5rem 1.5rem;
        border-radius: 50px;
        color: white;
        font-size: 0.85rem;
        font-weight: 500;
        letter-spacing: 0.5px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        margin-bottom: 1.5rem;
    }

    .badge-icon {
        font-size: 1.1rem;
    }

    /* ===== Slide Subtitle ===== */
    .slide-subtitle {
        color: rgba(255, 255, 255, 0.8);
        font-size: 1.1rem;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 1rem;
    }

    /* ===== Slide Title ===== */
    .slide-title {
        color: white;
        font-size: 4.5rem;
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .gradient-text-2 {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .gradient-text-3 {
        background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* ===== Slide Description ===== */
    .slide-description {
        color: rgba(255, 255, 255, 0.85);
        font-size: 1.15rem;
        max-width: 600px;
        margin: 0 auto 2rem;
        line-height: 1.8;
        font-weight: 300;
    }

    /* ===== Slide Buttons ===== */
    .slide-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-appointment {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.875rem 2.5rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        text-decoration: none;
    }

    .btn-appointment:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
        color: white;
    }

    .btn-appointment svg {
        transition: transform 0.3s ease;
    }

    .btn-appointment:hover svg {
        transform: translateX(4px);
    }

    .btn-contact {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.875rem 2.5rem;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50px;
        color: white;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        text-decoration: none;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
    }

    .btn-contact:hover {
        transform: translateY(-3px);
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.6);
        color: white;
    }

    /* ===== Carousel Controls ===== */
    .carousel-control-prev,
    .carousel-control-next {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0;
        transition: all 0.4s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .hero-carousel:hover .carousel-control-prev,
    .hero-carousel:hover .carousel-control-next {
        opacity: 1;
    }

    .carousel-control-prev {
        left: 2rem;
    }

    .carousel-control-next {
        right: 2rem;
    }

    .control-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        color: white;
    }

    .control-icon svg {
        transition: transform 0.3s ease;
    }

    .carousel-control-prev:hover .control-icon svg {
        transform: translateX(-4px);
    }

    .carousel-control-next:hover .control-icon svg {
        transform: translateX(4px);
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
    }

    /* ===== Carousel Indicators ===== */
    .carousel-indicators {
        bottom: 3rem;
        gap: 1rem;
        z-index: 3;
    }

    .carousel-indicators button {
        width: 60px;
        height: 4px;
        border: none;
        border-radius: 4px;
        background: rgba(255, 255, 255, 0.3);
        transition: all 0.4s ease;
        position: relative;
        padding: 0;
    }

    .carousel-indicators button.active {
        background: white;
        width: 80px;
    }

    .carousel-indicators button .indicator-number {
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.7rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .carousel-indicators button.active .indicator-number {
        opacity: 1;
        color: white;
    }

    /* ===== Floating Particles ===== */
    .particles-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
        overflow: hidden;
    }

    .particle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        animation: floatParticle 20s ease-in-out infinite;
    }

    .particle-1 {
        width: 300px;
        height: 300px;
        top: -100px;
        right: -100px;
        background: radial-gradient(circle, rgba(102, 126, 234, 0.1), transparent);
        animation-delay: 0s;
    }

    .particle-2 {
        width: 200px;
        height: 200px;
        bottom: -50px;
        left: -50px;
        background: radial-gradient(circle, rgba(245, 87, 108, 0.08), transparent);
        animation-delay: -5s;
    }

    .particle-3 {
        width: 150px;
        height: 150px;
        top: 20%;
        right: 10%;
        background: radial-gradient(circle, rgba(16, 185, 129, 0.08), transparent);
        animation-delay: -10s;
    }

    .particle-4 {
        width: 100px;
        height: 100px;
        bottom: 30%;
        left: 20%;
        background: radial-gradient(circle, rgba(243, 147, 251, 0.08), transparent);
        animation-delay: -15s;
    }

    .particle-5 {
        width: 80px;
        height: 80px;
        top: 60%;
        right: 30%;
        background: radial-gradient(circle, rgba(251, 191, 36, 0.06), transparent);
        animation-delay: -7s;
    }

    @keyframes floatParticle {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        25% {
            transform: translate(30px, -30px) scale(1.1);
        }
        50% {
            transform: translate(-20px, 20px) scale(0.9);
        }
        75% {
            transform: translate(20px, 30px) scale(1.05);
        }
    }

    /* ===== Animations ===== */
    .animate__animated {
        animation-duration: 1s;
        animation-fill-mode: both;
    }

    .animate__fadeInDown {
        animation-name: fadeInDown;
    }

    .animate__fadeInUp {
        animation-name: fadeInUp;
    }

    .animate__delay-1s {
        animation-delay: 0.3s;
    }

    .animate__delay-2s {
        animation-delay: 0.6s;
    }

    .animate__delay-3s {
        animation-delay: 0.9s;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
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
        .slide-title {
            font-size: 3rem;
        }

        .slide-description {
            font-size: 1rem;
            max-width: 500px;
        }

        .slide-buttons {
            flex-direction: row;
        }

        .btn-appointment,
        .btn-contact {
            padding: 0.75rem 1.75rem;
            font-size: 0.9rem;
        }

        .carousel-indicators button {
            width: 40px;
        }

        .carousel-indicators button.active {
            width: 60px;
        }
    }

    @media (max-width: 768px) {
        .hero-carousel-section {
            height: 100vh;
            min-height: 500px;
            max-height: 700px;
        }

        .slide-wrapper {
            height: 100vh;
            min-height: 500px;
            max-height: 700px;
        }

        .slide-title {
            font-size: 2.2rem;
        }

        .slide-subtitle {
            font-size: 0.85rem;
            letter-spacing: 2px;
        }

        .slide-description {
            font-size: 0.95rem;
            max-width: 100%;
            padding: 0 1rem;
        }

        .slide-badge {
            font-size: 0.75rem;
            padding: 0.35rem 1rem;
        }

        .slide-buttons {
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }

        .btn-appointment,
        .btn-contact {
            width: 100%;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            font-size: 0.85rem;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
        }

        .carousel-control-prev {
            left: 0.5rem;
        }

        .carousel-control-next {
            right: 0.5rem;
        }

        .carousel-indicators {
            bottom: 1.5rem;
            gap: 0.5rem;
        }

        .carousel-indicators button {
            width: 30px;
            height: 3px;
        }

        .carousel-indicators button.active {
            width: 50px;
        }

        .particles-container {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .slide-title {
            font-size: 1.8rem;
        }

        .slide-description {
            font-size: 0.85rem;
        }

        .slide-content {
            padding: 1rem;
        }

        .btn-appointment,
        .btn-contact {
            font-size: 0.8rem;
            padding: 0.65rem 1.25rem;
        }
    }
</style>
