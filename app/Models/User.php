<?php

namespace App\Models;

use App\Enums\Roles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'role',
        'role_id',
        'phone',
        'address',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    /**
     * Check if user is an admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        // Check both is_admin flag and role column
        return $this->is_admin == true || $this->role === 'admin';
    }

    /**
     * Check if user is a doctor.
     *
     * @return bool
     */
    public function isDoctor()
    {
        return $this->role === 'doctor' || $this->role_id === 3;
    }

    /**
     * Check if user is a patient.
     *
     * @return bool
     */
    public function isPatient()
    {
        return $this->role === 'patient' || $this->role_id === 4;
    }

    /**
     * Check if user is an employee.
     *
     * @return bool
     */
    public function isEmployee()
    {
        return $this->role === 'employee' || $this->role_id === 2;
    }

    /**
     * Check if user has a specific role.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Scope a query to only include admin users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAdmins($query)
    {
        return $query->where('is_admin', true)->orWhere('role', 'admin');
    }

    /**
     * Scope a query to only include users with a specific role.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $role
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithRole($query, $role)
    {
        return $query->where('role', $role);
    }

    // ============================================
    // RELATIONSHIPS
    // ============================================

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'user_id', 'id');
    }

    public function patient()
    {
        return $this->hasOne(Patient::class, 'user_id', 'id');
    }

    public function card()
    {
        return $this->hasOne(Card::class, 'created_by');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * Get the role name as string.
     *
     * @return string
     */
    public function getRoleNameAttribute()
    {
        $roles = [
            1 => 'Admin',
            2 => 'Employee',
            3 => 'Doctor',
            4 => 'Patient',
        ];

        return $roles[$this->role_id] ?? 'User';
    }

    // ============================================
    // BOOT METHOD
    // ============================================

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            // Create related records based on role
            if ($user->role == "Employee" || $user->role_id == 2) {
                $employee = new Employee();
                $employee->user_id = $user->id;
                $employee->name = $user->name;
                $employee->save();
            }

            if ($user->role == "Patient" || $user->role_id == 4) {
                $patient = new Patient();
                $patient->user_id = $user->id;
                $patient->name = $user->name;
                $patient->save();
            }

            if ($user->role == "Doctor" || $user->role_id == 3) {
                $doctor = new Doctor();
                $doctor->user_id = $user->id;
                $doctor->name = $user->name;
                $doctor->save();
            }

            // Create card for every user
            $cardNo = 'RHC' . str_pad($user->id, 6, '0', STR_PAD_LEFT);
            $card = new Card();
            $card->card_no = $cardNo;
            $card->category = 'Bronze';
            $card->created_by = $user->id;
            $card->save();
        });
    }
}
