<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TaskController extends Controller
{
    //

    public function Task1()
    {
        $response = Http::get('http://localhost/api/fruits');
        return view('tasks/task1',['data' => $response->json()]);
    }

    public function GetAddress()
    {
        return view('tasks/getaddress');
    }

    public function GetForPostCode(Request $request)    
    {
        $postcode = $request->input('postcode');


        $response = Http::get('http://localhost/api/addresses/' . $postcode,['x-api-key' => 'Zoh950zERc2OsMRnW57wP2QBEDpnogIUaq9Lbpnq']);
        return view('tasks/addresses',['data' => $response]);
    }
}
