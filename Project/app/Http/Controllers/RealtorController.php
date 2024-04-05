<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Realtors;

class RealtorController extends Controller
{
    public function getRealtors(){
        return DB::table('users')->where('role_name', '=', 'realtor')->get();
    }

    public function viewRealtors(){
        $realtors = $this->getRealtors();
        return view("realtor", ['realtors' => $realtors]);
    }

    public function viewRealtorByURL(string $url){
        $realtor = DB::table('users')
        ->join('realtors', 'users.id', '=', 'realtors.realtor_id')
        ->whereRaw("concat(firstName, ' ', lastName) LIKE ?", ['%'.$url.'%'])
        ->get();
        return view('realtorDashboard', ['realtor' => $realtor]);
    }


    public function uploadProfileImage(Request $request){
        $image = $request->file('image');
        $imageContent = file_get_contents($image->path());
        $imageContentBinary = '0x'. bin2hex($imageContent);
        DB::table('realtors')->where('id', Auth::user()->id)->updateOrInsert(['profile_image' => $imageContentBinary]);
        return redirect()->back();
    }
}
