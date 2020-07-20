<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function getAllFruits()
    {
        return response()->json([
            "fruit" => ["Apple","Orange","Banana"]
        ], 201);
    
    }
}
