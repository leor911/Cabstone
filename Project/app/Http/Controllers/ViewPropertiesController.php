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
    function viewProperties() {
        $properties = DB::table('properties')
        ->join('house_locations', 'properties.id', '=', 'house_locations.property_id')
        ->join('variable_datas', 'properties.variable_data_id', '=', 'variable_datas.id')
        ->select(
            'properties.id', 
            'properties.raw_home_status_cd',
            'properties.marketing_status_simplified_cd',
            'properties.img_src',
            'properties.status_type',
            'properties.status_text',
            'properties.price',
            'properties.address',
            'properties.address_street',
            'properties.beds',
            'properties.baths',
            'properties.area',
            'properties.latitude',
            'properties.longitude',
            'properties.is_zillow_owned',
            'properties.variable_data_id',
            'properties.hdp_data_id',
            'house_locations.city',
            'house_locations.state',
            'house_locations.zipcode',
            'variable_datas.property_type',
            'properties.detail_url' 
        )
        ->get();
    
    
        return view('propertyList', compact('properties'));
    }
    
        function viewPropertiesIndex() {
            $properties = DB::table('properties')
            ->join('house_locations', 'properties.id', '=', 'house_locations.property_id')
            ->join('variable_datas', 'properties.variable_data_id', '=', 'variable_datas.id')
            ->select(
                'properties.id', 
                'properties.raw_home_status_cd',
                'properties.marketing_status_simplified_cd',
                'properties.img_src',
                'properties.status_type',
                'properties.status_text',
                'properties.price',
                'properties.address',
                'properties.address_street',
                'properties.beds',
                'properties.baths',
                'properties.area',
                'properties.latitude',
                'properties.longitude',
                'properties.is_zillow_owned',
                'properties.variable_data_id',
                'properties.hdp_data_id',
                'house_locations.city',
                'house_locations.state',
                'house_locations.zipcode',
                'variable_datas.property_type',
                'properties.detail_url'
            )
            ->get();
        
        
            return view('index', compact('properties'));
        }

        public function displayAgents()
        {
            // Retrieve agent data from the database and paginate it
            $agents = DB::table('professionals')
                        ->select('full_name', 'business_name', 'phone_number', 'profile_link', 'profile_photo_src', 'is_top_agent')
                        ->paginate(10); // Show 10 agents per page
        
            // Pass the paginated agent data to the Blade view
            return view('realtor', compact('agents'));
        }


        
}
    
