<?php

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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

Route::post('/', function (Request $request) {

    $wifi = $request->validate([
        'wifi_ssid' => 'required|string',
        'wifi_password' => 'required|string',
        'duration' => 'required|integer',
    ]);

    $random = str()->random(8);

    $profile = Profile::create([
        'share_url' => $random,
        'wifi_ssid' => $wifi['wifi_ssid'],
        'wifi_password' => $wifi['wifi_password'],
        'duration' => $wifi['duration'],
    ]);

    return redirect()->route('qr', ['share_url' => $profile->share_url]);

   
})->name('generate');

Route::get('/{share_url}', function ($share_url) {
    $profile = Cache::rememberForever($share_url, function () use ($share_url) {
        return Profile::where('share_url', $share_url)->first();
    });
    return view('qr', compact('profile'));
})->name('qr');

Route::get('/{share_url}/download', function ($share_url) {
    $profile = Profile::where('share_url', $share_url)->firstOrFail();
    
    return response()
            ->view('profile', compact('profile'))
            ->header('Content-Type', 'application/x-apple-aspen-config');

})->name('download');


