<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\house;
use App\Models\property;
use App\Models\construction;
use App\Models\houseLocation;
use App\Models\interior;

use Illuminate\Support\Facades\DB;

class CreatePropertyController extends Controller
{
    function createProperty(Request $request)
    {

        $house = array(
            "price" => $request->input("price"),
            "listingType" => $request->input("listingType"),
            "description" => $request->input("description"),
            "coordinateLatitude" => $request->input("coordinateLatitude"),
            "coordinateLongitude" => $request->input("coordinateLongitude"),
            "otherDesc" => $request->input("otherDesc")
        );
    
        $property = array(
            "prknSpacesNo" => $request->input("prknSpacesNo"),
            "garageSpacesNo" => $request->input("garageSpacesNo"),
            "prknSize" => $request->input("prknSize"),
            "acreSize" => $request->input("acreSize"),
            "squareFeet" => $request->input("squareFeet"),
            "otherDesc" => $request->input("otherDesc")
        );
    
        $construction = array(
            "homeType" => $request->input("homeType"),
            "archType" => $request->input("archType"),
            "constMaterials" => $request->input("constMaterials"),
            "roof" => $request->input("roof"),
            "builtYear" => $request->input("builtYear"),
            "squareFeet" => $request->input("squareFeet"),
            "otherDesc" => $request->input("otherDesc")
        );
    
        $location = array(
            "country" => $request->input("country"),
            "state" => $request->input("state"),
            "county" => $request->input("county"),
            "city" => $request->input("city"),
            "zip" => $request->input("zip"),
            "region" => $request->input("region"),
            "street" => $request->input("street"),
            "apptNo" => $request->input("apptNo")
        );
    
        $interior = array(
            "bedroomNo" => $request->input("bedroomNo"),
            "bathNo" => $request->input("bathNo"),
            "kitchenNo" => $request->input("kitchenNo"),
            "heatingDesc" => $request->input("heatingDesc"),
            "basementDesc" => $request->input("basementDesc"),
            "applianceDesc" => $request->input("applianceDesc"),
            "floorsNo" => $request->input("floorsNo"),
            "floorType" => $request->input("floorType"),
            "coolingDesc" => $request->input("coolingDesc"),
            "otherDesc" => $request->input("otherDesc")
        );
    
        $newHouse = House::create($house);
        $newHouseId = $newHouse->id;
    
        Property::create(array_merge($property, ["houseID" => $newHouseId]));
        Construction::create(array_merge($construction, ["houseID" => $newHouseId]));
        HouseLocation::create(array_merge($location, ["houseID" => $newHouseId]));
        Interior::create(array_merge($interior, ["houseID" => $newHouseId]));
    
        return redirect()->back();
    }
}
