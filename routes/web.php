<?php

use Illuminate\Http\Request;
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
    return view('home');
});

Route::post('/generate', function (Request $request) {
   return view('home');
   
    // return response()->json([
    //     'wifi_ssid' => $request->,
    //     'wifi_password' => request('wifi_password'),
    //     'duration' => request('duration'),
    // ]);
});
