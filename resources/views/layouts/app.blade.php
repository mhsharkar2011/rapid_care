<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel - Rapid Care')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0a;
            color: #e2e8f0;
        }

        .card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(10px);
        }

        .card-header, .card-footer {
            background: rgba(255, 255, 255, 0.02);
            border-color: rgba(255, 255, 255, 0.06);
        }

        .text-gray-800 {
            color: #e2e8f0 !important;
        }

        .text-gray-300 {
            color: #94a3b8 !important;
        }

        .border-left-primary {
            border-left: 4px solid #667eea !important;
        }

        .border-left-success {
            border-left: 4px solid #10b981 !important;
        }

        .border-left-info {
            border-left: 4px solid #3b82f6 !important;
        }

        .border-left-warning {
            border-left: 4px solid #f59e0b !important;
        }

        .border-left-danger {
            border-left: 4px solid #ef4444 !important;
        }

        .shadow {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3) !important;
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
