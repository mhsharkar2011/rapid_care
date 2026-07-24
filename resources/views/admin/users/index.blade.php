@extends('layouts.app')

@section('title', 'User Management')

@section('content')
<div class="user-management">
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h1 class="page-title">User Management</h1>
            <p class="page-subtitle">Manage all users in your system</p>
        </div>
        <div class="page-actions">
            <a href="{{ route('admin.users.create') }}" class="btn-primary-custom">
                <i class="fas fa-plus-circle"></i>
                <span>Add New User</span>
            </a>
        </div>
    </div>

    <!-- Stats Summary -->
    <div class="stats-row">
        <div class="stat-mini">
            <div class="stat-mini-icon stat-mini-icon-total">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-mini-content">
                <div class="stat-mini-number">{{ $users->total() ?? $users->count() }}</div>
                <div class="stat-mini-label">Total Users</div>
            </div>
        </div>
        <div class="stat-mini">
            <div class="stat-mini-icon stat-mini-icon-active">
                <i class="fas fa-user-check"></i>
            </div>
            <div class="stat-mini-content">
                <div class="stat-mini-number">{{ $users->where('status', 'Active')->count() }}</div>
                <div class="stat-mini-label">Active Users</div>
            </div>
        </div>
        <div class="stat-mini">
            <div class="stat-mini-icon stat-mini-icon-inactive">
                <i class="fas fa-user-times"></i>
            </div>
            <div class="stat-mini-content">
                <div class="stat-mini-number">{{ $users->where('status', '!=', 'Active')->count() }}</div>
                <div class="stat-mini-label">Inactive Users</div>
            </div>
        </div>
        <div class="stat-mini">
            <div class="stat-mini-icon stat-mini-icon-role">
                <i class="fas fa-user-tag"></i>
            </div>
            <div class="stat-mini-content">
                <div class="stat-mini-number">{{ $users->where('role', 'admin')->count() }}</div>
                <div class="stat-mini-label">Administrators</div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="table-container">
        <div class="table-toolbar">
            <div class="table-toolbar-left">
                <div class="search-wrapper">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" id="tableSearch" class="search-input" placeholder="Search users...">
                </div>
                <div class="filter-wrapper">
                    <select id="roleFilter" class="filter-select">
                        <option value="">All Roles</option>
                        <option value="Admin">Admin</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Patient">Patient</option>
                        <option value="Employee">Employee</option>
                    </select>
                    <select id="statusFilter" class="filter-select">
                        <option value="">All Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="table-toolbar-right">
                <button class="btn-export-custom" onclick="exportTable()">
                    <i class="fas fa-file-export"></i>
                    Export
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table-custom" id="userTable">
                <thead>
                    <tr>
                        <th width="60">#</th>
                        <th>Card No</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th width="150">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->isNotEmpty())
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    @if($user->card)
                                        <span class="card-badge">{{ $user->card->card_no }}</span>
                                    @else
                                        <span class="text-muted-soft">No Card</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="user-cell">
                                        @if($user->avatar && Storage::exists('public/avatars/' . $user->avatar))
                                            <img src="{{ Storage::url('public/avatars/' . $user->avatar) }}" alt="{{ $user->name }}" class="user-avatar-img">
                                        @else
                                            <div class="user-avatar">
                                                {{ substr($user->name, 0, 1) }}
                                            </div>
                                        @endif
                                        <div>
                                            <div class="user-name">{{ $user->name }}</div>
                                            <div class="user-id">ID: #{{ $user->id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:{{ $user->email }}" class="email-link">
                                        <i class="fas fa-envelope"></i>
                                        {{ $user->email }}
                                    </a>
                                </td>
                                <td>
                                    @php
                                        // Get the role string safely
                                        $userRole = $user->role ?? $user->roles->pluck('name')->first() ?? 'Not Assigned';

                                        // If roles is a collection, get the first one or convert to string
                                        if ($userRole instanceof \Illuminate\Database\Eloquent\Collection) {
                                            $userRole = $userRole->first() ?? 'Not Assigned';
                                        }

                                        // If it's an array, get the first element
                                        if (is_array($userRole)) {
                                            $userRole = $userRole[0] ?? 'Not Assigned';
                                        }

                                        // If it's null or empty, set default
                                        if (empty($userRole)) {
                                            $userRole = 'Not Assigned';
                                        }

                                        // Ensure it's a string
                                        $userRole = (string) $userRole;

                                        $roleColors = [
                                            'Admin' => 'role-admin',
                                            'Doctor' => 'role-doctor',
                                            'Patient' => 'role-patient',
                                            'Employee' => 'role-employee',
                                        ];

                                        $roleClass = isset($roleColors[$userRole]) ? $roleColors[$userRole] : 'role-default';
                                    @endphp
                                    <span class="role-badge {{ $roleClass }}">
                                        {{ $userRole }}
                                    </span>
                                </td>
                                <td>
                                    <form action="{{ route('admin.users.update-status', $user->id) }}" method="POST" class="status-form">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="{{ $user->status == 'Active' ? 'Inactive' : 'Active' }}">
                                        <button type="submit" class="status-toggle {{ $user->status == 'Active' ? 'status-active' : 'status-inactive' }}">
                                            <span class="status-dot"></span>
                                            {{ $user->status == 'Active' ? 'Active' : 'Inactive' }}
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="action-btn action-btn-view" title="View User">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="action-btn action-btn-edit" title="Edit User">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn action-btn-delete" title="Delete User">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="empty-state">
                                <div class="empty-state-content">
                                    <i class="fas fa-users-slash empty-state-icon"></i>
                                    <h4>No Users Found</h4>
                                    <p>Start by adding your first user</p>
                                    <a href="{{ route('admin.users.create') }}" class="btn-primary-custom btn-sm">
                                        <i class="fas fa-plus-circle"></i>
                                        Add User
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if(isset($users) && method_exists($users, 'links'))
            <div class="table-footer">
                <div class="table-info">
                    Showing {{ $users->firstItem() ?? 0 }} to {{ $users->lastItem() ?? 0 }} of {{ $users->total() ?? $users->count() }} entries
                </div>
                <div class="pagination-wrapper">
                    {{ $users->links() }}
                </div>
            </div>
        @elseif($users->count() > 0)
            <div class="table-footer">
                <div class="table-info">
                    Showing 1 to {{ $users->count() }} of {{ $users->count() }} entries
                </div>
            </div>
        @endif
    </div>
