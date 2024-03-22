<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    protected $fillable = [
        'houseID',
        'prknSpacesNo',
        'garageSpacesNo',
        'garageType',
        'lotType',
        'lotMaterials',
        'extensionType',
        'prknSize',
        'acreSize',
        'squareFeet',
        'otherDesc',
    ];
}
