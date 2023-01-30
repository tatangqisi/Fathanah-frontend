<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Autocontroling;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\AsmaulController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DharianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home', [
//         'title' => 'Beranda'
//     ]);
// });

// Route::get('/beranda', function () {
//     return view('home', [
//         'title' => 'Beranda'
//     ]);
// });

Route::get('/', [Autocontroling::class, 'homeData']);

Route::get('/beranda', [Autocontroling::class, 'homeData']);

Route::get('/register', [AuthController::class, 'vregis']);
// Route::get('auth/register', [AuthController::class, 'getImg']);
Route::get('img', [AuthController::class, 'getImg']);
Route::post('register', [AuthController::class, 'Regis']);
Route::get('/login', [AuthController::class, 'vlogin']);
Route::post('login', [AuthController::class, 'Login']);
Route::get('auth/updateuser', [AuthController::class, 'updateuser']);
Route::post('auth.update', [AuthController::class, 'update']);
Route::get('auth/updatepw', [AuthController::class, 'vupdatepw']);
Route::post('auth.updatepw', [AuthController::class, 'updatepw']);
Route::get('auth/me', [AuthController::class, 'me']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('/tentang-kami', [Autocontroling::class, 'about_us']);

Route::get('/hubungi-kami', function () {
    return view('contact', [
        'title' => 'Hubungi Kami'
    ]);
});

Route::get('/asmaulhusna', [AsmaulController::class, 'asmaul']);

Route::get('/doaharian', [DharianController::class, 'getData']);

Route::get('/{$katagori}?highlight=something', [Autocontroling::class, 'vdoas']);

Route::get('/mydiary', [DiaryController::class, 'Diary']);
Route::get('/mydiary/tulis-diary', [DiaryController::class, 'vdiarya']);
Route::post('diaryadd', [DiaryController::class, 'Diaryadd']);
Route::get('mydiary/{no}', [DiaryController::class, 'updiary']);
Route::post('update', [DiaryController::class, 'update']);
Route::post('delete', [DiaryController::class, 'delete']);

Route::get('/kalkulatorzakat', [Autocontroling::class, 'vkalkulator']);

Route::get('/muslimkidz', [Autocontroling::class, 'vkidz']);

Route::get('/kisah-teladan', [Autocontroling::class, 'getDatah']);

Route::get('/rukun-iman', [Autocontroling::class, 'rim']);

Route::get('/rukun-islam', [Autocontroling::class, 'ris']);

Route::get('/artikel', [Autocontroling::class, 'getArticle']);

Route::any('artikel', [BeritaController::class, 'getArticle']);

Route::get('/artikel/{id}', [Autocontroling::class, 'showArticle']);

Route::post('/logout', [Autocontroling::class, 'logout']);

Route::get('/pilih-foto-profil', [Autocontroling::class, 'pfp']);

Route::get('/userprofil', function () {
    return view('profiluser', ['title' => 'Profil']);
});

Route::get('/edit-userprofil', function () {
    return view('profiluser-edit', ['title' => 'Profil']);
});

// Route::get('/kisah-teladan/{id}', [Autocontroling::class, 'contentkisah']);

Route::get('/{judul}', function () {
    return view('muslimkidz.kisahteladan-content', ['title' => 'judul']);
});

Route::post('send', [AuthController::class, 'sendmssg']);
