<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }


    public function auth()
    {
        $user = Auth::user();
        if ($user) {
            // Get the roles associated with the user
            $roles = $user->role_name;
    
            // Check if the user has a specific role by role name
            $roleNameToCheck = "customer"; // Role name to check
            $hasRole = $roles->contains('name', $roleNameToCheck);
    
            if ($hasRole) {
                // User has the role with the specified name
                // Perform actions accordingly
                return response()->json(['message' => 'Action successful'], 200);
            } else {
                // User does not have the role with the specified name
                return response()->json(['error' => 'Unauthorized'], 403);
            }
        } else {
            // User is not authenticated
            return response()->json(['error' => 'Unauthenticated'], 401);
        }
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $url = RouteServiceProvider::HOME;

        $request->authenticate();

        $request->session()->regenerate();
        
        if(Auth::user()->role_name = 'realtor'){
            $url = '/realtorDashboard';
        }
        
        return redirect()->intended($url);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
