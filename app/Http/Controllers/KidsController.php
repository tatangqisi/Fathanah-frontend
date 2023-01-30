<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class KidsController extends Controller
{
    public function getData()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/kids');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data = json_decode($body, true);

        return view('kids', ['Data' => $Data]);
    }

    public function show(Request $request, $id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/kids/' . $id);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();


        $Data = json_decode($body, true);

        return view('vkids', ['Data' => $Data]);
    }

    // public function getDatah(){
    //     $client = new Client();
    //     $response = $client->request('GET','http://172.20.4.32:3000/beritaa');
    //     $statusCode = $response->getStatusCode();
    //     $body = $response->getBody()->getContents();

    //     $Data = json_decode($body, true);

    //     return view('home', ['Data'=>$Data]);
    // }
}
