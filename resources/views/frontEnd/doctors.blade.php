<!-- Modern Doctors/Team Section Start -->
<section class="doctors-section" id="doctors">
    <div class="doctors-container">
        <!-- Section Header -->
        <div class="doctors-header wow fadeInUp" data-wow-delay="0.1s">
            <div class="doctors-badge">
                <span class="badge-icon">👨‍⚕️</span>
                Our Team
            </div>
            <h2 class="doctors-subtitle">Expert Medical Professionals</h2>
            <h1 class="doctors-title">
                Meet Our Certified &<br>
                <span class="gradient-text">Experienced Doctors</span>
            </h1>
            <p class="doctors-description">
                Our team of highly qualified specialists is dedicated to providing you with
                the best possible healthcare experience.
            </p>
        </div>

        <!-- Doctors Grid -->
        <div class="doctors-grid">
            @foreach ($doctors as $index => $doctor)
            <div class="doctor-card wow fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.1) }}s">
                <div class="doctor-image-wrapper">
                    <x-doctor-avatar :user="$doctor->avatar" class="doctor-image"></x-doctor-avatar>

                    <!-- Status Badge -->
                    <div class="doctor-status">
                        <span class="status-dot"></span>
                        Available
                    </div>

                    <!-- Social Links Overlay -->
                    <div class="doctor-social">
                        <a href="#" class="social-link" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="doctor-info">
                    <h3 class="doctor-name">{{ $doctor->name }}</h3>
                    <p class="doctor-specialty">
                        <span class="specialty-dot"></span>
                        {{ $doctor->specialty ?? 'General Practitioner' }}
                    </p>
                    <div class="doctor-contact">
                        <div class="contact-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                            </svg>
                            <span>{{ $doctor->phone }}</span>
                        </div>
                        <div class="contact-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <span>{{ $doctor->email ?? 'doctor@example.com' }}</span>
                        </div>
                    </div>
                    <a href="#" class="doctor-appointment-btn">
                        <span>Book Appointment</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="doctors-cta wow fadeInUp" data-wow-delay="0.6s">
            <a href="{{ route('frontEnd.doctors') }}" class="btn-view-all">
                <span>View All Doctors</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Modern Doctors/Team Section End -->

