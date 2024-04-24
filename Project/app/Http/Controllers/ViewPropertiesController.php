<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MapController;
use Illuminate\Http\Request;
use App\Models\house;
use App\Models\property;
use App\Models\construction;
use App\Models\houseLocation;
use App\Models\interior;

use App\Models\hdp_data;

use Illuminate\Support\Facades\DB;

class ViewPropertiesController extends Controller
{
    public function getHouses(){
        return DB::table('houses')->get();
    }
    function viewProperties(){
        $listings = DB::select("
        SELECT h.id, h.zpid, h.street_address, h.zipcode, h.city, h.state, h.latitude, h.longitude, h.price, h.bathrooms, h.bedrooms,
        p.zpid, p.raw_home_status_cd, p.marketing_status_simplified_cd, p.img_src, p.has_image, p.detail_url, p.status_type, p.status_text, p.country_currency, p.price, p.unformatted_price, p.address, p.address_street, p.address_city, p.address_state, p.address_zipcode, p.is_undisclosed_address, p.beds, p.baths, p.area, p.latitude, p.longitude, p.is_zillow_owned, p.variable_data_id, p.hdp_data_id,
        l.property_id, l.city, l.state, l.zipcode
        FROM hdp_datas h 
        JOIN properties p ON p.id=h.id 
        JOIN house_Locations l ON l.id=h.id 
    ");
        $houses = $this->getHouses();
    
        return view('/propertyList', ["listings"=>$listings], ['houses' => $houses]);
        }

        function viewPropertiesIndex(){
            $listings = DB::select("
                SELECT h.id, h.zpid, h.street_address, h.zipcode, h.city, h.state, h.latitude, h.longitude, h.price, h.bathrooms, h.bedrooms,
                p.zpid, p.raw_home_status_cd, p.marketing_status_simplified_cd, p.img_src, p.has_image, p.detail_url, p.status_type, p.status_text, p.country_currency, p.price, p.unformatted_price, p.address, p.address_street, p.address_city, p.address_state, p.address_zipcode, p.is_undisclosed_address, p.beds, p.baths, p.area, p.latitude, p.longitude, p.is_zillow_owned, p.variable_data_id, p.hdp_data_id,
                l.property_id, l.city, l.state, l.zipcode
                FROM hdp_datas h 
                JOIN properties p ON p.id=h.id 
                JOIN house_Locations l ON l.id=h.id 
            ");
            
            return view('index', ["listings" => $listings]);
        }
}
