<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class TaskController extends Controller
{
    //

    public function Task1()
    {
        $data = ["fruit" => ["Cherries","Apricots"]];

        $response = Http::get('http://localhost/api/fruits');

        return view('tasks/task1',['data' => $response->json()]);
    }
}
