@extends('layouts.app')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<div class="dashboard-container">
    <!-- Page Header -->
    <div class="dashboard-header">
        <div>
            <h1 class="dashboard-title">Dashboard</h1>
            <p class="dashboard-subtitle">Welcome back, {{ auth()->user()->name ?? 'Admin' }}! Here's what's happening with your practice today.</p>
        </div>
        <div class="dashboard-actions">
            <button class="btn-export">
                <i class="fas fa-file-export"></i>
                <span>Export Report</span>
            </button>
            <button class="btn-refresh" onclick="location.reload()">
                <i class="fas fa-sync-alt"></i>
            </button>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <!-- Employees -->
        <div class="stat-card stat-card-primary">
            <div class="stat-card-header">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    <span>12%</span>
                </div>
            </div>
            <div class="stat-card-body">
                <div class="stat-number">{{ $totalEmployees ?? 0 }}</div>
                <div class="stat-label">Total Employees</div>
            </div>
            <div class="stat-card-footer">
                <a href="{{ route('admin.employees.index') }}" class="stat-link">
                    View All Employees
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Patients -->
        <div class="stat-card stat-card-success">
            <div class="stat-card-header">
                <div class="stat-icon">
                    <i class="fas fa-user-injured"></i>
                </div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    <span>8%</span>
                </div>
            </div>
            <div class="stat-card-body">
                <div class="stat-number">{{ $totalPatients ?? 0 }}</div>
                <div class="stat-label">Total Patients</div>
            </div>
            <div class="stat-card-footer">
                <a href="{{ route('admin.patients.index') }}" class="stat-link">
                    View All Patients
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Appointments -->
        <div class="stat-card stat-card-info">
            <div class="stat-card-header">
                <div class="stat-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    <span>5%</span>
                </div>
            </div>
            <div class="stat-card-body">
                <div class="stat-number">{{ $totalAppointments ?? 0 }}</div>
                <div class="stat-label">Total Appointments</div>
            </div>
            <div class="stat-card-footer">
                <a href="{{ route('admin.appointments.index') }}" class="stat-link">
                    View All Appointments
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Doctors -->
        <div class="stat-card stat-card-warning">
            <div class="stat-card-header">
                <div class="stat-icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <div class="stat-change positive">
                    <i class="fas fa-arrow-up"></i>
                    <span>3%</span>
                </div>
            </div>
            <div class="stat-card-body">
                <div class="stat-number">{{ $totalDoctors ?? 0 }}</div>
                <div class="stat-label">Total Doctors</div>
            </div>
            <div class="stat-card-footer">
                <a href="{{ route('admin.doctors.index') }}" class="stat-link">
                    View All Doctors
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Charts & Analytics Row -->
    <div class="analytics-grid">
        <!-- Revenue Chart -->
        <div class="analytics-card">
            <div class="analytics-card-header">
                <div>
                    <h3 class="analytics-card-title">Revenue Overview</h3>
                    <p class="analytics-card-subtitle">Monthly revenue breakdown</p>
                </div>
                <div class="analytics-card-actions">
                    <select class="analytics-select">
                        <option>This Month</option>
                        <option>Last Month</option>
                        <option>This Year</option>
                    </select>
                </div>
            </div>
            <div class="analytics-card-body">
                <div class="chart-container">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Appointment Status -->
        <div class="analytics-card">
            <div class="analytics-card-header">
                <div>
                    <h3 class="analytics-card-title">Appointment Status</h3>
                    <p class="analytics-card-subtitle">Current appointment distribution</p>
                </div>
            </div>
            <div class="analytics-card-body">
                <div class="chart-container">
                    <canvas id="statusChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Financial & Today's Stats -->
    <div class="stats-secondary-grid">
        <!-- Financial Stats -->
        <div class="financial-stats">
            <div class="financial-card">
                <div class="financial-icon financial-icon-success">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="financial-content">
                    <div class="financial-label">Total Earnings</div>
                    <div class="financial-value">${{ number_format($totalEarnings ?? 0, 2) }}</div>
                    <div class="financial-change positive">
                        <i class="fas fa-arrow-up"></i>
                        <span>15.3%</span>
                    </div>
                </div>
            </div>

            <div class="financial-card">
                <div class="financial-icon financial-icon-danger">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="financial-content">
                    <div class="financial-label">Total Cost</div>
                    <div class="financial-value">${{ number_format($totalCost ?? 0, 2) }}</div>
                    <div class="financial-change negative">
                        <i class="fas fa-arrow-down"></i>
                        <span>2.1%</span>
                    </div>
                </div>
            </div>

            <div class="financial-card">
                <div class="financial-icon financial-icon-info">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="financial-content">
                    <div class="financial-label">Total Profit</div>
                    <div class="financial-value">${{ number_format($totalProfit ?? 0, 2) }}</div>
                    <div class="financial-change positive">
                        <i class="fas fa-arrow-up"></i>
                        <span>18.4%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Today's Stats -->
        <div class="today-stats">
            <div class="today-stat-item">
                <div class="today-stat-icon today-icon-primary">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="today-stat-content">
                    <div class="today-stat-number">{{ $newPatientsToday ?? 0 }}</div>
                    <div class="today-stat-label">New Patients Today</div>
                </div>
            </div>

            <div class="today-stat-item">
                <div class="today-stat-icon today-icon-success">
                    <i class="fas fa-calendar-day"></i>
                </div>
                <div class="today-stat-content">
                    <div class="today-stat-number">{{ $todayAppointments ?? 0 }}</div>
                    <div class="today-stat-label">Today's Appointments</div>
                </div>
            </div>

            <div class="today-stat-item">
                <div class="today-stat-icon today-icon-info">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="today-stat-content">
                    <div class="today-stat-number">{{ $totalAdmins ?? 0 }}</div>
                    <div class="today-stat-label">Total Admins</div>
                </div>
            </div>

            <div class="today-stat-item">
                <div class="today-stat-icon today-icon-warning">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="today-stat-content">
                    <div class="today-stat-number">{{ $todayAppointments ?? 0 }}</div>
                    <div class="today-stat-label">Pending Appointments</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="recent-activity">
        <div class="recent-activity-header">
            <h3 class="recent-activity-title">Recent Activity</h3>
            <a href="#" class="recent-activity-link">View All</a>
        </div>
        <div class="recent-activity-list">
            <div class="activity-item">
                <div class="activity-icon activity-icon-primary">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="activity-content">
                    <div class="activity-text">
                        <span class="activity-highlight">New patient</span> registered today
                    </div>
                    <div class="activity-time">2 minutes ago</div>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon activity-icon-success">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="activity-content">
                    <div class="activity-text">
                        <span class="activity-highlight">Appointment</span> completed with Dr. Smith
                    </div>
                    <div class="activity-time">15 minutes ago</div>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon activity-icon-warning">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="activity-content">
                    <div class="activity-text">
                        <span class="activity-highlight">3 appointments</span> pending approval
                    </div>
                    <div class="activity-time">1 hour ago</div>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon activity-icon-info">
                    <i class="fas fa-user-md"></i>
                </div>
                <div class="activity-content">
                    <div class="activity-text">
                        <span class="activity-highlight">New doctor</span> joined the team
                    </div>
                    <div class="activity-time">3 hours ago</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================
    STYLES
    ============================================ -->
