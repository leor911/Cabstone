<?php

namespace App\Models;

use App\Models\roles;

use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'firstName',
        'lastName',
        'role_name',
        'email',
        'phoneNo',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isRealtor()
    {
        return $this->role_name === 'realtor';
    }

    public static function check2()
    {
        return Auth::check();
    }
    // Get user data
    
    public function retrieveData(){
        return [Auth::user()->firstName, Auth::user()->role_name];

    }
}


