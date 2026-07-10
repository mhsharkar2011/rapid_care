<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ============================================
    META TAGS
    ============================================ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $metaDescription ?? 'Rapid Care - Premium Healthcare Services' }}">
    <meta name="author" content="Rapid Care">
    <meta name="keywords" content="healthcare, medical, doctors, clinic, hospital, treatment">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ===== Open Graph ===== -->
    <meta property="og:title" content="{{ $title ?? 'Rapid Care' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Premium healthcare services' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- ===== Theme Color - Black ===== -->
    <meta name="theme-color" content="#0a0a0a">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===== Title ===== -->
    <title>{{ $title ?? 'Rapid Care - Premium Healthcare Services' }}</title>

    <!-- ===== Favicon ===== -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

    <!-- ============================================
    FONTS & ICONS
    ============================================ -->
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- ============================================
    STYLESHEETS
    ============================================ -->
    <!-- Libraries -->
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/twentytwenty/twentytwenty.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- DataTables -->
    @stack('datatable-css')
    <link href="{{ asset('customAdmin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- ============================================
    CRITICAL CSS - BLACK THEME
    ============================================ -->
    <style>
        /* ===== CSS Variables - Black Theme ===== */
        :root {
            --primary: #667eea;
            --primary-dark: #5a6fd6;
            --secondary: #764ba2;
            --gradient: linear-gradient(135deg, #667eea, #764ba2);
            --bg-dark: #0a0a0a;
            --bg-card: rgba(255, 255, 255, 0.03);
            --text-primary: #ffffff;
            --text-secondary: #e2e8f0;
            --text-muted: #94a3b8;
            --border-color: rgba(255, 255, 255, 0.06);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Open Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: #0a0a0a;
            color: #e2e8f0;
        }

        /* ===== Scrollbar Styling ===== */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #5a6fd6, #6a3f92);
        }

        /* ===== Selection Color ===== */
        ::selection {
            background: rgba(102, 126, 234, 0.3);
            color: #ffffff;
        }

        ::-moz-selection {
            background: rgba(102, 126, 234, 0.3);
            color: #ffffff;
        }

        /* ===== Modern Spinner - Black Theme ===== */
        #spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #0a0a0a;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.6s ease, visibility 0.6s ease;
        }

        #spinner.fade-out {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .spinner-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .spinner-wrapper {
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }

        .spinner-dot {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            animation: spinnerPulse 1.4s ease-in-out infinite;
        }

        .spinner-dot:nth-child(1) {
            background: #667eea;
            animation-delay: 0s;
        }
        .spinner-dot:nth-child(2) {
            background: #764ba2;
            animation-delay: 0.2s;
        }
        .spinner-dot:nth-child(3) {
            background: #f093fb;
            animation-delay: 0.4s;
        }

        .spinner-text {
            color: #94a3b8;
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: pulseText 1.5s ease-in-out infinite;
        }

        @keyframes spinnerPulse {
            0%, 80%, 100% {
                transform: scale(0.6);
                opacity: 0.3;
            }
            40% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes pulseText {
            0%, 100% {
                opacity: 0.4;
            }
            50% {
                opacity: 1;
            }
        }

        /* ===== Back to Top Button - Black Theme ===== */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 999;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 50%;
            box-shadow: 0 4px 25px rgba(102, 126, 234, 0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px) scale(0.8);
            text-decoration: none;
            cursor: pointer;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }

        .back-to-top:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 8px 35px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .back-to-top i {
            font-size: 1.3rem;
            transition: transform 0.3s ease;
        }

        .back-to-top:hover i {
            transform: translateY(-3px);
        }

        /* ===== Focus Styles ===== */
        :focus-visible {
            outline: 2px solid #667eea;
            outline-offset: 2px;
        }

        /* ===== Link Styles ===== */
        a {
            color: #8b8bf7;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #c084fc;
        }

        /* ===== Utility Classes ===== */
        .text-gradient {
            background: linear-gradient(135deg, #8b8bf7, #c084fc, #f093fb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .bg-dark-custom {
            background: #0a0a0a;
        }

        .border-dark-custom {
            border-color: rgba(255, 255, 255, 0.06);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .back-to-top {
                bottom: 1rem;
                right: 1rem;
                width: 42px;
                height: 42px;
            }

            .back-to-top i {
                font-size: 1rem;
            }
        }
    </style>

    @stack('styles')
</head>

<body id="page-top">
    <!-- ============================================
    SPINNER / LOADER
    ============================================ -->
    <div id="spinner">
        <div class="spinner-container">
            <div class="spinner-wrapper">
                <div class="spinner-dot"></div>
                <div class="spinner-dot"></div>
                <div class="spinner-dot"></div>
            </div>
            <div class="spinner-text">Loading...</div>
        </div>
    </div>

    <!-- ============================================
    TOP BAR
    ============================================ -->
    @if (Route::is('frontEnd*'))
        @include('layouts.frontend.top-bar')
    @endif

    <!-- ============================================
    NAVIGATION MENU
    ============================================ -->
    @if (Route::is('frontEnd*') && Route::is('frontEnd.home'))
        @include('layouts.frontend.menu')
    @endif

    <!-- ============================================
    MAIN CONTENT
    ============================================ -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- ============================================
    FOOTER - BLACK THEME
    ============================================ -->
    @if (Route::is('frontEnd.home'))
    <footer class="modern-footer">
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Column 1: Quick Links -->
                <div class="footer-col">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="bi bi-chevron-right"></i>Home</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i>About Us</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i>Our Services</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i>Latest Blog</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i>Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 2: Popular Links -->
                <div class="footer-col">
                    <h3 class="footer-title">Popular Links</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="bi bi-chevron-right"></i>Home</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i>About Us</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i>Our Services</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i>Latest Blog</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i>Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Contact Info -->
                <div class="footer-col">
                    <h3 class="footer-title">Get In Touch</h3>
                    <div class="footer-contact">
                        <p><i class="bi bi-geo-alt"></i>123 Street, New York, USA</p>
                        <p><i class="bi bi-envelope-open"></i>info@example.com</p>
                        <p><i class="bi bi-telephone"></i>+012 345 67890</p>
                    </div>
                </div>

                <!-- Column 4: Social & Newsletter -->
                <div class="footer-col">
                    <h3 class="footer-title">Follow Us</h3>
                    <div class="footer-social">
                        <a href="#" class="social-btn" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-btn" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-btn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-btn" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="footer-newsletter">
                        <p class="newsletter-label">Subscribe to our newsletter</p>
                        <form class="newsletter-form" action="#" method="POST">
                            <input type="email" placeholder="Your Email" required>
                            <button type="submit">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} <a href="#">Rapid Care</a>. All Rights Reserved.</p>
                <p>Designed with <i class="fas fa-heart" style="color: #f56565;"></i> by <a href="https://webdevs24.com">webdevs24</a></p>
            </div>
        </div>
    </footer>

    <!-- ============================================
    FOOTER STYLES - BLACK THEME
    ============================================ -->
    <style>
        .modern-footer {
            background: #0a0a0a;
            border-top: 1px solid rgba(255, 255, 255, 0.04);
            padding: 4rem 1.5rem 2rem;
            margin-top: 4rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2.5rem;
            padding-bottom: 2.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
        }

        .footer-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1.25rem;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 2.5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .footer-links li a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #94a3b8;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .footer-links li a:hover {
            color: #c084fc;
            transform: translateX(4px);
        }

        .footer-links li a i {
            font-size: 0.7rem;
            color: #667eea;
            transition: transform 0.3s ease;
        }

        .footer-links li a:hover i {
            transform: translateX(4px);
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #94a3b8;
            font-size: 0.9rem;
            margin-bottom: 0.75rem;
        }

        .footer-contact p i {
            color: #667eea;
            font-size: 1.1rem;
            width: 20px;
        }

        .footer-social {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 50%;
            color: #94a3b8;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-btn:hover {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
            border-color: transparent;
        }

        .social-btn i {
            font-size: 1rem;
        }

        .newsletter-label {
            color: #94a3b8;
            font-size: 0.85rem;
            margin-bottom: 0.5rem;
        }

        .newsletter-form {
            display: flex;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 0.5rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .newsletter-form:focus-within {
            border-color: rgba(102, 126, 234, 0.3);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.05);
        }

        .newsletter-form input {
            flex: 1;
            padding: 0.6rem 1rem;
            background: transparent;
            border: none;
            color: #e2e8f0;
            font-size: 0.9rem;
            outline: none;
        }

        .newsletter-form input::placeholder {
            color: #64748b;
        }

        .newsletter-form button {
            padding: 0.6rem 1rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-form button:hover {
            opacity: 0.9;
        }

        .newsletter-form button i {
            font-size: 1rem;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 2rem;
            font-size: 0.85rem;
            color: #64748b;
        }

        .footer-bottom a {
            color: #94a3b8;
            transition: color 0.3s ease;
        }

        .footer-bottom a:hover {
            color: #c084fc;
        }

        .footer-bottom .fa-heart {
            color: #f56565;
            animation: heartBeat 1.5s ease-in-out infinite;
        }

        @keyframes heartBeat {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }

        /* Footer Responsive */
        @media (max-width: 992px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }

        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 0.5rem;
                text-align: center;
            }

            .modern-footer {
                padding: 3rem 1rem 1.5rem;
            }
        }
    </style>
    @endif

    <!-- ============================================
    BACK TO TOP BUTTON
    ============================================ -->
    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- ============================================
    JAVASCRIPT LIBRARIES
    ============================================ -->
    <!-- Core Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Animation Libraries -->
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>

    <!-- Carousel -->
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Date/Time -->
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Image Comparison -->
    <script src="{{ asset('lib/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('lib/twentytwenty/jquery.twentytwenty.js') }}"></script>

    <!-- ============================================
    CUSTOM TEMPLATE SCRIPTS
    ============================================ -->
    <!-- Main Application -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Custom Vendors -->
    <script src="{{ asset('custom/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('custom/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('custom/vendors/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('custom/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Form Validation -->
    <script src="{{ asset('custom/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('custom/js/contact_me.js') }}"></script>

    <!-- Theme Scripts -->
    <script src="{{ asset('custom/js/freelancer.min.js') }}"></script>

    <!-- ============================================
    DATATABLES
    ============================================ -->
    @stack('datatable-js')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            if ($.fn.DataTable) {
                $('#dataTable').DataTable({
                    responsive: true,
                    language: {
                        search: "Search:",
                        lengthMenu: "Show _MENU_ entries",
                        info: "Showing _START_ to _END_ of _TOTAL_ entries",
                        paginate: {
                            first: "First",
                            last: "Last",
                            next: "Next",
                            previous: "Previous"
                        }
                    }
                });
            }
        });
    </script>

    <!-- ============================================
    MAIN INITIALIZATION
    ============================================ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ===== Hide Spinner =====
            const spinner = document.getElementById('spinner');
            if (spinner) {
                setTimeout(function() {
                    spinner.classList.add('fade-out');
                }, 600);
            }

            // ===== Initialize WOW.js =====
            if (typeof WOW !== 'undefined') {
                new WOW({
                    boxClass: 'wow',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: true,
                    live: true
                }).init();
            }

            // ===== Back to Top Button =====
            const backToTopBtn = document.getElementById('backToTop');
            if (backToTopBtn) {
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 300) {
                        backToTopBtn.classList.add('visible');
                    } else {
                        backToTopBtn.classList.remove('visible');
                    }
                });

                backToTopBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }

            // ===== Initialize Owl Carousel =====
            if ($.fn.owlCarousel) {
                $('.testimonial-carousel').each(function() {
                    $(this).owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 30,
                        nav: false,
                        dots: true,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        smartSpeed: 500,
                        responsive: {
                            768: { items: 2 },
                            992: { items: 3 }
                        }
                    });
                });

                $('.price-carousel').each(function() {
                    $(this).owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 30,
                        nav: false,
                        dots: true,
                        autoplay: true,
                        autoplayTimeout: 4000,
                        smartSpeed: 500,
                        responsive: {
                            768: { items: 2 },
                            992: { items: 3 }
                        }
                    });
                });
            }

            // ===== Initialize TwentyTwenty =====
            if ($.fn.twentytwenty) {
                $('.twentytwenty-container').twentytwenty({
                    default_offset_pct: 0.5,
                    orientation: 'horizontal',
                    before_label: 'Before',
                    after_label: 'After'
                });
            }
        });
    </script>

    <!-- ============================================
    STACKED SCRIPTS
    ============================================ -->
    @stack('scripts')
</body>
</html>
