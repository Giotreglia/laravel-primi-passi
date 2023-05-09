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

    $welcome = "Daje de Laravel!";
    $gif = "https://media.tenor.com/zalfBQMfhGgAAAAC/daje-che-bello.gif";

    $data = [
        'welcome' => $welcome,
        'gif' => $gif
    ];    
    return view('home', $data);
});
