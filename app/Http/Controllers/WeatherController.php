<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
        public function index(Request $request) {
            
            $city = $request->input('city');
            $url = ('https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&APPID=ff88c07d9d573269f8bd1b5ce7931661');
            $client = new \GuzzleHttp\Client();
            $array = $client->get($url);
            $books = $array->getBody()->getContents();
            $data = json_decode($books,true);
            return view('weather.weather')
                    ->withData($data);   
    }
}
