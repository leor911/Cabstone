<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professionals extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'encoded_zuid',
        'full_name',
        'business_name',
        'phone_number',
        'profile_link',
        'profile_photo_src',
        'is_top_agent',
    ];
}
