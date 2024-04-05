<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;



class Zillow extends Controller
{
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
    
            // Check if the response contains data
            if (isset($data['data']['results']) && is_array($data['data']['results'])) {
                $properties = $data['data']['results'];
    
                // Loop through each property listing to fetch image URLs
                foreach ($properties as &$listing) {
                    // Fetch image URLs for the current listing
                    $listing['imageUrls'] = $this->getImageUrlsForListing($listing['carouselPhotos']);
                }
    
                // Pass the property data to the view
                return view('propertyList', ['properties' => $properties]);
            } else {
                // No property data found
                return view('propertyList', ['properties' => []]);
            }
        } else {
            // Error handling for unsuccessful API request
            return view('propertyList', ['properties' => []]);
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
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://zillow-com-api.p.rapidapi.com/find_agent?page=1&location=Charlotte%2C%20NC&name=Paul",
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

    public function fetchAgentDetails()
    {
        // Array of realtor usernames
       
        // Fetch details for agents with the provided usernames
        $agents = $this->agentDetails();

        // You can do further processing or return the data as needed
       
    }

    public function agentDetails()
    {
        $usernames = ['Paul','tony'];

        // Initialize an array to store details for each realtor
        $agents = [];

        // Loop through each username to fetch details
        foreach ($usernames as $username) {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://zillow-com-api.p.rapidapi.com/agent_details?username=$username",
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
                // Handle error
                echo "cURL Error #:" . $err;
            } else {
                // Decode the response and add to the agents array
                $agent = json_decode($response, true);
                $agents[] = $agent;
            }
        }

        return view('test', compact('agents'));
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
