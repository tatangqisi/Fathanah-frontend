<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
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
    public function Regis(Request $request)
    {
        $client = new Client();
        $response = Http::asForm()->post('http://172.20.4.32:3000/register', [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'passwordconfirm' => $request->passwordconfirm,
            'pp' => $request->pp,
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        return redirect('login');
    }

    public function getImg()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://172.20.4.32:3000/Img');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data = json_decode($body, true);

        return view('img', ['Data' => $Data]);
    }

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
    public function Login(Request $request)
    {
        $response = Http::asForm()->post('http://172.20.4.32:3000/login', [
            'username' => $request->username,
            'password' => $request->password,
        ]);
        $statusCode = $response->getStatusCode();
        $body = json_decode($response->getBody()->getContents());
        $message = $body->Message;
        if ($message == "SUCCESS") {
            $id = $body->id;
            session()->put('sid', $id);
            session()->put('ssid', TRUE);
            return redirect('beranda');
        } else {
            return redirect('login');
        }
    }

    public function me()
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $id = session()->get('sid');
            $response = $client->request('GET', 'http://172.20.4.32:3000/sign/' . $id);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            $Data = json_decode($body, true);

            return view('auth/me', ['Data' => $Data]);
        } else {
            return redirect('auth/login');
        }
    }

    public function updateuser()
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $id = session()->get('sid');

            $response = $client->request('GET', 'http://172.20.4.32:3000/sign/' . $id);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            $Data = json_decode($body, true);

            return view('auth/updateuser', ['Data' => $Data]);
        }
    }

    // public function update(Request $request){
    //     $client = new Client();
    //     if (session()->get('ssid')==TRUE){
    //         $id = session()->get('sid');
    //         $response = Http::asForm()->post('http://172.20.4.32:3000/sign/'.$request->id.'/update', [
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'img' => $request->img,
    //         ]);
    //         $statusCode = $response->getStatusCode();
    //         $body = $response->getBody()->getContents();
    //         return redirect('auth/me');
    //     }
    // }

    public function update(Request $request)
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $id = session()->get('sid');
            $response = Http::asForm()->post('http://172.20.4.32:3000/sign/' . $id . '/update', [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'img' => $request->img,
            ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            return redirect('auth/me');
        }
    }

    public function vupdatepw()
    {
        return view('auth/updatepw');
    }

    public function updatepw(Request $request)
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $id = session()->get('sid');
            $response = Http::asForm()->post('http://172.20.4.32:3000/sign/' . $id . '/updatepw', [
                'password' => $request->password,
                'passwordconfirm' => $request->passwordconfirm,
            ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            return redirect('auth/me');
        }
    }

    public function home()
    {
        // if (session()->get('ssid')==TRUE){
        return view('home');
        // } else {
        //     return redirect('auth/login');
        // }

    }

    public function logout()
    {
        session()->flush();
        return redirect('auth/login');
    }

    public function sendmssg(Request $request)
    {
        $client = new Client();
        if (session()->get('ssid') == TRUE) {
            $id = session()->get('sid');
            $response = Http::asForm()->post('http://172.20.4.32:3000/sign/' . $id . '/message', [
                'message' => $request->message,
            ]);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            return redirect('home');
        } else {
            return redirect('/login');
        }
    }
}
