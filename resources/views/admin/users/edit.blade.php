@extends('layouts.app')

@section('title', 'Update User')

@section('content')
<div class="user-edit-container">
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Update User</h1>
            <p class="page-subtitle">Edit user information for <span class="highlight-text">{{ $user->name }}</span></p>
        </div>
        <div class="page-actions">
            <a href="{{ route('admin.users.index') }}" class="btn-secondary-custom">
                <i class="fas fa-arrow-left"></i>
                <span>Back to Users</span>
            </a>
        </div>
    </div>

    <!-- Edit Form -->
    <div class="edit-card">
        <div class="edit-card-header">
            <div class="user-avatar-large">
                {{ substr($user->name, 0, 1) }}
            </div>
            <div>
                <h3 class="edit-card-title">Edit User: {{ $user->name }}</h3>
                <p class="edit-card-subtitle">Update user details and permissions</p>
            </div>
        </div>

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <!-- Left Column -->
                <div class="form-column">
                    <!-- Card Number -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-id-card"></i>
                            Card Number
                        </label>
                        <input type="text" name="card_no" class="form-control" value="{{ $cardNo->card_no ?? '' }}" placeholder="Enter card number">
                        @error('card_no')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- User Name -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-user"></i>
                            User Name
                        </label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Enter full name">
                        @error('name')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-envelope"></i>
                            Email Address
                        </label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Enter email address">
                        @error('email')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Right Column -->
                <div class="form-column">
                    <!-- Role -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-user-tag"></i>
                            Role
                        </label>
                        <select name="roles" class="form-control" id="roles">
                            <option value="{{ $user->roles }}" selected>{{ $user->roles ?? 'Select Role' }}</option>
                            <option value="Admin">Admin</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Employee">Employee</option>
                            <option value="Patient">Patient</option>
                        </select>
                        @error('roles')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-circle"></i>
                            Status
                        </label>
                        <select name="status" class="form-control" id="status">
                            <option value="Active" {{ old('status', $user->status) == 'Active' ? 'selected' : '' }}>Active</option>
                            <option value="Inactive" {{ old('status', $user->status) == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Avatar Upload -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-image"></i>
                            Profile Avatar
                        </label>
                        <input type="file" name="avatar" class="form-control" accept="image/*">
                        @if($user->avatar)
                            <div class="avatar-preview">
                                <img src="{{ Storage::url('public/avatars/' . $user->avatar) }}" alt="Current Avatar" class="avatar-preview-img">
                                <span class="avatar-preview-label">Current Avatar</span>
                            </div>
                        @endif
                        @error('avatar')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="form-actions">
                <button type="submit" class="btn-primary-custom">
                    <i class="fas fa-save"></i>
                    <span>Update User</span>
                </button>
                <a href="{{ route('admin.users.index') }}" class="btn-secondary-custom">
                    <i class="fas fa-times"></i>
                    <span>Cancel</span>
                </a>
            </div>
        </form>
    </div>
</div>

<!-- ============================================
    STYLES
    ============================================ -->
<style>
    /* ============================================
    USER EDIT CONTAINER
    ============================================ */
    .user-edit-container {
        padding: 1.5rem;
        max-width: 1000px;
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

    .highlight-text {
        color: #a78bfa;
        font-weight: 500;
    }

    .page-actions {
        display: flex;
        gap: 0.75rem;
        align-items: center;
    }

    /* ============================================
    BUTTONS
    ============================================ */
    .btn-primary-custom {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.5rem;
        background: linear-gradient(135deg, #667eea, #764ba2);
        border: none;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        cursor: pointer;
        font-family: inherit;
    }

    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        color: white;
    }

    .btn-secondary-custom {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.5rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        color: #94a3b8;
        font-weight: 500;
        font-size: 0.85rem;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
        font-family: inherit;
    }

    .btn-secondary-custom:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #ffffff;
    }

    /* ============================================
    EDIT CARD
    ============================================ */
    .edit-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 2rem;
    }

    .edit-card-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding-bottom: 1.5rem;
        margin-bottom: 2rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.04);
    }

    .user-avatar-large {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea, #764ba2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .edit-card-title {
        color: #ffffff;
        font-size: 1.25rem;
        font-weight: 600;
        margin: 0;
    }

    .edit-card-subtitle {
        color: #94a3b8;
        font-size: 0.85rem;
        margin: 0.1rem 0 0 0;
    }

    /* ============================================
    FORM
    ============================================ */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }

    .form-column {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.4rem;
    }

    .form-label {
        color: #e2e8f0;
        font-size: 0.85rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .form-label i {
        color: #64748b;
        font-size: 0.9rem;
        width: 18px;
    }

    .form-hint {
        color: #64748b;
        font-size: 0.7rem;
        font-weight: 400;
        margin-left: auto;
    }

    .form-control {
        padding: 0.6rem 0.75rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        color: #e2e8f0;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        outline: none;
        width: 100%;
        font-family: inherit;
    }

    .form-control:focus {
        border-color: rgba(102, 126, 234, 0.3);
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.05);
        background: rgba(255, 255, 255, 0.06);
    }

    .form-control::placeholder {
        color: #64748b;
    }

    .form-control option {
        background: #1a1a2e;
        color: #e2e8f0;
    }

    .form-control[type="file"] {
        padding: 0.4rem 0.75rem;
        background: transparent;
    }

    .form-control[type="file"]::-webkit-file-upload-button {
        padding: 0.4rem 1rem;
        background: rgba(102, 126, 234, 0.1);
        border: 1px solid rgba(102, 126, 234, 0.1);
        border-radius: 4px;
        color: #a78bfa;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .form-control[type="file"]::-webkit-file-upload-button:hover {
        background: rgba(102, 126, 234, 0.2);
    }

    .form-error {
        color: #f87171;
        font-size: 0.75rem;
        margin-top: 0.2rem;
    }

    /* ============================================
    AVATAR PREVIEW
    ============================================ */
    .avatar-preview {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-top: 0.5rem;
        padding: 0.5rem 0.75rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.04);
    }

    .avatar-preview-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    .avatar-preview-label {
        color: #94a3b8;
        font-size: 0.75rem;
    }

    /* ============================================
    USER INFO DISPLAY
    ============================================ */
    .user-info-display {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.04);
        border-radius: 8px;
        padding: 1rem;
        margin-top: 0.5rem;
    }

    .info-item {
        display: flex;
        justify-content: space-between;
        padding: 0.4rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.02);
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-label {
        color: #94a3b8;
        font-size: 0.8rem;
    }

    .info-value {
        color: #e2e8f0;
        font-size: 0.85rem;
        font-weight: 500;
    }

    /* ============================================
    FORM ACTIONS
    ============================================ */
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid rgba(255, 255, 255, 0.04);
    }

    .form-actions .btn-primary-custom,
    .form-actions .btn-secondary-custom {
        padding: 0.7rem 2rem;
        font-size: 0.9rem;
    }

    /* ============================================
    RESPONSIVE
    ============================================ */
    @media (max-width: 992px) {
        .form-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .user-edit-container {
            padding: 1rem;
        }

        .page-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .page-actions {
            width: 100%;
        }

        .page-actions .btn-secondary-custom {
            width: 100%;
            justify-content: center;
        }

        .edit-card {
            padding: 1.5rem;
        }

        .edit-card-header {
            flex-direction: column;
            text-align: center;
        }

        .form-actions {
            flex-direction: column;
        }

        .form-actions .btn-primary-custom,
        .form-actions .btn-secondary-custom {
            width: 100%;
            justify-content: center;
        }

        .user-avatar-large {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
    }

    @media (max-width: 480px) {
        .edit-card {
            padding: 1rem;
        }

        .edit-card-title {
            font-size: 1.1rem;
        }

        .form-label {
            font-size: 0.8rem;
        }

        .form-control {
            font-size: 0.85rem;
            padding: 0.5rem 0.6rem;
        }

        .user-info-display {
            padding: 0.75rem;
        }

        .avatar-preview-img {
            width: 32px;
            height: 32px;
        }
    }

    /* ============================================
    DARK MODE COMPATIBILITY
    ============================================ */
    @media (prefers-color-scheme: light) {
        .edit-card {
            background: rgba(255, 255, 255, 0.03);
        }
    }
</style>

<!-- ============================================
    SCRIPTS
    ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== Form Validation =====
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const name = this.querySelector('input[name="name"]');
                const email = this.querySelector('input[name="email"]');

                if (name && !name.value.trim()) {
                    e.preventDefault();
                    name.focus();
                    name.style.borderColor = '#f87171';
                    setTimeout(() => {
                        name.style.borderColor = '';
                    }, 3000);
                    return;
                }

                if (email && !email.value.trim()) {
                    e.preventDefault();
                    email.focus();
                    email.style.borderColor = '#f87171';
                    setTimeout(() => {
                        email.style.borderColor = '';
                    }, 3000);
                    return;
                }

                if (email && !email.value.includes('@')) {
                    e.preventDefault();
                    email.focus();
                    email.style.borderColor = '#f87171';
                    setTimeout(() => {
                        email.style.borderColor = '';
                    }, 3000);
                    return;
                }
            });
        }
    });
</script>
@endsection
