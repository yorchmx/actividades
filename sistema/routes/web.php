<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeportesController;

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

/* Route::get('/deportes', function () {
    return view('deportes.index');
});

Route::get('/deportes/create',[DeportesController::class,'create']);
*/

Route::resource('deportes',DeportesController::class);
