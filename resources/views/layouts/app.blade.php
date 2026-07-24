<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel - Rapid Care</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        /* ============================================
        GLOBAL STYLES - BLACK THEME
        ============================================ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0a;
            color: #e2e8f0;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 3px;
        }

        /* ============================================
        TOP NAVBAR
        ============================================ */
        .topbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            height: 60px;
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .topbar-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .topbar-brand .brand-icon {
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 0.9rem;
        }

        .topbar-toggle {
            display: none;
            background: none;
            border: none;
            color: #94a3b8;
            font-size: 1.2rem;
            cursor: pointer;
            padding: 0.5rem;
            transition: color 0.3s ease;
        }

        .topbar-toggle:hover {
            color: #ffffff;
        }

        .topbar-search {
            flex: 1;
            max-width: 400px;
            margin: 0 1.5rem;
        }

        .topbar-search .input-group {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .topbar-search .input-group:focus-within {
            border-color: rgba(102, 126, 234, 0.3);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.05);
        }

        .topbar-search .form-control {
            background: transparent;
            border: none;
            color: #e2e8f0;
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }

        .topbar-search .form-control::placeholder {
            color: #64748b;
        }

        .topbar-search .form-control:focus {
            box-shadow: none;
        }

        .topbar-search .btn-search {
            background: transparent;
            border: none;
            color: #64748b;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .topbar-search .btn-search:hover {
            color: #a78bfa;
        }

        .topbar-actions {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .topbar-action-btn {
            position: relative;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            color: #94a3b8;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .topbar-action-btn:hover {
            background: rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .topbar-action-btn .badge-count {
            position: absolute;
            top: -4px;
            right: -4px;
            background: #ef4444;
            color: white;
            font-size: 0.6rem;
            font-weight: 700;
            min-width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #0a0a0a;
        }

        .topbar-user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.25rem 0.75rem 0.25rem 1rem;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .topbar-user:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .topbar-user .user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.8rem;
        }

        .topbar-user .user-name {
            color: #e2e8f0;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .topbar-user .user-chevron {
            color: #64748b;
            font-size: 0.7rem;
        }

        /* ============================================
        SIDEBAR
        ============================================ */
        .sidebar {
            position: fixed;
            top: 60px;
            left: 0;
            bottom: 0;
            width: 250px;
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255, 255, 255, 0.04);
            padding: 1.5rem 1rem;
            overflow-y: auto;
            transition: transform 0.3s ease;
            z-index: 1020;
        }

        .sidebar::-webkit-scrollbar {
            width: 3px;
        }

        .sidebar-section {
            margin-bottom: 2rem;
        }

        .sidebar-section-title {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
            font-weight: 600;
            padding: 0 0.75rem;
            margin-bottom: 0.5rem;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-nav .nav-item {
            margin-bottom: 0.15rem;
        }

        .sidebar-nav .nav-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.6rem 0.75rem;
            border-radius: 8px;
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.85rem;
            font-weight: 500;
            position: relative;
        }

        .sidebar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.04);
            color: #ffffff;
        }

        .sidebar-nav .nav-link.active {
            background: rgba(102, 126, 234, 0.1);
            color: #a78bfa;
        }

        .sidebar-nav .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 60%;
            background: linear-gradient(180deg, #667eea, #764ba2);
            border-radius: 0 3px 3px 0;
        }

        .sidebar-nav .nav-link .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 0.95rem;
            flex-shrink: 0;
        }

        .sidebar-nav .nav-link .nav-text {
            flex: 1;
        }

        .sidebar-nav .nav-link .nav-badge {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
            font-size: 0.6rem;
            font-weight: 700;
            padding: 0.1rem 0.5rem;
            border-radius: 50px;
        }

        /* ============================================
        MAIN CONTENT
        ============================================ */
        .main-content {
            margin-left: 250px;
            margin-top: 60px;
            padding: 2rem;
            min-height: calc(100vh - 60px);
        }

        /* ============================================
        DROPDOWN MENU
        ============================================ */
        .dropdown-menu-custom {
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 12px;
            padding: 0.5rem;
            min-width: 200px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
        }

        .dropdown-menu-custom .dropdown-item {
            color: #94a3b8;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-size: 0.85rem;
        }

        .dropdown-menu-custom .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.04);
            color: #ffffff;
        }

        .dropdown-menu-custom .dropdown-item .item-icon {
            margin-right: 0.5rem;
            width: 18px;
            text-align: center;
        }

        .dropdown-menu-custom .dropdown-divider {
            border-color: rgba(255, 255, 255, 0.04);
            margin: 0.25rem 0;
        }

        /* ============================================
        MODAL
        ============================================ */
        .modal-content-custom {
            background: #1a1a2e;
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 16px;
            color: #e2e8f0;
        }

        .modal-content-custom .modal-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            padding: 1.25rem 1.5rem;
        }

        .modal-content-custom .modal-header .modal-title {
            color: #ffffff;
        }

        .modal-content-custom .modal-header .btn-close {
            background: rgba(255, 255, 255, 0.04);
            border-radius: 50%;
            padding: 0.5rem;
            opacity: 0.6;
        }

        .modal-content-custom .modal-header .btn-close:hover {
            opacity: 1;
        }

        .modal-content-custom .modal-body {
            padding: 1.5rem;
            color: #94a3b8;
        }

        .modal-content-custom .modal-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            padding: 1.25rem 1.5rem;
        }

        .modal-content-custom .btn-secondary-custom {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            color: #94a3b8;
            padding: 0.5rem 1.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .modal-content-custom .btn-secondary-custom:hover {
            background: rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .modal-content-custom .btn-primary-custom {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .modal-content-custom .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(102, 126, 234, 0.3);
        }

        /* ============================================
        ALERTS
        ============================================ */
        .alert-custom {
            border-radius: 12px;
            padding: 1rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .alert-custom.alert-danger {
            background: rgba(239, 68, 68, 0.08);
            border-color: rgba(239, 68, 68, 0.15);
            color: #f87171;
        }

        .alert-custom.alert-success {
            background: rgba(52, 211, 153, 0.08);
            border-color: rgba(52, 211, 153, 0.15);
            color: #34d399;
        }

        .alert-custom ul {
            margin: 0;
            padding-left: 1.25rem;
        }

        /* ============================================
        RESPONSIVE
        ============================================ */
        @media (max-width: 992px) {
            .topbar-toggle {
                display: block;
            }

            .topbar-search {
                max-width: 200px;
                margin: 0 0.75rem;
            }

            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                padding: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .topbar {
                padding: 0 1rem;
            }

            .topbar-search {
                display: none;
            }

            .topbar-user .user-name {
                display: none;
            }

            .topbar-user .user-chevron {
                display: none;
            }

            .topbar-user {
                padding: 0.25rem 0.5rem;
            }

            .main-content {
                padding: 1rem;
            }
        }

        @media (max-width: 480px) {
            .topbar-brand .brand-text {
                display: none;
            }

            .topbar-actions .topbar-action-btn {
                width: 34px;
                height: 34px;
            }
        }

        /* ============================================
        ANIMATIONS
        ============================================ */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.4s ease forwards;
        }

        /* ============================================
        SIDEBAR OVERLAY
        ============================================ */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1019;
        }

        .sidebar-overlay.active {
            display: block;
        }

        @media (min-width: 993px) {
            .sidebar-overlay {
                display: none !important;
            }
        }
    </style>
</head>

<body>

    <!-- ============================================
    SIDEBAR OVERLAY
    ============================================ -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ============================================
    TOP NAVBAR
    ============================================ -->
    <nav class="topbar">
        <!-- Left: Brand & Toggle -->
        <div class="d-flex align-items-center gap-2">
            <button class="topbar-toggle" id="sidebarToggle" aria-label="Toggle Sidebar">
                <i class="fas fa-bars"></i>
            </button>
            <a class="topbar-brand" href="{{ route('admin.dashboard') }}">
                <span class="brand-icon">RC</span>
                <span class="brand-text">Rapid<span style="color: #a78bfa;">Care</span></span>
            </a>
        </div>

        <!-- Search -->
        <div class="topbar-search d-none d-md-block">
            <form method="GET" action="{{ route('admin.users.index') }}">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Search">
                    <button class="btn-search" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Right: Actions -->
        <div class="topbar-actions">
            <!-- Notifications -->
            <a class="topbar-action-btn" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell"></i>
                <span class="badge-count">{{ $totalActiveAppointments ?? 0 }}</span>
            </a>

            <!-- Messages -->
            <a class="topbar-action-btn" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-envelope"></i>
            </a>

            <!-- User Dropdown -->
            <div class="dropdown">
                <a class="topbar-user" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-avatar">{{ substr(auth()->user()->name ?? 'A', 0, 1) }}</div>
                    <span class="user-name">{{ auth()->user()->name ?? 'Admin' }}</span>
                    <span class="user-chevron"><i class="fas fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-end" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="#">
                            <span class="item-icon"><i class="fas fa-user"></i></span>
                            Profile Settings
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <span class="item-icon"><i class="fas fa-cog"></i></span>
                            Account Settings
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <span class="item-icon"><i class="fas fa-sign-out-alt"></i></span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================
    SIDEBAR
    ============================================ -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-section">
            <div class="sidebar-section-title">Main</div>
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <span class="nav-icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-section">
            <div class="sidebar-section-title">Management</div>
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                        <span class="nav-icon"><i class="fas fa-users"></i></span>
                        <span class="nav-text">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/employees*') ? 'active' : '' }}" href="{{ route('admin.employees.index') }}">
                        <span class="nav-icon"><i class="fas fa-user-tie"></i></span>
                        <span class="nav-text">Employees</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/doctors*') ? 'active' : '' }}" href="{{ route('admin.doctors.index') }}">
                        <span class="nav-icon"><i class="fas fa-user-md"></i></span>
                        <span class="nav-text">Doctors</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/patients*') ? 'active' : '' }}" href="{{ route('admin.patients.index') }}">
                        <span class="nav-icon"><i class="fas fa-user-injured"></i></span>
                        <span class="nav-text">Patients</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/appointments*') ? 'active' : '' }}" href="{{ route('admin.appointments.index') }}">
                        <span class="nav-icon"><i class="fas fa-calendar-check"></i></span>
                        <span class="nav-text">Appointments</span>
                        <span class="nav-badge">{{ $totalActiveAppointments ?? 0 }}</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-section">
            <div class="sidebar-section-title">System</div>
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/user-access') ? 'active' : '' }}" href="{{ route('admin.user-access') }}">
                        <span class="nav-icon"><i class="fas fa-cog"></i></span>
                        <span class="nav-text">Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <span class="nav-icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- ============================================
    MAIN CONTENT
    ============================================ -->
    <main class="main-content">
        <!-- Alerts -->
        @if (count($errors) > 0)
            <div class="alert-custom alert-danger fade-in">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert-custom alert-success fade-in">
                {{ session('success') }}
            </div>
        @endif

        <!-- Page Content -->
        @yield('content')
    </main>

    <!-- ============================================
    LOGOUT MODAL
    ============================================ -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-custom">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn-secondary-custom" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn-primary-custom" href="{{ route('admin.logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
    SCRIPTS
    ============================================ -->
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ===== Sidebar Toggle =====
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            function toggleSidebar() {
                sidebar.classList.toggle('open');
                sidebarOverlay.classList.toggle('active');
            }

            function closeSidebar() {
                sidebar.classList.remove('open');
                sidebarOverlay.classList.remove('active');
            }

            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', toggleSidebar);
            }

            if (sidebarOverlay) {
                sidebarOverlay.addEventListener('click', closeSidebar);
            }

            // Close sidebar on window resize (desktop)
            window.addEventListener('resize', function() {
                if (window.innerWidth > 992) {
                    closeSidebar();
                }
            });

            // ===== Close sidebar on link click (mobile) =====
            document.querySelectorAll('.sidebar-nav .nav-link').forEach(function(link) {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 992) {
                        closeSidebar();
                    }
                });
            });

            // ===== Auto-close alerts =====
            setTimeout(function() {
                document.querySelectorAll('.alert-custom').forEach(function(alert) {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';
                    setTimeout(function() {
                        alert.remove();
                    }, 500);
                });
            }, 5000);
        });
    </script>

    @stack('scripts')
</body>
</html>
