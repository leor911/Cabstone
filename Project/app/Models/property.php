<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'zpid',
        'raw_home_status_cd',
        'marketing_status_simplified_cd',
        'img_src',
        'has_image',
        'detail_url',
        'status_type',
        'status_text',
        'country_currency',
        'price',
        'unformatted_price',
        'address',
        'address_street',
        'address_city',
        'address_state',
        'address_zipcode',
        'is_undisclosed_address',
        'beds',
        'baths',
        'area',
        'latitude',
        'longitude',
        'is_zillow_owned',
        'variable_data_id',
        'hdp_data_id',
    ];
}
