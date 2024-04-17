<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hdp_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'zpid',
        'street_address',
        'zipcode',
        'city',
        'state',
        'latitude',
        'longitude',
        'price',
        'bathrooms',
        'bedrooms',
    ];
}
