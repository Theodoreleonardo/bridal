<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaunController;
use App\Http\Controllers\UkurangaunController;
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
//     return view('admin.gaun');
// });
// GAun
Route::get('/', [GaunController::class, 'index']);
Route::get('/gaun/create', [GaunController::class, 'create']);
Route::post('/admin/gaun', [GaunController::class, 'store']);
Route::get('/{gaun}/edit', [GaunController::class, 'edit']);
Route::patch('/gaun/{gaun}', [GaunController::class, 'update']);
Route::delete('/admin/{gaun}', [GaunController::class, 'destroy']);
//Ukuran Gaun
Route::post('/admin/ukuran', [UkurangaunController::class, 'store']);
Route::patch('/ukurangaun/{ukurangaun}', [UkurangaunController::class, 'update']);

// Route::get('/', [CobaController::class, 'index']);
Route::get('/contact', [ContacController::class, 'index']);
Route::get('/ukurangaun', [UkurangaunController::class, 'index']);
Route::get('/baner', [BanerController::class, 'index']);
Route::get('/gaun', [GaunController::class, 'index']);
