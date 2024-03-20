<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use App\Models\User;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // If the user is authenticated, you can proceed with further checks
            // For example, check if the user has a specific role
            if (!User::check2()) {
                // If the user is not logged in, redirect to the index page with an error message
                return redirect()->route('index')->with('error', 'You must be logged in to access this page.');
            }
        } else {
            // If the user is not authenticated, redirect to the index page with an error message
            // return redirect()->route('index')->with('error', 'Access denied. You must be a realtor to access this page.');
        }
    
        // If the user passes the authentication check, proceed to the next middleware or route handler
        return $next($request);
    }
}
