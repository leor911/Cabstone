<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request){
        $user = $request->user();

        if(Auth::check($user)){
            echo "Success!!!";
        }

    }
}
