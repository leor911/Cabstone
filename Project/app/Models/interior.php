<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interior extends Model
{
    use HasFactory;
    protected $fillable = [
        'houseID',
        'bedroomNo',
        'bathNo',
        'kitchenNo',
        'heatingDesc',
        'basementDesc',
        'applianceDesc',
        'floorsNo',
        'floorsType',
        'coolingDesc',
        'otherDesc',
    ];
}
