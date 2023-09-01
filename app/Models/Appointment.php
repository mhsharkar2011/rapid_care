<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Appointment extends Model
{
    // use HasFactory,HasRoles;

    protected $guarded = [
        'id'
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class,'user_id');
    // }

    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

}
