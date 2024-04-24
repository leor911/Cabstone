<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\house;
use App\Models\property;
use App\Models\construction;
use App\Models\houseLocation;
use App\Models\interior;
use App\Models\house_images;

use App\Models\hdp_data;
use App\Models\variable_data;


use Illuminate\Support\Facades\DB;

class CreatePropertyController extends Controller
{
    function createProperty(Request $request)
    {
        $variableData = array(
            'property_type' => $request->input("property_type"),
            'text' => $request->input("text"),
        );

        $hdpData = array(
            'zpid' => $request->input("zpid"),
            'street_address' => $request->input("address_street"),
            'zipcode' => $request->input("address_zipcode"),
            'city' => $request->input("address_city"),
            'state' => $request->input("address_state"),
            'latitude' => $request->input("latitude"),
            'longitude' => $request->input("longitude"),
            'price' => $request->input("price"),
            'bathrooms' => $request->input("baths"),
            'bedrooms' => $request->input("beds"),
        );

        // Create a new Property entry
        $property = array(
            'zpid' => $request->input("zpid"),
            'raw_home_status_cd' => $request->input("raw_home_status_cd"),
            'marketing_status_simplified_cd' => $request->input("marketing_status_simplified_cd"),
            'img_src' => $request->input("img_src"),
            'has_image' => $request->input("has_image"),
            'detail_url' => $request->input("detail_url"),
            'status_type' => $request->input("status_type"),
            'status_text' => $request->input("status_text"),
            'country_currency' => $request->input("country_currency"),
            'price' => $request->input("price"),
            'unformatted_price' => $request->input("unformatted_price"),
            'address' => $request->input("address"),
            'address_street' => $request->input("address_street"),
            'address_city' => $request->input("address_city"),
            'address_state' => $request->input("address_state"),
            'address_zipcode' => $request->input("address_zipcode"),
            'is_undisclosed_address' => $request->input("is_undisclosed_address"),
            'beds' => $request->input("beds"),
            'baths' => $request->input("baths"),
            'area' => $request->input("area"),
            'latitude' => $request->input("latitude"),
            'longitude' => $request->input("longitude"),
            'is_zillow_owned' => $request->input("is_zillow_owned"),
        );

        // Create a new HouseLocation entry
        $houseLocation = array(
            'city' => $request->input("address_city"),
            'state' => $request->input("address_state"),
            'zipcode' => $request->input("address_zipcode"),
        );

        $newVariableData = variable_data::create($variableData);
        $newVariableDataId = $newVariableData->id;

        $newHdpData = hdp_data::create($hdpData);
        $newHdpDataId = $newHdpData ->id;

        $newProperty = property::create(array_merge($property, ["variable_data_id" => $newVariableDataId], ["hdp_data_id" => $newHdpDataId]));
        $newPropertyId = $newProperty ->id;

        houseLocation::create(array_merge(["property_id" => $newPropertyId], $houseLocation));

        return redirect()->back();

    }
}
