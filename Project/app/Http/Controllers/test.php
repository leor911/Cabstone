<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class test extends Controller
{

    public function show() {
        $data = DB::select("SELECT * FROM test"); 
        return view('test', ['data' => $data]);    }
  
}




