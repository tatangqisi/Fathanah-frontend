<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class DiaryController extends Controller
{
    public function Diary(Request $request)
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $user = session()->get('sid');
            $response = $client->request('GET', 'http://172.20.4.32:3000/sign/' . $user . '/diary');
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            $Logo = json_decode($body, true);
            $Icon = json_decode($body, true);
            $Data = json_decode($body, true);

            return view('mydiarymain', [
                'Logo' => $Logo,
                'Icon' => $Icon,
                'Data' => $Data,
                'title' => 'MyDiary'
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function vdiarya()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/logo-icon');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);

        return view('mydiaryinput', [
            'Logo' => $Logo,
            'Icon' => $Icon,
            'title' => 'MyDiary'
        ]);
    }
    public function Diaryadd(Request $request)
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $user = session()->get('sid');
            $response = Http::asForm()->post('http://172.20.4.32:3000/sign/' . $user . '/diary/create', [
                'subject' => $request->subject,
                'body' => $request->body,
            ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            return redirect('mydiary');
        }
    }

    public function updiary(Request $request)
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $id = session()->get('sid');
            $response = $client->request('GET', 'http://172.20.4.32:3000/sign/' . $id . '/diary/' . $request->no);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            $Logo = json_decode($body, true);
            $Icon = json_decode($body, true);
            $Data = json_decode($body, true);

            return view('mydiaryview', [
                'Logo' => $Logo,
                'Icon' => $Icon,
                'Data' => $Data,
                'title' => 'MyDiary'
            ]);
        }
    }

    public function update(Request $request)
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $id = session()->get('sid');
            $response = Http::asForm()->post('http://172.20.4.32:3000/sign/' . $id . '/diary/' . $request->no . '/update', [
                'subject' => $request->subject,
                'body' => $request->body,
            ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            return redirect('mydiary');
        }
    }

    public function delete(Request $request)
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $id = session()->get('sid');
            $response = Http::asForm()->post('http://172.20.4.32:3000/sign/' . $id . '/diary/' . $request->no . '/delete');
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            return redirect('mydiary');
        }
    }
}
