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
        //Arrays that take in specifics inputs 
        $house=array(
            "realtorID"=>$request->input("realtorID"),
            "price"=>$request->input("price"),
            "listingType"=>$request->input("listingType"),
            "description"=>$request->input("description"),
            "coordinateLatitude"=>$request->input("coordinateLatitude"),
            "coordinateLongitude"=>$request->input("coordinateLongitude"),
            "otherDesc"=>$request->input("otherDesc")
        );

        $property=array(
            "houseID"=>$request->input("houseID"),
            "prknSpacesNo"=>$request->input("prknSpacesNo"),
            "garageSpacesNo"=>$request->input("garageSpacesNo"),
            "prknSize"=>$request->input("prknSize"),
            "acreSize"=>$request->input("acreSize"),
            "squareFeet"=>$request->input("squareFeet"),
            "otherDesc"=>$request->input("otherDesc")
        );

        $construction=array(
            "houseID"=>$request->input("houseID"),
            "homeType"=>$request->input("homeType"),
            "archType"=>$request->input("archType"),
            "constMaterials"=>$request->input("constMaterials"),
            "roof"=>$request->input("roof"),
            "builtYear"=>$request->input("builtYear"),
            "squareFeet"=>$request->input("squareFeet"),
            "otherDesc"=>$request->input("otherDesc")
        );

        $location=array(
            "houseID"=>$request->input("houseID"),
            "country"=>$request->input("country"),
            "state"=>$request->input("state"),
            "county"=>$request->input("county"),
            "city"=>$request->input("city"),
            "zip"=>$request->input("zip"),
            "region"=>$request->input("region"),
            "street"=>$request->input("street"),
            "apptNo"=>$request->input("apptNo")
        );

        $interior=array(
            "houseID"=>$request->input("houseID"),
            "bedroomNo"=>$request->input("bedroomNo"),
            "bathNo"=>$request->input("bathNo"),
            "kitchenNo"=>$request->input("kitchenNo"),
            "heatingDesc"=>$request->input("heatingDesc"),
            "basementDesc"=>$request->input("basementDesc"),
            "applianceDesc"=>$request->input("applianceDesc"),
            "floorsNo"=>$request->input("floorsNo"),
            "floorType"=>$request->input("floorType"),
            "coolingDesc"=>$request->input("coolingDesc"),
            "otherDesc"=>$request->input("otherDesc")
        );

        House::create($house);
        Property::create($property);
        Construction::create($construction);
        HouseLocation::create($location);
        Interior::create($interior);
        return redirect()->back();
    }
}
