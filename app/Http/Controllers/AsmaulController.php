<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AsmaulController extends Controller
{
    public function asmaul()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/ashusna');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();


        $Data = json_decode($body, true);
        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);


        return view('asmaulhusna', ['Data' => $Data, 'Logo' => $Logo, 'Icon' => $Icon, 'title' => 'Asmaul Husna']);
    }
}
