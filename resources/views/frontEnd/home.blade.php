<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapid Care - Premium Healthcare</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f0ff',
                            100: '#e0e0ff',
                            200: '#c4c4ff',
                            300: '#a4a4ff',
                            400: '#8b8bf7',
                            500: '#667eea',
                            600: '#5a6fd6',
                            700: '#4a5fc4',
                            800: '#3a4fb2',
                            900: '#2a3fa0',
                        },
                        dark: {
                            50: '#f8f9fa',
                            100: '#e9ecef',
                            200: '#dee2e6',
                            300: '#ced4da',
                            400: '#adb5bd',
                            500: '#6c757d',
                            600: '#495057',
                            700: '#343a40',
                            800: '#212529',
                            900: '#0a0a0a',
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0a;
            color: #e2e8f0;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 4px;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .gradient-text {
            background: linear-gradient(135deg, #8b8bf7, #c084fc, #f093fb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hover-scale {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .hover-lift {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.15);
        }

        .glow-effect {
            position: relative;
        }

        .glow-effect::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: inherit;
            background: linear-gradient(135deg, #667eea, #764ba2);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
            filter: blur(8px);
        }

        .glow-effect:hover::before {
            opacity: 0.3;
        }

        /* Mobile Menu Styles */
        .mobile-menu {
            display: none;
        }

        .mobile-menu.open {
            display: flex;
        }

        @media (max-width: 768px) {
            .desktop-menu {
                display: none;
            }
            .mobile-menu-toggle {
                display: block;
            }
        }

        @media (min-width: 769px) {
            .mobile-menu-toggle {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- ============================================
    NAVBAR
    ============================================ -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass border-b border-white/5" style="background: rgba(10, 10, 10, 0.92);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="#" class="flex items-center gap-2 hover:scale-105 transition-transform">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-400 to-purple-600 flex items-center justify-center text-white font-bold text-lg">
                        RC
                    </div>
                    <span class="text-xl font-bold text-white">Rapid<span class="gradient-text">Care</span></span>
                </a>

                <!-- Desktop Menu -->
                <div class="desktop-menu flex items-center gap-6">
                    <a href="#home" class="text-gray-300 hover:text-purple-400 transition-colors text-sm font-medium">Home</a>
                    <a href="#about" class="text-gray-300 hover:text-purple-400 transition-colors text-sm font-medium">About</a>
                    <a href="#services" class="text-gray-300 hover:text-purple-400 transition-colors text-sm font-medium">Services</a>
                    <a href="#doctors" class="text-gray-300 hover:text-purple-400 transition-colors text-sm font-medium">Doctors</a>
                    <a href="#contact" class="text-gray-300 hover:text-purple-400 transition-colors text-sm font-medium">Contact</a>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-3">
                    <button class="w-9 h-9 rounded-full bg-white/5 border border-white/10 text-gray-400 hover:text-purple-400 hover:bg-purple-500/10 transition-all flex items-center justify-center">
                        <i class="fas fa-search text-sm"></i>
                    </button>
                    <a href="#" class="px-4 py-2 bg-gradient-to-r from-primary-500 to-purple-600 text-white text-sm font-semibold rounded-full hover:scale-105 hover:shadow-lg hover:shadow-purple-500/30 transition-all flex items-center gap-2">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointment</span>
                    </a>
                    <!-- Mobile Toggle -->
                    <button class="mobile-menu-toggle w-9 h-9 rounded-lg bg-white/5 border border-white/10 text-gray-400 hover:text-white transition-colors flex items-center justify-center" onclick="toggleMobileMenu()">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu flex-col py-4 border-t border-white/5" id="mobileMenu">
                <a href="#home" class="px-4 py-3 text-gray-300 hover:text-purple-400 hover:bg-white/5 rounded-lg transition-colors" onclick="closeMobileMenu()">Home</a>
                <a href="#about" class="px-4 py-3 text-gray-300 hover:text-purple-400 hover:bg-white/5 rounded-lg transition-colors" onclick="closeMobileMenu()">About</a>
                <a href="#services" class="px-4 py-3 text-gray-300 hover:text-purple-400 hover:bg-white/5 rounded-lg transition-colors" onclick="closeMobileMenu()">Services</a>
                <a href="#doctors" class="px-4 py-3 text-gray-300 hover:text-purple-400 hover:bg-white/5 rounded-lg transition-colors" onclick="closeMobileMenu()">Doctors</a>
                <a href="#contact" class="px-4 py-3 text-gray-300 hover:text-purple-400 hover:bg-white/5 rounded-lg transition-colors" onclick="closeMobileMenu()">Contact</a>
            </div>
        </div>
    </nav>

    <!-- ============================================
    HERO / SLIDER SECTION
    ============================================ -->
    <section id="home" class="min-h-screen flex items-center pt-16 relative overflow-hidden">
        <!-- Background Gradients -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-purple-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary-500/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-600/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        <span class="text-xs text-gray-300 font-medium">Trusted Healthcare Provider</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                        Keep Your Health
                        <span class="gradient-text">Healthy</span>
                    </h1>

                    <p class="text-lg text-gray-400 max-w-lg">
                        Experience world-class healthcare with our team of expert physicians,
                        state-of-the-art technology, and compassionate care tailored to your needs.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="px-8 py-4 bg-gradient-to-r from-primary-500 to-purple-600 text-white font-semibold rounded-full hover:scale-105 hover:shadow-lg hover:shadow-purple-500/30 transition-all flex items-center gap-2">
                            <i class="fas fa-calendar-check"></i>
                            Book Appointment
                        </a>
                        <a href="#" class="px-8 py-4 bg-white/5 border border-white/10 text-gray-300 font-semibold rounded-full hover:bg-white/10 hover:text-white transition-all flex items-center gap-2">
                            <i class="fas fa-phone"></i>
                            Contact Us
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="flex flex-wrap gap-8 pt-4">
                        <div>
                            <div class="text-2xl font-bold text-white">10K+</div>
                            <div class="text-sm text-gray-400">Happy Patients</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-white">98%</div>
                            <div class="text-sm text-gray-400">Satisfaction Rate</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-white">50+</div>
                            <div class="text-sm text-gray-400">Expert Doctors</div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-purple-500/20">
                        <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=600&h=400&fit=crop" alt="Healthcare" class="w-full h-[400px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                        <!-- Floating Badge -->
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between">
                            <div class="glass px-4 py-2 rounded-lg">
                                <div class="text-xs text-gray-400">Opening Hours</div>
                                <div class="text-sm text-white font-semibold">8:00 AM - 9:00 PM</div>
                            </div>
                            <div class="glass px-4 py-2 rounded-lg">
                                <div class="text-xs text-gray-400">Emergency</div>
                                <div class="text-sm text-white font-semibold">24/7 Available</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    BANNER / INFO SECTION
    ============================================ -->
    <section class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Card 1: Opening Hours -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-500/20 to-purple-600/20 flex items-center justify-center text-primary-400">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white">Opening Hours</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-400">Mon - Fri</span>
                            <span class="text-white font-medium">8:00am - 9:00pm</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-400">Saturday</span>
                            <span class="text-white font-medium">8:00am - 7:00pm</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-400">Sunday</span>
                            <span class="text-white font-medium">8:00am - 5:00pm</span>
                        </div>
                    </div>
                    <a href="#" class="mt-4 inline-block w-full text-center px-4 py-2 bg-white/5 border border-white/10 text-gray-300 text-sm font-medium rounded-lg hover:bg-white/10 hover:text-white transition-all">
                        Book Appointment
                    </a>
                </div>

                <!-- Card 2: Search Doctor -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-500/20 to-purple-600/20 flex items-center justify-center text-primary-400">
                            <i class="fas fa-search text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white">Find a Doctor</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="relative">
                            <i class="fas fa-calendar absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm"></i>
                            <input type="text" placeholder="Select Date & Time" class="w-full pl-10 pr-4 py-2 bg-white/5 border border-white/10 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-purple-500/50 text-sm">
                        </div>
                        <div class="relative">
                            <i class="fas fa-user-md absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm"></i>
                            <select class="w-full pl-10 pr-4 py-2 bg-white/5 border border-white/10 rounded-lg text-white focus:outline-none focus:border-purple-500/50 text-sm appearance-none">
                                <option value="" class="bg-dark-900">Select Department</option>
                                <option value="" class="bg-dark-900">Cardiology</option>
                                <option value="" class="bg-dark-900">Dentistry</option>
                                <option value="" class="bg-dark-900">Neurology</option>
                            </select>
                            <i class="fas fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 text-xs"></i>
                        </div>
                    </div>
                    <button class="mt-4 w-full px-4 py-2 bg-gradient-to-r from-primary-500 to-purple-600 text-white text-sm font-medium rounded-lg hover:scale-105 transition-all">
                        <i class="fas fa-search mr-2"></i>
                        Search Doctor
                    </button>
                </div>

                <!-- Card 3: Call -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-500/20 to-purple-600/20 flex items-center justify-center text-primary-400">
                            <i class="fas fa-phone text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white">Call for Appointment</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-green-500/10 border border-green-500/20 rounded-full">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-xs text-green-400 font-medium">24/7 Support Available</span>
                        </div>
                        <p class="text-sm text-gray-400">Emergency & Appointment Hotline</p>
                        <a href="tel:+88000000000" class="text-2xl font-bold text-white hover:text-primary-400 transition-colors block">
                            <i class="fas fa-phone-alt text-primary-400 mr-2"></i>
                            +880 0000 00000
                        </a>
                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-2">
                        <div class="text-center px-2 py-1 bg-white/5 rounded-lg">
                            <div class="text-xs text-gray-400">Emergency</div>
                        </div>
                        <div class="text-center px-2 py-1 bg-white/5 rounded-lg">
                            <div class="text-xs text-gray-400">Booking</div>
                        </div>
                        <div class="text-center px-2 py-1 bg-white/5 rounded-lg">
                            <div class="text-xs text-gray-400">Consultation</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    ABOUT SECTION
    ============================================ -->
    <section id="about" class="py-20 relative">
        <div class="absolute inset-0">
            <div class="absolute top-1/2 right-0 w-[300px] h-[300px] bg-purple-600/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10">
                        <span class="text-xs text-primary-400 font-medium">About Us</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold">
                        The Best Homeopathy<br>
                        <span class="gradient-text">You Can Trust</span>
                    </h2>

                    <blockquote class="border-l-4 border-primary-500 pl-4 text-gray-400 italic">
                        "Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore"
                    </blockquote>

                    <p class="text-gray-400 leading-relaxed">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit.
                        Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <span class="text-sm text-gray-300">Award Winning</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <span class="text-sm text-gray-300">Professional Staff</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <span class="text-sm text-gray-300">24/7 Opened</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <span class="text-sm text-gray-300">Fair Prices</span>
                        </div>
                    </div>

                    <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-primary-500 to-purple-600 text-white font-semibold rounded-full hover:scale-105 hover:shadow-lg hover:shadow-purple-500/30 transition-all">
                        Learn More
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <div class="relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-purple-500/20">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=500&fit=crop" alt="About Us" class="w-full h-[450px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>

                        <!-- Floating Stats -->
                        <div class="absolute top-4 left-4 glass px-4 py-3 rounded-lg">
                            <div class="text-lg font-bold text-white">15+</div>
                            <div class="text-xs text-gray-400">Years Experience</div>
                        </div>
                        <div class="absolute bottom-4 right-4 glass px-4 py-3 rounded-lg">
                            <div class="text-lg font-bold text-white">10K+</div>
                            <div class="text-xs text-gray-400">Happy Patients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    SERVICES SECTION
    ============================================ -->
    <section id="services" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 mb-4">
                    <span class="text-xs text-primary-400 font-medium">Our Services</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold">
                    We Offer The Best Quality<br>
                    <span class="gradient-text">Health Services</span>
                </h2>
                <p class="text-gray-400 mt-4">Experience world-class healthcare with our comprehensive range of medical services.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div class="glass rounded-2xl overflow-hidden hover-lift transition-all group">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=400&h=300&fit=crop" alt="Service" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3 glass px-3 py-1.5 rounded-lg">
                            <i class="fas fa-tooth text-primary-400"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h4 class="text-white font-semibold mb-1">Cosmetic Dentistry</h4>
                        <p class="text-sm text-gray-400">Transform your smile with our advanced cosmetic procedures.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-primary-400 text-sm font-medium hover:gap-3 transition-all mt-3">
                            Learn More
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="glass rounded-2xl overflow-hidden hover-lift transition-all group">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1579684386107-1f62e3be1a8b?w=400&h=300&fit=crop" alt="Service" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3 glass px-3 py-1.5 rounded-lg">
                            <i class="fas fa-microscope text-primary-400"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h4 class="text-white font-semibold mb-1">Dental Implants</h4>
                        <p class="text-sm text-gray-400">Permanent solutions for missing teeth with modern technology.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-primary-400 text-sm font-medium hover:gap-3 transition-all mt-3">
                            Learn More
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="glass rounded-2xl overflow-hidden hover-lift transition-all group">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1606811971618-4486d14f3f99?w=400&h=300&fit=crop" alt="Service" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3 glass px-3 py-1.5 rounded-lg">
                            <i class="fas fa-bridge text-primary-400"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h4 class="text-white font-semibold mb-1">Dental Bridges</h4>
                        <p class="text-sm text-gray-400">Restore your smile with custom-made dental bridges.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-primary-400 text-sm font-medium hover:gap-3 transition-all mt-3">
                            Learn More
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="glass rounded-2xl overflow-hidden hover-lift transition-all group">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=400&h=300&fit=crop" alt="Service" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3 glass px-3 py-1.5 rounded-lg">
                            <i class="fas fa-sparkles text-primary-400"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h4 class="text-white font-semibold mb-1">Teeth Whitening</h4>
                        <p class="text-sm text-gray-400">Professional teeth whitening for a brighter, confident smile.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-primary-400 text-sm font-medium hover:gap-3 transition-all mt-3">
                            Learn More
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    OFFER SECTION
    ============================================ -->
    <section class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative glass rounded-3xl overflow-hidden p-8 md:p-12" style="background: linear-gradient(135deg, #1a1a2e, #2d1b4e);">
                <!-- Decorative Circles -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-purple-600/10 rounded-full blur-2xl"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-primary-500/10 rounded-full blur-2xl"></div>

                <div class="relative z-10 text-center max-w-3xl mx-auto">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 mb-4">
                        <span class="text-xs text-primary-400 font-medium">Special Offer</span>
                    </div>

                    <div class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 rounded-2xl mb-6">
                        <span class="text-3xl font-bold text-primary-400">30%</span>
                        <span class="text-sm font-bold text-white uppercase">OFF</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Save <span class="text-yellow-400">30%</span> On<br>
                        <span class="gradient-text">Poor Patient & Student</span>
                    </h2>

                    <p class="text-gray-400 mb-8 max-w-lg mx-auto">
                        We believe healthcare should be accessible to everyone. Poor people who have no earning source
                        and students with valid student ID are eligible for this special discount.
                    </p>

                    <div class="grid grid-cols-3 gap-4 max-w-md mx-auto mb-8">
                        <div class="glass rounded-xl p-3 text-center">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-user text-primary-400"></i>
                            </div>
                            <div class="text-sm text-white font-semibold">Poor Patient</div>
                            <div class="text-xs text-gray-500">No earning source</div>
                        </div>
                        <div class="glass rounded-xl p-3 text-center">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-graduation-cap text-primary-400"></i>
                            </div>
                            <div class="text-sm text-white font-semibold">Students</div>
                            <div class="text-xs text-gray-500">Valid ID required</div>
                        </div>
                        <div class="glass rounded-xl p-3 text-center">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-shield-alt text-primary-400"></i>
                            </div>
                            <div class="text-sm text-white font-semibold">Verified</div>
                            <div class="text-xs text-gray-500">Terms apply</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="#" class="px-8 py-3 bg-white text-primary-600 font-semibold rounded-full hover:scale-105 hover:shadow-lg transition-all flex items-center gap-2">
                            Book Appointment
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#" class="px-8 py-3 bg-white/10 border border-white/20 text-white font-semibold rounded-full hover:bg-white/20 transition-all flex items-center gap-2">
                            <i class="fas fa-info-circle"></i>
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    DOCTORS SECTION
    ============================================ -->
    <section id="doctors" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 mb-4">
                    <span class="text-xs text-primary-400 font-medium">Our Doctors</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold">
                    Meet Our Certified &<br>
                    <span class="gradient-text">Experienced Doctors</span>
                </h2>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Doctor 1 -->
                <div class="glass rounded-2xl overflow-hidden hover-lift transition-all group">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop" alt="Doctor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-3 right-3 glass px-2 py-1 rounded-full flex items-center gap-1">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-xs text-white font-medium">Available</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                            <div class="flex gap-2">
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-twitter text-xs"></i>
                                </a>
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-facebook-f text-xs"></i>
                                </a>
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-linkedin-in text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white font-semibold">Dr. Sarah Johnson</h4>
                        <p class="text-sm text-primary-400">Cardiologist</p>
                        <div class="flex justify-center gap-4 mt-2 text-xs text-gray-400">
                            <span><i class="fas fa-phone text-primary-400 mr-1"></i>+880 1234 5678</span>
                        </div>
                        <a href="#" class="mt-3 inline-block w-full px-4 py-2 bg-gradient-to-r from-primary-500 to-purple-600 text-white text-sm font-medium rounded-lg hover:scale-105 transition-all">
                            Book Appointment
                        </a>
                    </div>
                </div>

                <!-- Doctor 2 -->
                <div class="glass rounded-2xl overflow-hidden hover-lift transition-all group">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=400&fit=crop" alt="Doctor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-3 right-3 glass px-2 py-1 rounded-full flex items-center gap-1">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-xs text-white font-medium">Available</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                            <div class="flex gap-2">
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-twitter text-xs"></i>
                                </a>
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-facebook-f text-xs"></i>
                                </a>
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-linkedin-in text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white font-semibold">Dr. Michael Chen</h4>
                        <p class="text-sm text-primary-400">Neurologist</p>
                        <div class="flex justify-center gap-4 mt-2 text-xs text-gray-400">
                            <span><i class="fas fa-phone text-primary-400 mr-1"></i>+880 1234 5678</span>
                        </div>
                        <a href="#" class="mt-3 inline-block w-full px-4 py-2 bg-gradient-to-r from-primary-500 to-purple-600 text-white text-sm font-medium rounded-lg hover:scale-105 transition-all">
                            Book Appointment
                        </a>
                    </div>
                </div>

                <!-- Doctor 3 -->
                <div class="glass rounded-2xl overflow-hidden hover-lift transition-all group">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop" alt="Doctor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-3 right-3 glass px-2 py-1 rounded-full flex items-center gap-1">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-xs text-white font-medium">Available</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                            <div class="flex gap-2">
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-twitter text-xs"></i>
                                </a>
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-facebook-f text-xs"></i>
                                </a>
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-linkedin-in text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white font-semibold">Dr. Emily Rodriguez</h4>
                        <p class="text-sm text-primary-400">Dentist</p>
                        <div class="flex justify-center gap-4 mt-2 text-xs text-gray-400">
                            <span><i class="fas fa-phone text-primary-400 mr-1"></i>+880 1234 5678</span>
                        </div>
                        <a href="#" class="mt-3 inline-block w-full px-4 py-2 bg-gradient-to-r from-primary-500 to-purple-600 text-white text-sm font-medium rounded-lg hover:scale-105 transition-all">
                            Book Appointment
                        </a>
                    </div>
                </div>

                <!-- Doctor 4 -->
                <div class="glass rounded-2xl overflow-hidden hover-lift transition-all group">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop" alt="Doctor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-3 right-3 glass px-2 py-1 rounded-full flex items-center gap-1">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-xs text-white font-medium">Available</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                            <div class="flex gap-2">
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-twitter text-xs"></i>
                                </a>
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-facebook-f text-xs"></i>
                                </a>
                                <a href="#" class="w-8 h-8 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white hover:bg-white/40 transition-all">
                                    <i class="fab fa-linkedin-in text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white font-semibold">Dr. James Wilson</h4>
                        <p class="text-sm text-primary-400">Orthopedic</p>
                        <div class="flex justify-center gap-4 mt-2 text-xs text-gray-400">
                            <span><i class="fas fa-phone text-primary-400 mr-1"></i>+880 1234 5678</span>
                        </div>
                        <a href="#" class="mt-3 inline-block w-full px-4 py-2 bg-gradient-to-r from-primary-500 to-purple-600 text-white text-sm font-medium rounded-lg hover:scale-105 transition-all">
                            Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="#" class="inline-flex items-center gap-2 px-8 py-3 bg-white/5 border border-white/10 text-gray-300 font-semibold rounded-full hover:bg-white/10 hover:text-white transition-all">
                    View All Doctors
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ============================================
    PRICING SECTION
    ============================================ -->
    <section id="pricing" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 mb-4">
                    <span class="text-xs text-primary-400 font-medium">Pricing Plans</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold">
                    We Offer Fair Prices for<br>
                    <span class="gradient-text">Poor & Special Patients</span>
                </h2>
                <p class="text-gray-400 mt-4">Any kind of disease can recover by us. We believe quality healthcare should be accessible to everyone.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Pricing 1 -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all text-center">
                    <div class="relative overflow-hidden h-48 rounded-xl mb-4">
                        <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=400&h=300&fit=crop" alt="Pricing" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-2 left-1/2 -translate-x-1/2 glass px-4 py-1 rounded-lg">
                            <span class="text-xl font-bold text-white">$35</span>
                            <span class="text-sm text-gray-400">/session</span>
                        </div>
                    </div>
                    <h4 class="text-white font-semibold text-lg">Teeth Whitening</h4>
                    <div class="space-y-2 mt-4 text-left">
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>Modern Equipment</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>Professional Dentist</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>24/7 Call Support</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                    </div>
                    <a href="#" class="mt-6 inline-block w-full px-4 py-2.5 bg-gradient-to-r from-primary-500 to-purple-600 text-white text-sm font-medium rounded-lg hover:scale-105 transition-all">
                        Book Appointment
                    </a>
                </div>

                <!-- Pricing 2 (Featured) -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all text-center relative overflow-hidden" style="background: linear-gradient(135deg, #1a1a2e, #2d1b4e); border-color: rgba(102, 126, 234, 0.3);">
                    <div class="absolute top-3 right-3 px-3 py-1 bg-gradient-to-r from-pink-500 to-purple-600 text-white text-xs font-bold rounded-full">
                        Best Value
                    </div>
                    <div class="relative overflow-hidden h-48 rounded-xl mb-4">
                        <img src="https://images.unsplash.com/photo-1579684386107-1f62e3be1a8b?w=400&h=300&fit=crop" alt="Pricing" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-2 left-1/2 -translate-x-1/2 glass px-4 py-1 rounded-lg">
                            <span class="text-xl font-bold text-white">$75</span>
                            <span class="text-sm text-gray-400">/session</span>
                        </div>
                    </div>
                    <h4 class="text-white font-semibold text-lg">Dental Implant</h4>
                    <div class="space-y-2 mt-4 text-left">
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>Advanced Technology</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>Expert Surgeons</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>Lifetime Warranty</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                    </div>
                    <a href="#" class="mt-6 inline-block w-full px-4 py-2.5 bg-gradient-to-r from-pink-500 to-purple-600 text-white text-sm font-medium rounded-lg hover:scale-105 transition-all">
                        Book Appointment
                    </a>
                </div>

                <!-- Pricing 3 -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all text-center">
                    <div class="relative overflow-hidden h-48 rounded-xl mb-4">
                        <img src="https://images.unsplash.com/photo-1606811971618-4486d14f3f99?w=400&h=300&fit=crop" alt="Pricing" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-2 left-1/2 -translate-x-1/2 glass px-4 py-1 rounded-lg">
                            <span class="text-xl font-bold text-white">$120</span>
                            <span class="text-sm text-gray-400">/session</span>
                        </div>
                    </div>
                    <h4 class="text-white font-semibold text-lg">Root Canal</h4>
                    <div class="space-y-2 mt-4 text-left">
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>Painless Procedure</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>Specialized Care</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>Follow-up Included</span>
                            <i class="fas fa-check text-green-400"></i>
                        </div>
                    </div>
                    <a href="#" class="mt-6 inline-block w-full px-4 py-2.5 bg-gradient-to-r from-primary-500 to-purple-600 text-white text-sm font-medium rounded-lg hover:scale-105 transition-all">
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    TESTIMONIALS SECTION
    ============================================ -->
    <section class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 mb-4">
                    <span class="text-xs text-primary-400 font-medium">Testimonials</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold">
                    Real Stories from<br>
                    <span class="gradient-text">Real Patients</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop" alt="Patient" class="w-12 h-12 rounded-full object-cover border-2 border-primary-500/30">
                        <div>
                            <h4 class="text-white font-semibold">Sarah Johnson</h4>
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        "Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum.
                        At lorem lorem magna ut et, nonumy labore diam erat."
                    </p>
                    <div class="mt-3 flex items-center gap-2 text-xs text-gray-500">
                        <i class="fas fa-calendar-alt"></i>
                        <span>January 15, 2024</span>
                        <span class="mx-1">•</span>
                        <span class="text-primary-400">Dental Care</span>
                    </div>
                </div>

                <!-- Testimonial 2 (Featured) -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all" style="background: linear-gradient(135deg, #1a1a2e, #2d1b4e);">
                    <div class="absolute top-3 right-3 px-2 py-1 bg-yellow-500/20 text-yellow-500 text-xs font-medium rounded-full">
                        Featured
                    </div>
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop" alt="Patient" class="w-12 h-12 rounded-full object-cover border-2 border-pink-500/30">
                        <div>
                            <h4 class="text-white font-semibold">Michael Chen</h4>
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        "Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum.
                        At lorem lorem magna ut et, nonumy labore diam erat."
                    </p>
                    <div class="mt-3 flex items-center gap-2 text-xs text-gray-500">
                        <i class="fas fa-calendar-alt"></i>
                        <span>February 3, 2024</span>
                        <span class="mx-1">•</span>
                        <span class="text-pink-400">Surgery</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="glass rounded-2xl p-6 hover-lift transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=60&h=60&fit=crop" alt="Patient" class="w-12 h-12 rounded-full object-cover border-2 border-primary-500/30">
                        <div>
                            <h4 class="text-white font-semibold">Emily Rodriguez</h4>
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        "Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum.
                        At lorem lorem magna ut et, nonumy labore diam erat."
                    </p>
                    <div class="mt-3 flex items-center gap-2 text-xs text-gray-500">
                        <i class="fas fa-calendar-alt"></i>
                        <span>March 20, 2024</span>
                        <span class="mx-1">•</span>
                        <span class="text-primary-400">Consultation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    CONTACT SECTION
    ============================================ -->
    <section id="contact" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 mb-4">
                    <span class="text-xs text-primary-400 font-medium">Get In Touch</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold">
                    Contact Us<br>
                    <span class="gradient-text">For Any Questions</span>
                </h2>
                <p class="text-gray-400 mt-4">Have questions about our services? We're here to help. Reach out to us and we'll respond as soon as possible.</p>
            </div>

            <div class="grid lg:grid-cols-5 gap-8">
                <!-- Contact Info -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="glass rounded-2xl p-5 flex items-start gap-4 hover:translate-x-1 transition-transform">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-500/20 to-purple-600/20 flex items-center justify-center text-primary-400 flex-shrink-0">
                            <i class="fas fa-phone text-lg"></i>
                        </div>
                        <div>
                            <h5 class="text-white font-semibold text-sm">Phone</h5>
                            <a href="tel:+88000000000" class="text-primary-400 hover:text-primary-300 transition-colors">+880 0000 00000</a>
                            <p class="text-xs text-gray-500">Mon-Fri 8:00 AM - 9:00 PM</p>
                        </div>
                    </div>

                    <div class="glass rounded-2xl p-5 flex items-start gap-4 hover:translate-x-1 transition-transform">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-500/20 to-purple-600/20 flex items-center justify-center text-primary-400 flex-shrink-0">
                            <i class="fas fa-envelope text-lg"></i>
                        </div>
                        <div>
                            <h5 class="text-white font-semibold text-sm">Email</h5>
                            <a href="mailto:info@rapidcare.com" class="text-primary-400 hover:text-primary-300 transition-colors">info@rapidcare.com</a>
                            <p class="text-xs text-gray-500">We'll respond within 24 hours</p>
                        </div>
                    </div>

                    <div class="glass rounded-2xl p-5 flex items-start gap-4 hover:translate-x-1 transition-transform">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-500/20 to-purple-600/20 flex items-center justify-center text-primary-400 flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-lg"></i>
                        </div>
                        <div>
                            <h5 class="text-white font-semibold text-sm">Location</h5>
                            <p class="text-gray-400 text-sm">123 Healthcare Ave, Dhaka</p>
                            <p class="text-xs text-gray-500">Visit us anytime</p>
                        </div>
                    </div>

                    <div class="glass rounded-2xl p-5 text-center">
                        <p class="text-gray-400 text-sm mb-3">Follow Us</p>
                        <div class="flex justify-center gap-3">
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-3 glass rounded-2xl p-6 md:p-8">
                    <h3 class="text-xl font-bold text-white mb-1">Send Us a Message</h3>
                    <p class="text-sm text-gray-400 mb-6">We'll get back to you within 24 hours</p>

                    <form class="space-y-4">
                        <div>
                            <div class="relative">
                                <i class="fas fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm"></i>
                                <input type="text" placeholder="Your Full Name" class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-purple-500/50 transition-colors">
                            </div>
                        </div>
                        <div>
                            <div class="relative">
                                <i class="fas fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm"></i>
                                <input type="email" placeholder="Email Address" class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-purple-500/50 transition-colors">
                            </div>
                        </div>
                        <div>
                            <div class="relative">
                                <i class="fas fa-phone absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm"></i>
                                <input type="tel" placeholder="Phone Number" class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-purple-500/50 transition-colors">
                            </div>
                        </div>
                        <div>
                            <div class="relative">
                                <i class="fas fa-comment absolute left-3 top-3 text-gray-500 text-sm"></i>
                                <textarea rows="4" placeholder="Your Message" class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-purple-500/50 transition-colors resize-none"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-primary-500 to-purple-600 text-white font-semibold rounded-xl hover:scale-105 hover:shadow-lg hover:shadow-purple-500/30 transition-all flex items-center justify-center gap-2">
                                <i class="fas fa-paper-plane"></i>
                                Send Message
                            </button>
                            <button type="reset" class="px-6 py-3 bg-white/5 border border-white/10 text-gray-400 font-semibold rounded-xl hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                                <i class="fas fa-undo"></i>
                                Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    NEWSLETTER SECTION
    ============================================ -->
    <section class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass rounded-3xl p-8 md:p-12 relative overflow-hidden" style="background: linear-gradient(135deg, #1a1a2e, #2d1b4e);">
                <div class="absolute top-0 right-0 w-64 h-64 bg-purple-600/10 rounded-full blur-2xl"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-primary-500/10 rounded-full blur-2xl"></div>

                <div class="relative z-10 grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 mb-4">
                            <span class="text-xs text-primary-400 font-medium">Stay Updated</span>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-white">
                            Subscribe to Our<br>
                            <span class="gradient-text">Newsletter</span>
                        </h2>
                        <p class="text-gray-400 mt-2">Get the latest updates on healthcare innovations and exclusive offers.</p>
                    </div>

                    <form class="flex flex-col sm:flex-row gap-3">
                        <div class="flex-1 relative">
                            <i class="fas fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm"></i>
                            <input type="email" placeholder="Enter your email" class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-purple-500/50 transition-colors">
                        </div>
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-primary-500 to-purple-600 text-white font-semibold rounded-xl hover:scale-105 hover:shadow-lg hover:shadow-purple-500/30 transition-all whitespace-nowrap flex items-center gap-2">
                            <i class="fas fa-paper-plane"></i>
                            Subscribe
                        </button>
                    </form>

                    <div class="flex items-center gap-2 text-xs text-gray-500 md:col-span-2">
                        <i class="fas fa-shield-alt text-primary-400"></i>
                        <span>No spam. Unsubscribe anytime.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    FOOTER
    ============================================ -->
    <footer class="border-t border-white/5 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Brand -->
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary-400 to-purple-600 flex items-center justify-center text-white font-bold text-sm">
                            RC
                        </div>
                        <span class="text-lg font-bold text-white">Rapid<span class="gradient-text">Care</span></span>
                    </div>
                    <p class="text-sm text-gray-500">Premium healthcare services for you and your family.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h5 class="text-white font-semibold mb-3">Quick Links</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-primary-400"></i>Home</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-primary-400"></i>About Us</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-primary-400"></i>Our Services</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-primary-400"></i>Contact Us</a></li>
                    </ul>
                </div>

                <!-- Popular Links -->
                <div>
                    <h5 class="text-white font-semibold mb-3">Popular Links</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-primary-400"></i>Doctors</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-primary-400"></i>Appointments</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-primary-400"></i>Pricing</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-primary-400"></i>Testimonials</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h5 class="text-white font-semibold mb-3">Stay Connected</h5>
                    <div class="flex gap-2 mb-4">
                        <a href="#" class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <p class="text-xs text-gray-500">© 2024 Rapid Care. All rights reserved.</p>
                </div>
            </div>

            <div class="border-t border-white/5 mt-8 pt-8 text-center text-xs text-gray-500">
                Designed with <i class="fas fa-heart text-red-400"></i> by <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors">WebDevs</a>
            </div>
        </div>
    </footer>

    <!-- ============================================
    BACK TO TOP
    ============================================ -->
    <button id="backToTop" class="fixed bottom-6 right-6 w-12 h-12 rounded-full bg-gradient-to-r from-primary-500 to-purple-600 text-white shadow-lg shadow-purple-500/30 hover:scale-110 transition-all hidden items-center justify-center z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- ============================================
    JAVASCRIPT
    ============================================ -->
    <script>
        // ===== Mobile Menu Toggle =====
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('open');
        }

        function closeMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.remove('open');
        }

        // ===== Back to Top Button =====
        const backToTopBtn = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove('hidden');
                backToTopBtn.classList.add('flex');
            } else {
                backToTopBtn.classList.add('hidden');
                backToTopBtn.classList.remove('flex');
            }
        });

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // ===== Smooth Scroll for Anchor Links =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    const navbarHeight = 64;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // ===== Navbar Scroll Effect =====
        const navbar = document.querySelector('nav');
        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 50) {
                navbar.style.boxShadow = '0 4px 40px rgba(0, 0, 0, 0.6)';
                navbar.style.borderBottomColor = 'rgba(255, 255, 255, 0.06)';
            } else {
                navbar.style.boxShadow = 'none';
                navbar.style.borderBottomColor = 'rgba(255, 255, 255, 0.04)';
            }

            lastScroll = currentScroll;
        }, { passive: true });
    </script>
</body>
</html>
