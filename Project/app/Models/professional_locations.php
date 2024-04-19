<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professional_locations extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'professional_id',
        'location',
    ];
}
