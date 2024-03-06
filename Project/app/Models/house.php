<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = [
        'houseID',
        'realtor_id',
        'price',
        'listingType',
        'description',
        'coordinateLatitude',
        'coordinateLongitude',
        'otherDesc',
    ];
}
