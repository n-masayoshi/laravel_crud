<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\CountriesController;
use App\Models\Country;

/*
| Web Routes
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and
| all of them will be assigned to the "web" middleware group.
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', [HelloController::class, 'index']);

Route::get("/countries",[CountriesController::class, "index"]);
