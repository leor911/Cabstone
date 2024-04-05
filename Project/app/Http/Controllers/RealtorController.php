<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealtorController extends Controller
{
    public function getRealtors(){
        return DB::table('users')->where('role_name', '=', 'realtor')->get();
    }

    public function viewRealtors(){
        $realtors = $this->getRealtors();
        return view("realtor", ['realtors' => $realtors]);
    }

    public function viewRealtorDashboard(){
        return view("realtorDashboard");
    }

}