</div>

<!-- ============================================
    STYLES
    ============================================ -->
<style>
    /* ============================================
    USER MANAGEMENT
    ============================================ */
    .user-management {
        padding: 1.5rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ============================================
    PAGE HEADER
    ============================================ */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .page-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #ffffff;
        margin: 0;
    }

    .page-subtitle {
        color: #94a3b8;
        font-size: 0.9rem;
        margin: 0.25rem 0 0 0;
    }

    .page-actions {
        display: flex;
        gap: 0.75rem;
        align-items: center;
    }

    .btn-primary-custom {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.25rem;
        background: linear-gradient(135deg, #667eea, #764ba2);
        border: none;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        color: white;
    }

    .btn-primary-custom.btn-sm {
        padding: 0.4rem 1rem;
        font-size: 0.8rem;
    }

    /* ============================================
    STATS ROW
    ============================================ */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .stat-mini {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 12px;
        padding: 1rem 1.25rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: all 0.3s ease;
    }

    .stat-mini:hover {
        border-color: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
    }

    .stat-mini-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        flex-shrink: 0;
    }

    .stat-mini-icon-total {
        background: rgba(102, 126, 234, 0.1);
        color: #a78bfa;
    }
    .stat-mini-icon-active {
        background: rgba(52, 211, 153, 0.1);
        color: #34d399;
    }
    .stat-mini-icon-inactive {
        background: rgba(248, 113, 113, 0.1);
        color: #f87171;
    }
    .stat-mini-icon-role {
        background: rgba(251, 191, 36, 0.1);
        color: #fbbf24;
    }

    .stat-mini-number {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffffff;
        line-height: 1.2;
    }

    .stat-mini-label {
        color: #94a3b8;
        font-size: 0.8rem;
    }

    /* ============================================
    TABLE CONTAINER
    ============================================ */
    .table-container {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 1.5rem;
        overflow: hidden;
    }

    /* ============================================
    TABLE TOOLBAR
    ============================================ */
    .table-toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .table-toolbar-left {
        display: flex;
        gap: 1rem;
        align-items: center;
        flex-wrap: wrap;
    }

    .search-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .search-icon {
        position: absolute;
        left: 12px;
        color: #64748b;
        font-size: 0.85rem;
    }

    .search-input {
        padding: 0.5rem 0.75rem 0.5rem 2.5rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        color: #e2e8f0;
        font-size: 0.85rem;
        width: 250px;
        transition: all 0.3s ease;
        outline: none;
    }

    .search-input::placeholder {
        color: #64748b;
    }

    .search-input:focus {
        border-color: rgba(102, 126, 234, 0.3);
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.05);
    }

    .filter-wrapper {
        display: flex;
        gap: 0.5rem;
    }

    .filter-select {
        padding: 0.5rem 0.75rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        color: #e2e8f0;
        font-size: 0.85rem;
        outline: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-select:focus {
        border-color: rgba(102, 126, 234, 0.3);
    }

    .filter-select option {
        background: #1a1a2e;
    }

    .btn-export-custom {
        padding: 0.5rem 1rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        color: #94a3b8;
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-export-custom:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #ffffff;
    }

    /* ============================================
    TABLE
    ============================================ */
    .table-responsive {
        overflow-x: auto;
        margin: 0 -0.5rem;
        padding: 0 0.5rem;
    }

    .table-custom {
        width: 100%;
        border-collapse: collapse;
    }

    .table-custom thead {
        background: rgba(255, 255, 255, 0.02);
    }

    .table-custom th {
        padding: 0.75rem 1rem;
        text-align: left;
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #94a3b8;
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        white-space: nowrap;
    }

    .table-custom td {
        padding: 0.75rem 1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.04);
        color: #e2e8f0;
        vertical-align: middle;
    }

    .table-custom tbody tr {
        transition: all 0.3s ease;
    }

    .table-custom tbody tr:hover {
        background: rgba(255, 255, 255, 0.02);
    }

    .table-custom tbody tr:last-child td {
        border-bottom: none;
    }

    /* ============================================
    TABLE CELLS
    ============================================ */
    .card-badge {
        display: inline-block;
        padding: 0.2rem 0.6rem;
        background: rgba(102, 126, 234, 0.1);
        color: #a78bfa;
        border-radius: 4px;
        font-size: 0.75rem;
        font-weight: 600;
        font-family: monospace;
        letter-spacing: 0.5px;
    }

    .user-cell {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .user-avatar-img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgba(102, 126, 234, 0.2);
    }

    .user-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea, #764ba2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    .user-name {
        font-weight: 500;
        color: #ffffff;
        font-size: 0.9rem;
    }

    .user-id {
        font-size: 0.7rem;
        color: #64748b;
    }

    .email-link {
        color: #94a3b8;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.85rem;
        transition: color 0.3s ease;
    }

    .email-link:hover {
        color: #a78bfa;
    }

    .email-link i {
        font-size: 0.7rem;
    }

    .text-muted-soft {
        color: #64748b;
        font-size: 0.85rem;
    }

    /* ============================================
    ROLE BADGES
    ============================================ */
    .role-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .role-admin {
        background: rgba(102, 126, 234, 0.15);
        color: #a78bfa;
    }

    .role-doctor {
        background: rgba(59, 130, 246, 0.15);
        color: #60a5fa;
    }

    .role-patient {
        background: rgba(52, 211, 153, 0.15);
        color: #34d399;
    }

    .role-employee {
        background: rgba(248, 113, 113, 0.15);
        color: #f87171;
    }

    .role-default {
        background: rgba(255, 255, 255, 0.05);
        color: #94a3b8;
    }

    /* ============================================
    STATUS TOGGLE
    ============================================ */
    .status-form {
        display: inline-block;
    }

    .status-toggle {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.2rem 0.75rem;
        border: none;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .status-toggle .status-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        display: inline-block;
    }

    .status-active {
        background: rgba(52, 211, 153, 0.15);
        color: #34d399;
    }

    .status-active .status-dot {
        background: #34d399;
    }

    .status-active:hover {
        background: rgba(52, 211, 153, 0.25);
    }

    .status-inactive {
        background: rgba(248, 113, 113, 0.15);
        color: #f87171;
    }

    .status-inactive .status-dot {
        background: #f87171;
    }

    .status-inactive:hover {
        background: rgba(248, 113, 113, 0.25);
    }

    /* ============================================
    ACTION BUTTONS
    ============================================ */
    .action-buttons {
        display: flex;
        gap: 0.4rem;
        align-items: center;
    }

    .action-btn {
        width: 32px;
        height: 32px;
        border: none;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        background: transparent;
        color: #94a3b8;
    }

    .action-btn:hover {
        transform: translateY(-2px);
    }

    .action-btn-view {
        color: #60a5fa;
    }

    .action-btn-view:hover {
        background: rgba(59, 130, 246, 0.1);
        color: #60a5fa;
    }

    .action-btn-edit {
        color: #fbbf24;
    }

    .action-btn-edit:hover {
        background: rgba(251, 191, 36, 0.1);
        color: #fbbf24;
    }

    .action-btn-delete {
        color: #f87171;
    }

    .action-btn-delete:hover {
        background: rgba(248, 113, 113, 0.1);
        color: #f87171;
    }

    .delete-form {
        display: inline;
    }

    /* ============================================
    EMPTY STATE
    ============================================ */
    .empty-state {
        text-align: center;
        padding: 3rem 1rem !important;
    }

    .empty-state-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }

    .empty-state-icon {
        font-size: 3rem;
        color: #64748b;
        opacity: 0.5;
    }

    .empty-state-content h4 {
        color: #ffffff;
        margin: 0;
        font-weight: 600;
    }

    .empty-state-content p {
        color: #94a3b8;
        margin: 0;
        font-size: 0.9rem;
    }

    /* ============================================
    TABLE FOOTER
    ============================================ */
    .table-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        margin-top: 1rem;
        border-top: 1px solid rgba(255, 255, 255, 0.04);
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .table-info {
        color: #94a3b8;
        font-size: 0.85rem;
    }

    .pagination-wrapper {
        display: flex;
        gap: 0.25rem;
    }

    .pagination-wrapper .pagination {
        margin: 0;
    }

    .pagination-wrapper .page-link {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        color: #94a3b8;
        padding: 0.4rem 0.8rem;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }

    .pagination-wrapper .page-link:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #ffffff;
    }

    .pagination-wrapper .page-item.active .page-link {
        background: linear-gradient(135deg, #667eea, #764ba2);
        border-color: transparent;
        color: white;
    }

    .pagination-wrapper .page-item.disabled .page-link {
        opacity: 0.3;
    }

    /* ============================================
    RESPONSIVE
    ============================================ */
    @media (max-width: 992px) {
        .stats-row {
            grid-template-columns: repeat(2, 1fr);
        }

        .table-toolbar {
            flex-direction: column;
            align-items: stretch;
        }

        .table-toolbar-left {
            flex-direction: column;
            align-items: stretch;
        }

        .search-input {
            width: 100%;
        }

        .filter-wrapper {
            flex-wrap: wrap;
        }

        .filter-select {
            flex: 1;
            min-width: 120px;
        }
    }

    @media (max-width: 768px) {
        .user-management {
            padding: 1rem;
        }

        .page-header {
            flex-direction: column;
            align-items: stretch;
        }

        .page-actions {
            width: 100%;
        }

        .page-actions .btn-primary-custom {
            width: 100%;
            justify-content: center;
        }

        .stats-row {
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
        }

        .stat-mini {
            padding: 0.75rem 1rem;
        }

        .table-container {
            padding: 1rem;
        }

        .table-custom th,
        .table-custom td {
            padding: 0.5rem 0.75rem;
            font-size: 0.8rem;
        }

        .action-buttons {
            gap: 0.25rem;
        }

        .action-btn {
            width: 28px;
            height: 28px;
            font-size: 0.7rem;
        }

        .table-footer {
            flex-direction: column;
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .stats-row {
            grid-template-columns: 1fr;
        }

        .table-responsive {
            margin: 0 -0.75rem;
            padding: 0 0.75rem;
        }

        .user-cell {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.2rem;
        }

        .user-avatar-img,
        .user-avatar {
            width: 30px;
            height: 30px;
            font-size: 0.7rem;
        }

        .role-badge {
            font-size: 0.65rem;
            padding: 0.1rem 0.5rem;
        }

        .status-toggle {
            font-size: 0.65rem;
            padding: 0.1rem 0.5rem;
        }
    }
</style>

<!-- ============================================
    SCRIPTS
    ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== Search Functionality =====
        const searchInput = document.getElementById('tableSearch');
        const table = document.getElementById('userTable');
        const rows = table ? table.querySelectorAll('tbody tr') : [];

        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                });
            });
        }

        // ===== Role Filter =====
        const roleFilter = document.getElementById('roleFilter');
        if (roleFilter) {
            roleFilter.addEventListener('change', function() {
                const selectedRole = this.value.toLowerCase();
                rows.forEach(row => {
                    const roleCell = row.querySelector('td:nth-child(5)');
                    if (roleCell) {
                        const roleText = roleCell.textContent.trim().toLowerCase();
                        const match = !selectedRole || roleText.includes(selectedRole);
                        row.style.display = match ? '' : 'none';
                    }
                });
                // Re-apply search filter
                if (searchInput && searchInput.value) {
                    searchInput.dispatchEvent(new Event('keyup'));
                }
            });
        }

        // ===== Status Filter =====
        const statusFilter = document.getElementById('statusFilter');
        if (statusFilter) {
            statusFilter.addEventListener('change', function() {
                const selectedStatus = this.value.toLowerCase();
                rows.forEach(row => {
                    const statusCell = row.querySelector('td:nth-child(6)');
                    if (statusCell) {
                        const statusText = statusCell.textContent.trim().toLowerCase();
                        const match = !selectedStatus || statusText.includes(selectedStatus);
                        row.style.display = match ? '' : 'none';
                    }
                });
                // Re-apply search filter
                if (searchInput && searchInput.value) {
                    searchInput.dispatchEvent(new Event('keyup'));
                }
            });
        }

        // ===== Status Toggle Confirmation =====
        document.querySelectorAll('.status-toggle').forEach(button => {
            button.addEventListener('click', function(e) {
                const currentStatus = this.textContent.trim();
                const newStatus = currentStatus === 'Active' ? 'Inactive' : 'Active';
                if (!confirm(`Are you sure you want to change status to ${newStatus}?`)) {
                    e.preventDefault();
                }
            });
        });
    });

    // ===== Export Table =====
    function exportTable() {
        const table = document.getElementById('userTable');
        if (!table) return;

        let csv = [];
        const headers = [];
        table.querySelectorAll('thead th').forEach(th => {
            if (th.textContent.trim() !== 'Actions') {
                headers.push(th.textContent.trim());
            }
        });
        csv.push(headers.join(','));

        const rows = table.querySelectorAll('tbody tr');
        rows.forEach(row => {
            // Skip empty state rows
            if (row.classList.contains('empty-state')) return;

            const rowData = [];
            const cells = row.querySelectorAll('td');
            // Get data from each cell except actions column
            for (let i = 0; i < cells.length - 1; i++) {
                let cellText = cells[i].textContent.trim();
                // Clean up user cell
                if (i === 2) {
                    const nameDiv = cells[i].querySelector('.user-name');
                    if (nameDiv) cellText = nameDiv.textContent.trim();
                }
                // Clean up role cell
                if (i === 4) {
                    const roleSpan = cells[i].querySelector('.role-badge');
                    if (roleSpan) cellText = roleSpan.textContent.trim();
                }
                // Clean up status cell
                if (i === 5) {
                    const statusBtn = cells[i].querySelector('.status-toggle');
                    if (statusBtn) cellText = statusBtn.textContent.trim();
                }
                rowData.push(`"${cellText}"`);
            }
            csv.push(rowData.join(','));
        });

        const blob = new Blob([csv.join('\n')], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `users_${new Date().toISOString().slice(0,10)}.csv`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }
</script>
@endsection
