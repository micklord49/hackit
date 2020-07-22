<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //

    public function getAllFruits()
    {
        return response()->json([
            "fruit" => ["Apple","Orange","Banana"]
        ], 201);
    
    }

    public function GetAddresses($postcode)
    {
        $response = Http::get('https://ndws9fa08d.execute-api.eu-west-2.amazonaws.com/development/',[
            "PostCode" => $postcode
        ]);

        return $response->body();

    }
}
