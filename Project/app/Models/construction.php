<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class construction extends Model
{
    use HasFactory;
    protected $fillable = [
        'houseID',
        'homeType',
        'archType',
        'foundationType',
        'constMaterials',
        'roof',
        'builtYear',
        'remodelYear',
        'otherDesc',
        'newConstruction',
    ];
}
