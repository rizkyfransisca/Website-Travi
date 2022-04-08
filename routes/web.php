<?php

use Facade\FlareClient\View;
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
    return view('index');
});

Route::get('/tour-package', function () {
    return view('tourpackage.tour_package');
});

Route::get('/tour-package/detail', function () {
    return view('tourpackage.tour_package_detail');
});

Route::get('/destination', function(){
    return view('destination.destination');
});

Route::get('/destination/add', function(){
    return view('destination.add_destination');
});

Route::get('/event-festival', function(){
    return view('eventfestival.event_festival');
});

Route::get('/join-us', function(){
    return view('joinus.join_us');
});