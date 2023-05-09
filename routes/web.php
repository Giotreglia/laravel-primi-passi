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
})->name('home');

Route::get('myTeam', function () {
    $myTeam = "FC Internazionale";
    $img = "https://open.http.mp.streamamg.com/p/3001560/sp/300156000/thumbnail/entry_id/0_zicj5xgg/width/554";

    $myTeamData = [
        'myTeam' => $myTeam,
        'img' => $img
    ];
    return view('myTeam', $myTeamData);
})->name('myTeam');

Route::get('myCalendar', function () {

    return view('myCalendar', ['myMessage'=> "Mi raccomando domani piano con gli esercizi che c'è IL derby!", 'grazie'=>"GRAZIE!!!"]);
})->name('myCalendar');
