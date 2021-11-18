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
    return view('welcome');
});


Route::get('/test', function () {
    event(new \App\Events\NewTurn('Hola!!!'));
});


Route::get('/panel', function () {
    return view('sendMessage');
});

Route::post('sendMessage', function (\Illuminate\Http\Request $request) {
    event(new \App\Events\NewTurn($request->input('message')));
});

