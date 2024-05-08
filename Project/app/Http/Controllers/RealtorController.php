<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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

    public function viewEditRealtor(){
        $realtor = DB::table('users')
        ->join('realtors', 'users.id', 'realtors.realtor_id')
        ->where('realtor_id', '=', Auth::id())
        ->first();
        return view('realtorEditor', ['realtor' => $realtor]);
    }

    // WIP, will update realtor data based on what values are passed while logged in
    public function editConfirm(Request $request){
        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        if($request->file('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = public_path('img');
            $file->move($path, $filename);

            $profilePath = 'img/' . $filename;
        }else{
            $profilePath = null;
        }

        DB::table('realtors')
        ->where('realtor_id', Auth::id())
        ->update([
            'city' => $request->updateCity,
            'specialty' => $request->updateSpecialty,
            'available_days' => $request->updateDays,
            'available_hours' => $request->updateHours,
            'available_days' => $request->updateDays,
            'contact_agent' => $request->updateAgent,
            'profile_image' => $profilePath
        ]);
        return redirect()->route('/realtorDashboard');
    }

    public function viewHomePage(){
        $realtor = DB::table('users')
            ->join('realtors', 'users.id', 'realtors.realtor_id')
            ->where('realtor_id', '=', Auth::id())
            ->first();
        return view('realtorDashboard', ['realtor' => $realtor]);
    }
}