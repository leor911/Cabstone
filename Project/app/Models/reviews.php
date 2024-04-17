<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'professional_id',
        'review_excerpt',
        'review_excerpt_date',
        'review_link',
        'num_total_reviews',
        'review_stars_rating',
    ];
}
