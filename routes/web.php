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
/*
/Catergories
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/sports', function () {
    return view('sports');
});
Route::get('/music', function () {
    return view('music');
});
Route::get('/comedy', function () {
    return view('comedy');
});
Route::get('/theatre', function () {
    return view('theatre');
});
Route::get('/familyattr', function () {
    return view('familyattr');
});

//Music concerts
Route::get('hellamega', function () {
    return view ('musicconcerts.hellamega');
});
Route::get('ladygagacb', function () {
    return view ('musicconcerts.ladygagacb');
});
Route::get('celinedion', function () {
    return view ('musicconcerts.celinedion');
});

//Sport events
Route::get('duboisjoyce', function () {
    return view ('sportevents.duboisjoyce');
});
Route::get('wwelive', function () {
    return view ('sportevents.wwelive');
});

//Theatre
Route::get('harrypotter', function () {
    return view ('theatreacts.harrypotter');
});
Route::get('sisteract', function () {
    return view ('theatreacts.sisteract');
});
//Family Attractions
Route::get('chessington', function () {
    return view ('familyattrs.chessington');
});
Route::get('altontowers', function () {
    return view ('familyattrs.altontowers');
});

//Comedy
Route::get('romesh', function () {
    return view ('comedyshows.romesh');
});
Route::get('jimmycarr', function () {
    return view ('comedyshow.jimmycarr');
});
