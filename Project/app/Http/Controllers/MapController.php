<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function getHouses(){
        return DB::table('houses')->get();
    }
    public function mapView(){
        $houses = $this->getHouses();
        return view('map', ['houses' => $houses]);
    }
}
