<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Autocontroling extends Controller
{
    public function vlogin()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/logo-icon');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);

        return view('layout.login', [
            'Logo' => $Logo,
            'Icon' => $Icon,
            'title' => 'Login'
        ]);
    }

    public function vregis()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/logo-icon');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);

        return view('layout.register', [
            'Logo' => $Logo,
            'Icon' => $Icon,
            'title' => 'Register'
        ]);
    }

    // public function me()
    // {
    //     $client = new Client();
    //     if (session()->get('ssid') == TRUE) {
    //         $id = session()->get('sid');
    //         $response = $client->request('GET', 'http://172.20.4.32:3000/sign/' . $id);
    //         $statusCode = $response->getStatusCode();
    //         $body = $response->getBody()->getContents();

    //         $Data = json_decode($body, true);

    //         return view('me', ['Data' => $Data]);
    //     }
    // }

    public function home()
    {
        if (session()->get('ssid') == TRUE) {
            return view('home', [
                'title' => 'Beranda'
            ]);
        } else {
            return redirect('login', [
                'title' => 'Login/Register'
            ]);
        }
    }

    public function homeData()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/home');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data1 = json_decode($body, true);
        $Data2 = json_decode($body, true);
        $Data3 = json_decode($body, true);
        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);

        return view('home', ['Data1' => $Data1, 'Data2' => $Data2, 'Data3' => $Data3, 'Logo' => $Logo, 'Icon' => $Icon, 'title' => 'Beranda']);
    }

    public function about_us()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/about');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data1 = json_decode($body, true);
        $Data2 = json_decode($body, true);
        $Data3 = json_decode($body, true);
        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);
        // dd($Data1);
        // $test = base64_decode(strval($Data1["data"]));
        // $Data1 = json_decode($test, true);
        // dd($test);

        return view('about', ['Data1' => $Data1, 'Data2' => $Data2, 'Data3' => $Data3, 'Logo' => $Logo, 'Icon' => $Icon, 'title' => 'Tentang Kami']);
    }

    public function logout()
    {
        session()->flush();
        return redirect('home');
    }

    public function vdoas()
    {
        return view('doa-doa', [
            'title' => 'Doa-Doa'
        ]);
    }

    public function vdiary()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/logo-icon');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);

        return view('mydiarymain', [
            'Logo' => $Logo,
            'Icon' => $Icon,
            'title' => 'MyDiary'
        ]);
    }

    public function vdiaryinput()
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
            'title' => 'Tulis Diary'
        ]);
    }

    public function vdiaryview()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/logo-icon');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);

        return view('mydiaryview', [
            'Logo' => $Logo,
            'Icon' => $Icon,
            'title' => 'MyDiary'
        ]);
    }

    public function vkalkulator()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/logo-icon');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Icon = json_decode($body, true);

        return view('kalkulator', [
            'Logo' => $Logo,
            'Icon' => $Icon,
            'title' => 'Kalkulator Zakat'
        ]);
    }

    public function vkidz()
    {
        return view('muslimkidz.muslimkidz', [
            'title' => 'Muslim Kidz'
        ]);
    }

    public function vkisaht()
    {
        return view('muslimkidz.kisahteladan', [
            'title' => 'Kisah Teladan'
        ]);
    }

    public function rim()
    {
        return view('muslimkidz.rukuniman', [
            'title' => 'Rukun Iman'
        ]);
    }

    public function ris()
    {
        return view('muslimkidz.rukunislam', [
            'title' => 'Rukun Islam'
        ]);
    }

    public function getArticle()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/article');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Data = json_decode($body, true);
        $Icon = json_decode($body, true);

        return view('berita', ['Logo' => $Logo, 'Data' => $Data, 'Icon' => $Icon, 'title' => 'Artikel']);
    }


    public function showArticle(Request $request, $id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/article/' . $id);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Logo = json_decode($body, true);
        $Data = json_decode($body, true);
        $Data2 = json_decode($body, true);
        $Icon = json_decode($body, true);
        // dd($Data);

        return view('berita-berita', ['Logo' => $Logo, 'Data' => $Data, 'Data2' => $Data2, 'Icon' => $Icon, 'title' => 'Berita']);
    }

    public function pfp()
    {
        return view('pilihfoto', [
            'title' => 'Pilih Foto Profil'
        ]);
    }

    public function getDatah()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/beritaa');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data = json_decode($body, true);

        return view('muslimkidz.kisahteladan', ['Data' => $Data, 'title' => 'Kisah Teladan']);
    }

    public function contentkisah(Request $request, $id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/berita/' . $id);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();


        $Data = json_decode($body, true);

        return view('muslimkidz.kisahteladan-content', ['Data' => $Data, 'title' => 'judul']);
    }

    // public function contentkisah()
    // {
    //     $client = new Client();
    //     $response = $client->request('GET', 'http://172.20.4.32:3000/beritaa');
    //     $statusCode = $response->getStatusCode();
    //     $body = $response->getBody()->getContents();

    //     $Data = json_decode($body, true);

    //     return view('muslimkidz.kisahteladan-content', ['Data' => $Data, 'title' => 'judul']);
    // }

    public function Icon()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/icon');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Icon = json_decode($body, true);

        return view('index', ['Icon' => $Icon]);
    }
}
