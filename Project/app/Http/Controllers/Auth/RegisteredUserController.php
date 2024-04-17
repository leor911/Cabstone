<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Realtors;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'role_name' => ['required', 'not_in:pickSomething'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNo' => ['required', 'int', 'digits:10'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'role_name' => $request->role_name,
            'email' => $request->email,
            'phoneNo' => $request->phoneNo,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        if($user->role_name === 'realtor'){
            Realtors::create([
                'realtor_id' => $user->id
            ]);
        }
        
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