<!-- Custom CSS -->
<style>
    /* ===== Doctors Section ===== */
    .doctors-section {
        padding: 5rem 1.5rem;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        position: relative;
        overflow: hidden;
    }

    .doctors-section::before {
        content: '';
        position: absolute;
        top: -20%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(102, 126, 234, 0.05) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .doctors-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    /* ===== Section Header ===== */
    .doctors-header {
        text-align: center;
        margin-bottom: 3.5rem;
    }

    .doctors-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        padding: 0.4rem 1.2rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        margin-bottom: 1rem;
    }

    .badge-icon {
        font-size: 1rem;
    }

    .doctors-subtitle {
        font-size: 0.9rem;
        font-weight: 600;
        color: #667eea;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 0.5rem;
    }

    .doctors-title {
        font-size: 2.8rem;
        font-weight: 900;
        color: #1a1a2e;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .doctors-description {
        font-size: 1.1rem;
        color: #718096;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* ===== Doctors Grid ===== */
    .doctors-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2rem;
        margin-bottom: 3rem;
    }

    /* ===== Doctor Card ===== */
    .doctor-card {
        background: white;
        border-radius: 1.25rem;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 0, 0, 0.04);
    }

    .doctor-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(102, 126, 234, 0.12);
        border-color: rgba(102, 126, 234, 0.1);
    }

    .doctor-image-wrapper {
        position: relative;
        overflow: hidden;
        aspect-ratio: 1/1;
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .doctor-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .doctor-card:hover .doctor-image {
        transform: scale(1.05);
    }

    /* Status Badge */
    .doctor-status {
        position: absolute;
        top: 1rem;
        right: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(16, 185, 129, 0.9);
        backdrop-filter: blur(10px);
        padding: 0.35rem 0.75rem;
        border-radius: 50px;
        color: white;
        font-size: 0.75rem;
        font-weight: 600;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .status-dot {
        width: 8px;
        height: 8px;
        background: #34d399;
        border-radius: 50%;
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.5;
            transform: scale(0.8);
        }
    }

    /* Social Links */
    .doctor-social {
        position: absolute;
        bottom: -50px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        padding: 1rem;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.3));
        transition: all 0.4s ease;
        opacity: 0;
    }

    .doctor-card:hover .doctor-social {
        bottom: 0;
        opacity: 1;
    }

    .social-link {
        width: 36px;
        height: 36px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
        text-decoration: none;
    }

    .social-link:hover {
        background: white;
        color: #667eea;
        transform: translateY(-4px) scale(1.1);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .social-link svg {
        width: 16px;
        height: 16px;
    }

    /* Doctor Info */
    .doctor-info {
        padding: 1.5rem;
        text-align: center;
    }

    .doctor-name {
        font-size: 1.2rem;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 0.25rem;
    }

    .doctor-specialty {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: #667eea;
        font-weight: 500;
        margin-bottom: 1rem;
    }

    .specialty-dot {
        width: 6px;
        height: 6px;
        background: #667eea;
        border-radius: 50%;
    }

    .doctor-contact {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }

    .contact-item {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        color: #718096;
    }

    .contact-item svg {
        stroke: #667eea;
        flex-shrink: 0;
    }

    .doctor-appointment-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.6rem 1.5rem;
        background: linear-gradient(135deg, #667eea, #764ba2);
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
        width: 100%;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .doctor-appointment-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        color: white;
    }

    .doctor-appointment-btn svg {
        transition: transform 0.3s ease;
    }

    .doctor-appointment-btn:hover svg {
        transform: translateX(4px);
    }

    /* ===== View All Button ===== */
    .doctors-cta {
        text-align: center;
    }

    .btn-view-all {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 2.5rem;
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 50px;
        color: #1a1a2e;
        font-weight: 600;
        font-size: 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-view-all:hover {
        border-color: #667eea;
        color: #667eea;
        transform: translateY(-3px);
        box-shadow: 0 4px 20px rgba(102, 126, 234, 0.1);
    }

    .btn-view-all svg {
        transition: transform 0.3s ease;
    }

    .btn-view-all:hover svg {
        transform: translateX(4px);
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
        .doctors-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .doctors-section {
            padding: 3rem 1rem;
        }

        .doctors-title {
            font-size: 2rem;
        }

        .doctors-description {
            font-size: 1rem;
        }

        .doctors-grid {
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .doctor-info {
            padding: 1.25rem;
        }

        .doctor-name {
            font-size: 1.1rem;
        }

        .doctor-specialty {
            font-size: 0.85rem;
        }

        .contact-item {
            font-size: 0.8rem;
        }

        .doctor-appointment-btn {
            font-size: 0.85rem;
            padding: 0.5rem 1.25rem;
        }
    }

    @media (max-width: 480px) {
        .doctors-grid {
            grid-template-columns: 1fr;
            max-width: 400px;
            margin: 0 auto 2rem;
        }

        .doctors-title {
            font-size: 1.6rem;
        }

        .doctor-image-wrapper {
            aspect-ratio: 4/3;
        }

        .doctor-status {
            font-size: 0.7rem;
            padding: 0.25rem 0.6rem;
        }

        .btn-view-all {
            width: 100%;
            justify-content: center;
            padding: 0.7rem 1.5rem;
            font-size: 0.9rem;
        }
    }

    /* ===== Dark Mode ===== */
    @media (prefers-color-scheme: dark) {
        .doctors-section {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        }

        .doctor-card {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.06);
        }

        .doctor-name {
            color: #e2e8f0;
        }

        .doctor-specialty {
            color: #a78bfa;
        }

        .contact-item {
            color: #a0aec0;
        }

        .doctors-description {
            color: #a0aec0;
        }

        .doctors-title {
            color: #e2e8f0;
        }

        .btn-view-all {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.1);
            color: #e2e8f0;
        }

        .btn-view-all:hover {
            border-color: #667eea;
            color: #667eea;
        }
    }
</style>