<style>
    /* ============================================
    DASHBOARD CONTAINER
    ============================================ */
    .dashboard-container {
        padding: 1.5rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ============================================
    PAGE HEADER
    ============================================ */
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .dashboard-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #ffffff;
        margin: 0;
        letter-spacing: -0.02em;
    }

    .dashboard-subtitle {
        color: #94a3b8;
        font-size: 0.9rem;
        margin: 0.25rem 0 0 0;
    }

    .dashboard-actions {
        display: flex;
        gap: 0.5rem;
        align-items: center;
    }

    .btn-export {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.25rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        color: #94a3b8;
        font-size: 0.85rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-export:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #ffffff;
    }

    .btn-refresh {
        width: 38px;
        height: 38px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        color: #94a3b8;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-refresh:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #ffffff;
        transform: rotate(180deg);
    }

    /* ============================================
    STATS GRID
    ============================================ */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        opacity: 0.6;
    }

    .stat-card-primary::before {
        background: linear-gradient(90deg, #667eea, #764ba2);
    }
    .stat-card-success::before {
        background: linear-gradient(90deg, #10b981, #34d399);
    }
    .stat-card-info::before {
        background: linear-gradient(90deg, #3b82f6, #60a5fa);
    }
    .stat-card-warning::before {
        background: linear-gradient(90deg, #f59e0b, #fbbf24);
    }

    .stat-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 255, 255, 0.1);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
    }

    .stat-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.75rem;
    }

    .stat-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        background: rgba(255, 255, 255, 0.04);
        color: #94a3b8;
    }

    .stat-card-primary .stat-icon {
        background: rgba(102, 126, 234, 0.1);
        color: #a78bfa;
    }
    .stat-card-success .stat-icon {
        background: rgba(16, 185, 129, 0.1);
        color: #34d399;
    }
    .stat-card-info .stat-icon {
        background: rgba(59, 130, 246, 0.1);
        color: #60a5fa;
    }
    .stat-card-warning .stat-icon {
        background: rgba(245, 158, 11, 0.1);
        color: #fbbf24;
    }

    .stat-change {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        padding: 0.2rem 0.5rem;
        border-radius: 50px;
    }

    .stat-change.positive {
        color: #34d399;
        background: rgba(52, 211, 153, 0.1);
    }

    .stat-change.negative {
        color: #f87171;
        background: rgba(248, 113, 113, 0.1);
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: #ffffff;
        line-height: 1.2;
    }

    .stat-label {
        color: #94a3b8;
        font-size: 0.85rem;
        margin-top: 0.25rem;
    }

    .stat-card-footer {
        margin-top: 1rem;
        padding-top: 0.75rem;
        border-top: 1px solid rgba(255, 255, 255, 0.04);
    }

    .stat-link {
        color: #94a3b8;
        text-decoration: none;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }

    .stat-link:hover {
        color: #a78bfa;
    }

    .stat-link i {
        font-size: 0.7rem;
        transition: transform 0.3s ease;
    }

    .stat-link:hover i {
        transform: translateX(4px);
    }

    /* ============================================
    ANALYTICS GRID
    ============================================ */
    .analytics-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .analytics-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 1.5rem;
    }

    .analytics-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .analytics-card-title {
        font-size: 1rem;
        font-weight: 600;
        color: #ffffff;
        margin: 0;
    }

    .analytics-card-subtitle {
        color: #94a3b8;
        font-size: 0.8rem;
        margin: 0.1rem 0 0 0;
    }

    .analytics-select {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        color: #e2e8f0;
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
        outline: none;
        cursor: pointer;
    }

    .analytics-select option {
        background: #1a1a2e;
    }

    .chart-container {
        position: relative;
        height: 250px;
    }

    /* ============================================
    SECONDARY STATS
    ============================================ */
    .stats-secondary-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    /* Financial Stats */
    .financial-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
    }

    .financial-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 1.25rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: all 0.3s ease;
    }

    .financial-card:hover {
        border-color: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
    }

    .financial-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .financial-icon-success {
        background: rgba(52, 211, 153, 0.1);
        color: #34d399;
    }

    .financial-icon-danger {
        background: rgba(248, 113, 113, 0.1);
        color: #f87171;
    }

    .financial-icon-info {
        background: rgba(96, 165, 250, 0.1);
        color: #60a5fa;
    }

    .financial-content {
        flex: 1;
    }

    .financial-label {
        font-size: 0.75rem;
        color: #94a3b8;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .financial-value {
        font-size: 1.25rem;
        font-weight: 700;
        color: #ffffff;
        margin: 0.1rem 0;
    }

    .financial-change {
        font-size: 0.7rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.2rem;
    }

    .financial-change.positive {
        color: #34d399;
    }

    .financial-change.negative {
        color: #f87171;
    }

    /* Today Stats */
    .today-stats {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .today-stat-item {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        transition: all 0.3s ease;
    }

    .today-stat-item:hover {
        border-color: rgba(255, 255, 255, 0.1);
    }

    .today-stat-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        flex-shrink: 0;
    }

    .today-icon-primary {
        background: rgba(102, 126, 234, 0.1);
        color: #a78bfa;
    }
    .today-icon-success {
        background: rgba(52, 211, 153, 0.1);
        color: #34d399;
    }
    .today-icon-info {
        background: rgba(96, 165, 250, 0.1);
        color: #60a5fa;
    }
    .today-icon-warning {
        background: rgba(251, 191, 36, 0.1);
        color: #fbbf24;
    }

    .today-stat-number {
        font-size: 1.25rem;
        font-weight: 700;
        color: #ffffff;
        line-height: 1.2;
    }

    .today-stat-label {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    /* ============================================
    RECENT ACTIVITY
    ============================================ */
    .recent-activity {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 1.5rem;
    }

    .recent-activity-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.25rem;
    }

    .recent-activity-title {
        font-size: 1rem;
        font-weight: 600;
        color: #ffffff;
        margin: 0;
    }

    .recent-activity-link {
        color: #94a3b8;
        font-size: 0.85rem;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .recent-activity-link:hover {
        color: #a78bfa;
    }

    .recent-activity-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .activity-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .activity-item:hover {
        background: rgba(255, 255, 255, 0.04);
    }

    .activity-icon {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    .activity-icon-primary {
        background: rgba(102, 126, 234, 0.1);
        color: #a78bfa;
    }
    .activity-icon-success {
        background: rgba(52, 211, 153, 0.1);
        color: #34d399;
    }
    .activity-icon-warning {
        background: rgba(251, 191, 36, 0.1);
        color: #fbbf24;
    }
    .activity-icon-info {
        background: rgba(96, 165, 250, 0.1);
        color: #60a5fa;
    }

    .activity-content {
        flex: 1;
    }

    .activity-text {
        color: #cbd5e0;
        font-size: 0.9rem;
    }

    .activity-highlight {
        color: #ffffff;
        font-weight: 500;
    }

    .activity-time {
        color: #64748b;
        font-size: 0.75rem;
        margin-top: 0.1rem;
    }

    /* ============================================
    RESPONSIVE
    ============================================ */
    @media (max-width: 1200px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .analytics-grid {
            grid-template-columns: 1fr;
        }

        .stats-secondary-grid {
            grid-template-columns: 1fr;
        }

        .financial-stats {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .dashboard-container {
            padding: 1rem;
        }

        .dashboard-header {
            flex-direction: column;
            align-items: stretch;
        }

        .dashboard-actions {
            width: 100%;
            justify-content: flex-start;
        }

        .stats-grid {
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .stat-card {
            padding: 1rem;
        }

        .stat-number {
            font-size: 1.5rem;
        }

        .financial-stats {
            grid-template-columns: 1fr;
        }

        .today-stats {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 480px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .today-stats {
            grid-template-columns: 1fr;
        }

        .analytics-card-body {
            overflow-x: auto;
        }

        .dashboard-title {
            font-size: 1.25rem;
        }
    }
</style>

<!-- ============================================
    SCRIPTS
    ============================================ -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== Revenue Chart =====
        const revenueCtx = document.getElementById('revenueChart');
        if (revenueCtx) {
            new Chart(revenueCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Revenue',
                        data: [3000, 4500, 3800, 5200, 4800, 6000, 5500, 7000, 6800, 8000, 7500, 9000],
                        borderColor: '#8b5cf6',
                        backgroundColor: 'rgba(139, 92, 246, 0.05)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 2,
                        pointBackgroundColor: '#8b5cf6',
                        pointBorderColor: '#0a0a0a',
                        pointBorderWidth: 2,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                color: 'rgba(255, 255, 255, 0.04)',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#94a3b8'
                            }
                        },
                        y: {
                            grid: {
                                color: 'rgba(255, 255, 255, 0.04)',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#94a3b8',
                                callback: function(value) {
                                    return '$' + value;
                                }
                            }
                        }
                    }
                }
            });
        }

        // ===== Status Chart =====
        const statusCtx = document.getElementById('statusChart');
        if (statusCtx) {
            new Chart(statusCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Scheduled', 'Completed', 'Cancelled', 'No-Show'],
                    datasets: [{
                        data: [45, 30, 15, 10],
                        backgroundColor: [
                            '#8b5cf6',
                            '#34d399',
                            '#f87171',
                            '#fbbf24'
                        ],
                        borderColor: '#0a0a0a',
                        borderWidth: 3,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: '#94a3b8',
                                padding: 20,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        }
                    },
                    cutout: '70%'
                }
            });
        }
    });
</script>
@endsection
