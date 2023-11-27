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
     * @var string[]
     */
    protected $guarded = [
        'id',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class,'user_id','id');
    }
    
    public function patient()
    {
        return $this->hasOne(Patient::class,'user_id','id');
    }

    // public function roles()
    // {
    //     return $this->hasOne(Roles::class);
    // }

    public function card()
    {
        return $this->hasOne(Card::class,'created_by');
    }

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class,'role_user');
    // }

    public function isDoctor()
    {
        return $this->role_id === 3;
    }

    public function isPatient()
    {
        return $this->role_id === 4;
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class,'patient_id');
    }


    protected static function boot()
    {
        parent::boot();
    
        static::created(function ($user) {
            if($user->roles == "Employee"){
                $employee = new Employee();
                $employee->user_id = $user->id;
                $employee->name = $user->name;
                $employee->save();   
            }
            if($user->roles == "Patient"){
                $patient = new Patient();
                $patient->user_id = $user->id;
                $patient->name = $user->name;
                $patient->save();
            }
            
            if($user->roles == "Doctor"){
                $doctor = new Doctor();
                $doctor->user_id = $user->id;
                $doctor->name = $user->name;
                $doctor->save();
            }
                $cardNo = 'RHC' . str_pad($user->id, 6, '0', STR_PAD_LEFT);
                $card = new Card();
                $card->card_no = $cardNo;
                $card->category = 'Bronze';
                $card->created_by = $user->id;
                $card->save();
        });
    }
}
