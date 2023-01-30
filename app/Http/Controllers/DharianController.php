<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DharianController extends Controller
{
    public function getData()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/dharian');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data = json_decode($body, true);

        return view('doaharian', ['Data' => $Data, 'title' => 'Doa Harian']);
    }

    public function show(Request $request, $id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/dharian/' . $id);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();


        $Data = json_decode($body, true);

        return view('dharians', ['Data' => $Data]);
    }
}
