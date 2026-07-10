<!-- ============================================
    JAVASCRIPT LIBRARIES
    ============================================ -->

<!-- ===== Core Libraries (CDN) ===== -->
<!-- jQuery - Core DOM Manipulation -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Bootstrap 5 Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- ===== Animation Libraries ===== -->
<!-- WOW.js - Scroll Animations -->
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>

<!-- Easing - Smooth Animations -->
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>

<!-- Waypoints - Scroll Triggers -->
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>

<!-- ===== Carousel Library ===== -->
<!-- Owl Carousel - Responsive Carousel -->
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- ===== Date/Time Libraries ===== -->
<!-- Moment.js - Date Manipulation -->
<script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>

<!-- Tempus Dominus - DateTime Picker -->
<script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- ===== Image Comparison Library ===== -->
<!-- TwentyTwenty - Before/After Image Slider -->
<script src="{{ asset('lib/twentytwenty/jquery.event.move.js') }}"></script>
<script src="{{ asset('lib/twentytwenty/jquery.twentytwenty.js') }}"></script>

<!-- ===== Custom Project Scripts ===== -->
<!-- Main Application Script -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- ============================================
    CUSTOM TEMPLATE SCRIPTS
    ============================================ -->

<!-- ===== Bootstrap Core JavaScript ===== -->
<script src="{{ asset('custom/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('custom/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ===== Plugin JavaScript ===== -->
<!-- jQuery Easing - Smooth Animations -->
<script src="{{ asset('custom/vendors/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Magnific Popup - Lightbox Gallery -->
<script src="{{ asset('custom/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- ===== Contact Form Scripts ===== -->
<!-- jQuery Validation -->
<script src="{{ asset('custom/js/jqBootstrapValidation.js') }}"></script>

<!-- Contact Form Handler -->
<script src="{{ asset('custom/js/contact_me.js') }}"></script>

<!-- ===== Freelancer Theme Script ===== -->
<!-- Custom Theme JavaScript -->
<script src="{{ asset('custom/js/freelancer.min.js') }}"></script>

<!-- ============================================
    INITIALIZATION SCRIPTS
    ============================================ -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
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

        // ===== Initialize Owl Carousel =====
        if ($.fn.owlCarousel) {
            // Testimonial Carousel
            $('.testimonial-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 500,
                responsive: {
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });

            // Pricing Carousel
            $('.price-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                smartSpeed: 500,
                responsive: {
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });

            // Doctors Carousel
            $('.doctors-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 6000,
                smartSpeed: 500,
                responsive: {
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        }

        // ===== Initialize TwentyTwenty =====
        if ($.fn.twentytwenty) {
            $('.twentytwenty-container').twentytwenty({
                default_offset_pct: 0.5,
                orientation: 'horizontal',
                before_label: 'Before',
                after_label: 'After',
                no_overlay: false,
                move_slider_on_hover: true,
                move_with_handle_only: true,
                click_to_move: false
            });
        }

        // ===== Initialize DateTime Picker =====
        if ($.fn.datetimepicker) {
            $('.datetimepicker-input').datetimepicker({
                format: 'YYYY-MM-DD HH:mm',
                icons: {
                    time: 'fas fa-clock',
                    date: 'fas fa-calendar',
                    up: 'fas fa-chevron-up',
                    down: 'fas fa-chevron-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'fas fa-calendar-check',
                    clear: 'fas fa-trash',
                    close: 'fas fa-times'
                }
            });
        }

        // ===== Initialize Magnific Popup =====
        if ($.fn.magnificPopup) {
            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                },
                removalDelay: 300,
                mainClass: 'mfp-fade'
            });
        }

        // ===== Initialize Contact Form =====
        if (typeof jqBootstrapValidation !== 'undefined') {
            $('form.contact-form').jqBootstrapValidation({
                preventSubmit: false,
                submitError: function($form, event, errors) {
                    console.log('Form validation error:', errors);
                },
                submitSuccess: function($form, event) {
                    event.preventDefault();
                    // Custom success handler
                    if (typeof contact_me !== 'undefined') {
                        contact_me();
                    }
                },
                filter: function() {
                    return $(this).is(':visible');
                }
            });
        }

        // ===== Smooth Scroll for Anchor Links =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // ===== Navbar Scroll Effect =====
        const navbar = document.querySelector('.modern-navbar');
        if (navbar) {
            let lastScroll = 0;
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
                if (currentScroll > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
                lastScroll = currentScroll;
            });
        }
    });

    // ===== Page Loader =====
    window.addEventListener('load', function() {
        const loader = document.querySelector('.page-loader');
        if (loader) {
            loader.classList.add('loaded');
            setTimeout(function() {
                loader.style.display = 'none';
            }, 500);
        }
    });
</script>

<!-- ============================================
    PERFORMANCE OPTIMIZATIONS
    ============================================ -->

<!-- ===== Deferred Scripts ===== -->
<!-- Load non-critical scripts after page load -->
<script>
    // Defer loading of non-critical scripts
    document.addEventListener('DOMContentLoaded', function() {
        // Google Analytics (if enabled)
        @if(config('app.analytics_enabled', false))
        (function() {
            const script = document.createElement('script');
            script.src = 'https://www.googletagmanager.com/gtag/js?id={{ config("app.ga_id") }}';
            script.async = true;
            document.head.appendChild(script);

            window.dataLayer = window.dataLayer || [];
            function gtag(){ dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', '{{ config("app.ga_id") }}');
        })();
        @endif

        // Facebook Pixel (if enabled)
        @if(config('app.fb_pixel_enabled', false))
        (function() {
            const script = document.createElement('script');
            script.src = 'https://connect.facebook.net/en_US/fbevents.js';
            script.async = true;
            document.head.appendChild(script);

            fbq('init', '{{ config("app.fb_pixel_id") }}');
            fbq('track', 'PageView');
        })();
        @endif
    });
</script>

<!-- ===== Error Handling ===== -->
<script>
    // Global error handler
    window.onerror = function(message, source, lineno, colno, error) {
        console.error('Global error:', {
            message: message,
            source: source,
            line: lineno,
            column: colno,
            error: error
        });

        // Send to error tracking service (if configured)
        @if(config('app.error_tracking_enabled', false))
        if (typeof Sentry !== 'undefined') {
            Sentry.captureException(error);
        }
        @endif

        return false;
    };

    // Unhandled promise rejection handler
    window.addEventListener('unhandledrejection', function(event) {
        console.error('Unhandled promise rejection:', event.reason);

        @if(config('app.error_tracking_enabled', false))
        if (typeof Sentry !== 'undefined') {
            Sentry.captureException(event.reason);
        }
        @endif
    });
</script>

</body>
</html>
