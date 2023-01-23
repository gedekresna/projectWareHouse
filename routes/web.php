<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Dashboard Route
Route::get('/', [DashboardController::class, "index"]);

// Data barang Route
Route::resource('/dataBarang', DataBarangController::class);
// Route::get('/showData', [DataController::class, "index"]);
// Route::get('/createData', [DataController::class, "create"]);
 
