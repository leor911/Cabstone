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
        // Create a new Variable Data entry
        $variableData = array(
            'property_type' => $request->input("property_type"),
            'text' => $request->input("text"),
        );

        //Set zpid to one more than the max zpid of the database
        $maxZpidResult = DB::select("SELECT MAX(zpid) AS max_zpid FROM properties");
        $maxZpid = $maxZpidResult[0]->max_zpid;
        $maxZpid = $maxZpid+1;

        $isZillowOwned = 0;
        $isUndisclosedAddress = 0;

        // Create a new HDP Data entry
        $hdpData = array(
            'zpid' => $maxZpid,
            'street_address' => $request->input("address_street"),
            'zipcode' => $request->input("address_zipcode"),
            'city' => $request->input("address_city"),
            'state' => $request->input("address_state"),
            'price' => $request->input("price"),
            'bathrooms' => $request->input("baths"),
            'bedrooms' => $request->input("beds"),
        );

        // Create a new Property entry
        $property = array(
            'zpid' => $maxZpid,
            'raw_home_status_cd' => $request->input("marketing_status_simplified_cd"),
            'marketing_status_simplified_cd' => $request->input("marketing_status_simplified_cd"),
            'img_src' => $request->input("img_src"),
            $img_src = $request->input("img_src"),
            $has_image = empty($img_src) ? 0 : 1,
            'has_image' => $has_image,
            'detail_url' => $request->input("img_src"),
            'status_type' => $request->input("status_type"),
            'status_text' => $request->input("marketing_status_simplified_cd"),
            'country_currency' => $request->input("country_currency"),
            'price' => $request->input("price"),
            'unformatted_price' => $request->input("price"),
            'address_street' => $request->input("address_street"),
            'address_city' => $request->input("address_city"),
            'address_state' => $request->input("address_state"),
            'address_zipcode' => $request->input("address_zipcode"),
            $addressStreet = $request->input("address_street"),
            $addressCity = $request->input("address_city"),
            $addressState = $request->input("address_state"),
            $addressZipcode = $request->input("address_zipcode"),
            $completeAddress = $addressStreet . ', ' . $addressCity . ', ' . $addressState . ' ' . $addressZipcode,
            'address' => $completeAddress,
            'is_undisclosed_address' => $isUndisclosedAddress,
            'beds' => $request->input("beds"),
            'baths' => $request->input("baths"),
            'area' => $request->input("area"),
            'is_zillow_owned' => $isZillowOwned,
        );

        // Create a new HouseLocation entry
        $houseLocation = array(
            'city' => $request->input("address_city"),
            'state' => $request->input("address_state"),
            'zipcode' => $request->input("address_zipcode"),
        );

        // Add entries to the database
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
