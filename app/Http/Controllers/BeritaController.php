<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class BeritaController extends Controller
{
    public function getData()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/berita');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data = json_decode($body, true);

        return view('berita', ['Data' => $Data]);
    }

    public function show(Request $request, $id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/berita/' . $id);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();


        $Data = json_decode($body, true);

        return view('vberita', ['Data' => $Data]);
    }

    public function getDatah()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/beritaa');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data = json_decode($body, true);

        return view('home', ['Data' => $Data]);
    }

    public function getArticle(Request $request)
    {
        $client = new Client();
        $response = Http::asForm()->post('http://172.20.4.32:3000/article', [
            'title' => $request->title,
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Data = json_decode($body, true);
        $Icon = json_decode($body, true);
        // dd($Data);

        return view('berita', ['Logo' => $Logo, 'Data' => $Data, 'Icon' => $Icon, 'title' => 'Artikel']);
    }
}
