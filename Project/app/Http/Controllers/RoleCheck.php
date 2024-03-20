<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoleCheck extends Controller
{
    public function realatorCheck(User $user)
    {
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // Check if the user is a realtor
            if ($this->isRealtor($user)) { // Call isRealtor() method with authenticated user
                // User is a realtor, allow access
                // Your logic here
            } else {
                // User is not a realtor, deny access
                return redirect()->url('/')->with('error', 'Access denied. You must be a realtor to access this page.');
            }
        } else {
            // User is not authenticated, redirect to login page
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }
    }
}
