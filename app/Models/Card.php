<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'name',
        'description',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    protected $appends = [
        'is_active',
    ];
    public function appointments()
    {
        return $this->hasMany(Appointment::class,'card_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class,'user_id');
    }

}
