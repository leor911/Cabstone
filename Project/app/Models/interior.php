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
        'mainBedNo',
        'fullBathNo',
        'halfBedNo',
        'bathNo',
        'mainBathNo',
        'kitchenNo',
        'kitchenType',
        'stoveType',
        'laundryType',
        'electricType',
        'sewerType',
        'waterType',
        'utilitiesType',
        'heatingDesc',
        'basementDesc',
        'applianceDesc',
        'floorsNo',
        'floorType',
        'coolingDesc',
        'otherDesc',
    ];
}
