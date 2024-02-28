<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class realtors extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $guard = 'realtors';

    protected $fillable = [
        'realtorID',
        'firstName',
        'lastName',
        'email',
        'password',
        'phoneNo'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
