<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AshusnaController extends Controller
{
    public function getData()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/ashusna');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data = json_decode($body, true);
        // $test = base64_decode(strval($Data1["data"]));
        // $Data1 = json_decode($test, true);
        // dd($test);

        return view('ashusna', ['Data' => $Data]);
    }

    // public function Test(){
    //     $client = new Client();
    //     $response = $client->request('GET','http://172.20.4.32:3000/Test');
    //     $statusCode = $response->getStatusCode();
    //     $body = $response->getBody()->getContents();

    //     $Data = json_decode($body, true);

    //     return view('home', ['Data'=>$Data]);
    // }
}
