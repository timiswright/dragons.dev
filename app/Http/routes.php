<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::resource('weeklys', 'WeeklyController');
Route::resource('players', 'PlayerController');
Route::resource('events', 'EventController');
Route::resource('teams', 'TeamController');
Route::resource('eventplayer', 'EventPlayerController');
Route::get('/{id}', 'EventPlayerController@index');

