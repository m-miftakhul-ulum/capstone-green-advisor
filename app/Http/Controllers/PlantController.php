<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlantController extends Controller
{
    public function plants(Request $request)
    {
        $long = $request->query('long');
        $lat = $request->query('lat');


        $respon = Http::get('https://maps.googleapis.com/maps/api/elevation/json?locations=' . $long . '%2C110.8617517&key=AIzaSyBslqwnpRKvNpBr2aJSCVxheG7W9xrlsl4');
        $data = $respon['results'][0]['elevation'];

        return response($data);
    }
}
