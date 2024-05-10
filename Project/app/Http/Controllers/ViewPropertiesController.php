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

        public function displayAgents(Request $request)
        {
            // Retrieve the search query from the request
            $query = $request->input('query');
        
            // If there's a search query, filter agents based on it
            if ($query) {
                $agents = DB::table('professionals')
                            ->where('full_name', 'like', "%$query%")
                            ->orWhere('business_name', 'like', "%$query%")
                            ->orWhere('phone_number', 'like', "%$query%")
                            ->paginate(10);
            } else {
                // Otherwise, retrieve all agents and paginate them
                $agents = DB::table('professionals')->paginate(10);
            }
        
            // Pass the agent data to the Blade view
            return view('realtor', compact('agents'));
        }



        
}
    
