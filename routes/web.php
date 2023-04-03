<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('mainHome');
});

Route::get('/pages/perusahaan', function () {
    return view('/pages/perusahaan');
});

Route::get('/pages/detailPerusahaan', function () {
    return view('/pages/detailPerusahaan');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/mainHome', function () {
    return view('/mainHome');
});

Route::post('/postlogin', [LoginController::class, "postlogin"])->name('postlogin');
Route::get('/logout', [LoginController::class, "logout"]);

//hanya untuk admin dan company
Route::group(['middleware'=>['auth', 'ceklevel:Admin,Pelamar,Company']], function(){
    Route::get('/home', function () {
        return view('home');
    });

    // Route::get('/detailPerusahaan', [PageController::class, "detailPerusahaan"])->name('detailPerusahaan');
    // Route::get('/perusahaan', [PageController::class, "perusahaan"])->name('perusahaan');
});


Route::group(['middleware'=>['auth', 'ceklevel:Pelamar']], function(){

    Route::get('/detailPerusahaan', [PageController::class, "detailPerusahaan"])->name('detailPerusahaan');
});

Route::group(['middleware'=>['auth', 'ceklevel:Company']], function(){

    Route::get('/perusahaan', [PageController::class, "perusahaan"])->name('perusahaan');
});