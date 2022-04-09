<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventFestivalController;
use App\Http\Controllers\TourPackageController;
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

Route::resource('destination', DestinationController::class);
Route::resource('event-festival', EventFestivalController::class);

// Tour Package
Route::get('/tour-package', [TourPackageController::class, 'index']);
Route::get('/tour-package/create', [TourPackageController::class, 'create']);
Route::get('/tour-package/{package:slug}', [TourPackageController::class, 'show']);
Route::post('/tour-package', [TourPackageController::class, 'store']);

