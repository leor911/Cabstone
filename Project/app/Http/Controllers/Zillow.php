<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;



class Zillow extends Controller
{


    public function fetchAgentDetails(Request $request)
{
    try {
        // Get the search query from the request
        $searchName = $request->input('search_name');
        $searchLocation = "Lancaster,Pa";
        
        // Check if both name and location are provided
        if (!$searchName && !$searchLocation) {
            // Optionally, you can return an error view or message here
            return view('realtor');
        }

        // Initialize an array to store details for each agent
        $agents = [];
        
        // Send a request to the API for each name
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'zillow-com-api.p.rapidapi.com',
            'X-RapidAPI-Key' => 'd032dccbcdmsh374b7346c92649dp13eab2jsn13995c938c86'
        ])->get("https://zillow-com-api.p.rapidapi.com/find_agent", [
            'page' => 1,
            'location' => $searchLocation,
            'name' => $searchName
        ]);
            
        // Check if the response is successful and decode the JSON data
        if ($response->successful()) {
            $data = $response->json();
            
            // Check if the response contains the expected 'data' key
            if (isset($data['data']['professionals'])) {
                // Add agent details to the agents array
                foreach ($data['data']['professionals'] as $agent) {
                    $agents[] = [
                        'name' => $agent['fullName'],
                        'businessName' => $agent['businessName'] ,
                        'location' => $agent['location'],
                        'phoneNumber' => $agent['phoneNumber'] ,
                        'profileLink' => $agent['profileLink'] ,
                        'reviews' => $agent['reviews'],
                        'reviewStarsRating' => $agent['reviewStarsRating'] ,
                        'profilePhotoSrc' => $agent['profilePhotoSrc'] ?? 'https://www.zillowstatic.com/static/images/nophoto_h_g.png'
                    ];
                }
            }
        }

        // Redirect to the same route without the search parameters
        return redirect()->route('realtor')->with('agents', $agents);
    } catch (\Exception $e) {
        // Log the error for debugging
        logger()->error('Error fetching agent details: ' . $e->getMessage());
        // Optionally, you can return an error view
        return view('realtor');
    }
}








    public function getPropertyDetails()
{
    // Make the API request using Laravel's HTTP client
    $response = Http::withHeaders([
        'X-RapidAPI-Host' => 'zillow-com-api.p.rapidapi.com',
        'X-RapidAPI-Key' => 'd032dccbcdmsh374b7346c92649dp13eab2jsn13995c938c86'
    ])->get('https://zillow-com-api.p.rapidapi.com/search_property', [
        'region_ids' => 836082,
        'currentPage' => 1
    ]);

    // Check if the request was successful
    if ($response->successful()) {
        // Decode the JSON response
        $data = $response->json();

        // Initialize properties as null
        $properties = null;

        // Check if the response contains data
        if (isset($data['data']['results']) && is_array($data['data']['results'])) {
            $properties = $data['data']['results'];

            // Loop through each property listing to fetch image URLs
            foreach ($properties as &$listing) {
                // Fetch image URLs for the current listing
                $listing['imageUrls'] = $this->getImageUrlsForListing($listing['carouselPhotos']);
            }
        }

        // Pass the property data to the view
        if ($properties !== null && is_array($properties)) {
            $propertyCount = count($properties);
        } else {
            $propertyCount = 0;
        }

        return view('propertyList', ['properties' => $properties, 'propertyCount' => $propertyCount]);
    } else {
        // Error handling for unsuccessful API request
        return view('propertyList', ['properties' => [], 'propertyCount' => 0]);
    }
}


    
    

    public function getImageUrlsForListing($carouselPhotos)
    {
        // Initialize an array to store image URLs
        $imageUrls = [];
    
        // Iterate over each photo in the carouselPhotos array
        foreach ($carouselPhotos as $photo) {
            // Add the URL to the imageUrls array
            $imageUrls[] = $photo['url'];
        }
    
        // Return the array of image URLs
        return $imageUrls;
    }

    public function searchProperty()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://zillow-com-api.p.rapidapi.com/search_property?region_ids=54047&currentPage=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: zillow-com-api.p.rapidapi.com",
                "X-RapidAPI-Key: d032dccbcdmsh374b7346c92649dp13eab2jsn13995c938c86"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function findAgent()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'zillow-com-api.p.rapidapi.com',
            'X-RapidAPI-Key' => 'd032dccbcdmsh374b7346c92649dp13eab2jsn13995c938c86'
        ])->get('https://zillow-com-api.p.rapidapi.com/find_agent', [
            'page' => 1,
            'location' => 'Lancaster, PA',
            'name' => 'Paul'
        ]);
    
        if ($response->successful()) {
            $data = $response->json();
            $professionals = isset($data['data']['professionals']) ? $data['data']['professionals'] : [];
            return $this->fetchAgentDetails($professionals);
        } else {
            return view('test', ['agents' => []]);
        }
    }
    
    
    

    


    public function autocompleteLocation()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://zillow-com-api.p.rapidapi.com/autocomplete_location?query=NC",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: zillow-com-api.p.rapidapi.com",
                "X-RapidAPI-Key: d032dccbcdmsh374b7346c92649dp13eab2jsn13995c938c86"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
}
