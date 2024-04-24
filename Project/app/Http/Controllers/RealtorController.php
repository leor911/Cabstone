<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Realtors;

class RealtorController extends Controller
{
    public function getRealtors(){
        return DB::table('users')
        ->join('realtors', 'users.id', 'realtors.realtor_id')
        ->where('role_name', '=', 'realtor')->get();
    }

    public function viewRealtors(){
        $realtors = $this->getRealtors();
        return view("realtor", ['realtors' => $realtors]);
    }
    public function viewEditRealtor(string $name){
        $realtor = DB::table('users')
        ->join('realtors', 'users.id', 'realtors.realtor_id')
        ->whereRaw("concat(users.firstName, users.lastName) LIKE ?", $name)
        ->first();
        return view('realtorEditor', ['realtor' => $realtor]);
    }

    // WIP, will update realtor data based on what values are passed while logged in
    public function editConfirm(Request $request){
        DB::table('realtors')
        ->where('realtor_id', Auth::id())
        ->update([
            'city' => $request->updateCity,
            'specialty' => $request->updateSpecialty,
            'available_days' => $request->updateDays,
            'available_hours' => $request->updateHours,
            'available_days' => $request->updateDays,
            'contact_agent' => $request->updateAgent
        ]);
    }

    public function viewRealtorByURL(string $name){
        $realtor = DB::table('users')
            ->join('realtors', 'users.id', 'realtors.realtor_id')
            ->whereRaw("concat(users.firstName, users.lastName) LIKE ?", $name)
            ->first();
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
