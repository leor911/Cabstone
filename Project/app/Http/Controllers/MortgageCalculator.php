<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MortgageCalculator extends Controller
{
    public function showCalculator()
    {
        return view('mortgageCalc');
    }

    public function calculate(Request $request)
    {
        // Retrieve input values from the form
        $principal = $request->input('principal');
        $interest_rate = $request->input('interest_rate');
        $term = $request->input('term');
        $hoa = $request->input('hoa', 0); // Default value if not provided
        $home_insurance = $request->input('home_insurance', 0); // Default value if not provided
    
        // Make the API call to fetch mortgage calculation data
        $curl = curl_init();
    
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://mortgage-calculator-by-api-ninjas.p.rapidapi.com/v1/mortgagecalculator?interest_rate={$interest_rate}&loan_amount={$principal}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: mortgage-calculator-by-api-ninjas.p.rapidapi.com",
                "X-RapidAPI-Key: d032dccbcdmsh374b7346c92649dp13eab2jsn13995c938c86"
            ],
        ]);
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
    
        if ($err) {
            $data = []; // If there's an error, initialize data as an empty array
        } else {
            $data = json_decode($response, true);
    
            // Assign HOA fee and home insurance to the data array
            $data['monthly_payment']['hoa'] = $hoa;
            $data['monthly_payment']['home_insurance'] = $home_insurance;
        }
    
        // Pass the data to the view
        return view('mortgageCalc', ['data' => $data]);
    }
    
    
}
