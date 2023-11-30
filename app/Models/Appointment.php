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

    public function card()
    {
        return $this->belongsTo(Card::class,'patient_id');
    }

    public function pUser()
    {
        return $this->belongsTo(User::class,'patient_id','id');
    }

    public function dUser()
    {
        return $this->belongsTo(User::class,'doctor_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'patient_id','id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class,'user_id');
    }
    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class,'patient_id');
    }

}
