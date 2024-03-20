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
            "garageType" => $request->input("garageType"),
            "lotType" => $request->input("lotType"),
            "lotMaterials" => $request->input("lotMaterials"),
            "extensionType" => $request->input("extensionType"),
            "prknSize" => $request->input("prknSize"),
            "acreSize" => $request->input("acreSize"),
            "squareFeet" => $request->input("squareFeet"),
            "otherDesc" => $request->input("otherDesc")
        );
    
        $construction = array(
            "homeType" => $request->input("homeType"),
            "archType" => $request->input("archType"),
            "foundationType" => $request->input("foundationType"),
            "constMaterials" => $request->input("constMaterials"),
            "roof" => $request->input("roof"),
            "builtYear" => $request->input("builtYear"),
            "remodelYear" => $request->input("remodelYear"),
            "squareFeet" => $request->input("squareFeet"),
            "newConstruction" => $request->input("newConstruction"),
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
            "apptNo" => $request->input("apptNo"),
            "zoning" => $request->input("zoning"),
            "subdivision" => $request->input("subdivision")
        );
    
        $interior = array(
            "bedroomNo" => $request->input("bedroomNo"),
            "mainBedNo" => $request->input("mainBedNo"),
            "fullBathNo" => $request->input("fullBathNo"),
            "halfBedNo" => $request->input("halfBedNo"),
            "bathNo" => $request->input("bathNo"),
            "kitchenNo" => $request->input("kitchenNo"),
            "stoveType" => $request->input("stoveType"),
            "laundryType" => $request->input("laundryType"),
            "electricType" => $request->input("electricType"),
            "sewerType" => $request->input("sewerType"),
            "waterType" => $request->input("waterType"),
            "utilitiesType" => $request->input("utilitiesType"),
            "heatingDesc" => $request->input("heatingDesc"),
            "basementDesc" => $request->input("basementDesc"),
            "applianceDesc" => $request->input("applianceDesc"),
            "floorsNo" => $request->input("floorsNo"),
            "floorType" => $request->input("floorType"),
            "coolingDesc" => $request->input("coolingDesc"),
            "otherDesc" => $request->input("otherDesc")
        );

        // $image = array(
        //     // "image" => $request->file("image")
        //     "image" => $request->input("otherDesc")
        // );
    
        $newHouse = House::create($house);
        $newHouseId = $newHouse->id;
    
        Property::create(array_merge($property, ["houseID" => $newHouseId]));
        Construction::create(array_merge($construction, ["houseID" => $newHouseId]));
        HouseLocation::create(array_merge($location, ["houseID" => $newHouseId]));
        Interior::create(array_merge($interior, ["houseID" => $newHouseId]));
        // House_Images::create(array_merge($image, ["houseID" => $newHouseId]));
        
    
        return redirect()->back();
    }
}
