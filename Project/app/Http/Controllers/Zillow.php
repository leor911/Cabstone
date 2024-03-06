<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Zillow extends Controller
{
    public function getPropertyDetails()
    {
        // Array of Zillow property IDs
        $zpidArray = ['80469169', 'property_zpid_2', 'property_zpid_3']; 
        $properties = [];

        foreach ($zpidArray as $zpid) {
            // Make API request to fetch property details
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => 'd032dccbcdmsh374b7346c92649dp13eab2jsn13995c938c86',
                'X-RapidAPI-Host' => 'zillow-com-api.p.rapidapi.com',
            ])->get('https://zillow-com-api.p.rapidapi.com/property_details', [
                'zpid' => $zpid,
                'url' => 'https://www.zillow.com/homedetails/' . $zpid . '_zpid/',
            ]);

            // Extract the JSON data from the response
            $responseData = $response->json();

            // Dump the JSON response for debugging
            dump($responseData);

            // Check if the request was successful and if data exists in the response
            if ($response->successful() && isset($responseData['data'])) {
                // Add property data to the properties array
                $properties[] = $responseData['data']; 
            }
        }

        // Dump the final properties array for debugging
        dump($properties);

        // Pass the properties array to the view
        return view('test5', compact('properties'));
    }
}