<?php

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
    $data = config('comics');
    $dcComicLink = config('dcComicsLink');
    $shopLink = config('shopLink');
    $dcLink = config('dcLink');
    $siteLink = config('siteLink');
    return view('comic', ['comics' => $data, 'dcComicLink' => $dcComicLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink]);
});
