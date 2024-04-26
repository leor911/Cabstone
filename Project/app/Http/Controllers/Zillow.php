<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Professionals;



class Zillow extends Controller

{
    public function insertAgentDetials($responseData)
{
    try {
        $data = json_decode($responseData, true);

        if (isset($data['data']['professionals']) && is_array($data['data']['professionals'])) {
            foreach ($data['data']['professionals'] as $professional) {
                DB::table('professionals')->insert([
                    'encoded_zuid' => $professional['encodedZuid'],
                    'full_name' => $professional['fullName'],
                    'business_name' => $professional['businessName'],
                    'phone_number' => $professional['phoneNumber'],
                    'profile_link' => $professional['profileLink'],
                    'reviews' => $professional['reviews'],
                    'profile_photo_src' => $professional['profilePhotoSrc'],
                    'is_top_agent' => $professional['isTopAgent']
                ]);
            }
            return true;
        } else {
            return false;
        }
    } catch (\Exception $e) {
        logger()->error('Error storing data to database: ' . $e->getMessage());
        return false;
    }
}



public function fetchAgentDetails(Request $request)
{
    try {
        // Get the search query from the request
        $searchName = "Zach";
        $searchLocation = "Lancaster,Pa";
        
        // Check if both name and location are provided
        if (!$searchName && !$searchLocation) {
            // Optionally, you can return an error view or message here
            return view('realtor');
        }

        // Fetch agent details from the API
        $agents = $this->fetchAgentDetailsFromAPI($searchName, $searchLocation);
        
        // Store the fetched agent details
        $this->storeAgentDetails($agents);

        // Optionally, you can return a view with success message
        return view('test5')->with('success', 'Agent details successfully fetched and stored.');
    } catch (\Exception $e) {
        // Log the error for debugging
        logger()->error('Error fetching and storing agent details: ' . $e->getMessage());
        // Optionally, you can return an error view
        return view('realtor')->with('error', 'Failed to fetch and store agent details.');
    }
}

private function fetchAgentDetailsFromAPI($searchName, $searchLocation)
{
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
    
    return $agents;
}



private function storeAgentDetails($agents)
{
    try {
        foreach ($agents as $agent) {
            // Store agent details in the database using Eloquent
            Professionals::create($agent);
        }
    } catch (\Exception $e) {
        // Log the error for debugging
        logger()->error('Error storing agent details: ' . $e->getMessage());
        // Optionally, throw the exception to be caught by the calling method
        throw $e;
    }
}


// public function fetchDataFromAPI()
// {
//     try {
//         // Make the API request using Laravel's HTTP client
//         $response = Http::withHeaders([
//             'X-RapidAPI-Host' => 'zillow-com-api.p.rapidapi.com',
//             'X-RapidAPI-Key' => 'd032dccbcdmsh374b7346c92649dp13eab2jsn13995c938c86'
//         ])->get('https://zillow-com-api.p.rapidapi.com/search_property', [
//             'region_ids' => 54047,
//             'currentPage' => 1
//         ]);

//         // Check if the request was successful
//         if ($response->successful()) {
//             // Decode the JSON response
//             $data = $response->json();

//             // Call the storeDataToDatabase function to store the fetched data
//             $this->storeDataToDatabase($data);

//             // Redirect to the test5 blade page
//             return redirect()->route('test5')->with('success', 'Property details successfully inserted into the database.');
//         } else {
//             // Redirect to the test5 blade page with an error message
//             return redirect()->route('realtor')->with('error', 'Failed to fetch property data from the API.');
//         }
//     } catch (\Exception $e) {
//         // Log the error for debugging
//         logger()->error('Error fetching and storing property data: ' . $e->getMessage());
//         // Redirect to the test5 blade page with an error message
//         return redirect()->route('realtor')->with('error', 'An error occurred while fetching and storing property data.');
//     }
// }


// public function storeDataToDatabase($data)
// {
//     try {
//         // Check if the data is valid
//         if ($data && isset($data['data']['results']) && is_array($data['data']['results'])) {
//             // Loop through each property listing to insert into the database
//             foreach ($data['data']['results'] as $listing) {
//                 // Insert raw property data into the properties table
//                 $propertyId = DB::table('properties')->insertGetId([
//                     'raw_data' => json_encode($listing) // Store the raw data as JSON
//                     // Add other fields as needed
//                 ]);

//                 // Insert location details into the locations table
//                 DB::table('house_locations')->insert([
//                     'property_id' => $propertyId,
//                     'city' => $listing['addressCity'],
//                     'state' => $listing['addressState'],
//                     'zipcode' => $listing['addressZipcode']
//                     // Add other location fields as needed
//                 ]);
//             }
//             // Return true to indicate successful insertion
//             return true;
//         } else {
//             // Return false if the data is invalid
//             return false;
//         }
//     } catch (\Exception $e) {
//         // Log the error for debugging
//         logger()->error('Error storing property data to database: ' . $e->getMessage());
//         // Return false or throw an exception
//         return false;
//     }
// }



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
