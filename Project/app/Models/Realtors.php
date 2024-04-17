<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realtors extends Model
{
    use HasFactory;
    protected $fillable = [
        'realtor_id',
        'city',
        'specialty',
        'available_days',
        'available_hours',
        'contact_agent',
        'profile_image',
    ];
}
