<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Patient extends Authenticatable
{
    use HasFactory,HasApiTokens, Notifiable;

    protected $table = 'patients';

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'card_no' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function doctors()
    {
        return $this->hasMany(Doctor::class,'doctor_id');
    }

    public function card()
    {
        return $this->belongsTo(Card::class,'id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class,'patient_id');
    }


    protected static function boot()
    {
        parent::boot();
    
        static::created(function ($patient) {
                $cardNo = 'RHC' . str_pad($patient->id, 6, '0', STR_PAD_LEFT);
                // $this->card()->create(['card_no' => $cardNo]);

                $card = new Card();
                $card->card_no = $cardNo;
                $card->created_by = $patient->id;
                $card->save();

        });
    }
}
