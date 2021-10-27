<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\views;
use App\Http\Controllers\HomeController;


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
Route::get('/home', function () {
    return view('child');
});

Route::get('/maps', function () {
    return view('layouts/maps');
});
Route::get('/maps/bromo', function () {
    return view('layouts/maps1');
});
Route::get('/maps/pantai', function () {
    return view('layouts/maps2');
});
Route::get('/maps/jatim', function () {
    return view('layouts/maps3');
});
Route::get('/maps/coban', function () {
    return view('layouts/maps4');
});

