<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaunController;
use App\Http\Controllers\UkurangaunController;
use App\Http\Controllers\GambargaunController;
use App\Http\Controllers\MakeupController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BanerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ContactController;
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

// Route::get('/login', function () {
//     return view('admin.login');
// });

//login
Route::get('/admin/login/', [AuthController::class, 'index'])->name('login');
Route::post('/admin/login/', [AuthController::class, 'login']);
//register
Route::get('/admin/register/', [RegisterController::class, 'index']);
Route::post('/admin/register/', [RegisterController::class, 'store']);

Route::Group(['middleware' => 'auth'], function () {
    // Gaun
    Route::get('/gaun/create', [GaunController::class, 'create']);
    Route::post('/admin/gaun', [GaunController::class, 'store']);
    Route::get('/{gaun}/edit', [GaunController::class, 'edit']);
    Route::patch('/gaun/{gaun}', [GaunController::class, 'update']);
    Route::delete('/admin/{gaun}', [GaunController::class, 'destroy']);
    Route::get('/gaun', [GaunController::class, 'index']);
    Route::get('/gaun/{gaun}', [GaunController::class, 'show']);
    //Ukuran Gaun
    Route::get('/ukurangaun', [UkurangaunController::class, 'index']);
    Route::post('/admin/ukuran', [UkurangaunController::class, 'store']);
    Route::patch('/ukurangaun/{ukurangaun}', [UkurangaunController::class, 'update']);
    Route::get('/admin/ukuran/{id}', [UkurangaunController::class, 'create']);
    Route::get('/admin/editukuran/{ukurangaun}', [UkurangaunController::class, 'edit']);
    Route::delete('/admin/ukurangaun/{ukurangaun}', [UkurangaunController::class, 'destroy']);
    //GambarGaun
    Route::patch('/gambargaun/{gambargaun}', [GambargaunController::class, 'store']);
    //Makeup
    Route::get('/makeup', [MakeupController::class, 'index']);
    Route::get('admin/makeup/{id}', [MakeupController::class, 'route']);
    Route::get('/makeup/create', [MakeupController::class, 'create']);
    Route::post('/admin/makeup', [MakeupController::class, 'store']);
    Route::get('/{makeup}/edit/makeup', [MakeupController::class, 'edit']);
    Route::post('/admin/makeup/{makeup}', [MakeupController::class, 'update']);
    Route::delete('/admin/makeup/{makeup}', [MakeupController::class, 'destroy']);

    //login
    Route::get('/admin/logout/', [AuthController::class, 'logout']);


    //Baner
    Route::get('/baners', [BanerController::class, 'index']);
    Route::get('/admin/baners', [BanerController::class, 'create']);
    Route::post('/admin/baners', [BanerController::class, 'store']);
    Route::delete('/admin/baners/{baner}', [BanerController::class, 'destroy']);

    //testimoni
    Route::get('/testimoni', [TestimoniController::class, 'index']);
    Route::get('/admin/testimoni', [TestimoniController::class, 'create']);
    Route::post('/admin/testimoni', [TestimoniController::class, 'store']);
    Route::delete('/admin/testimoni/{testimoni}', [TestimoniController::class, 'destroy']);

    //galeri
    Route::get('/galeri', [GaleriController::class, 'index']);
    Route::get('/admin/galeri', [GaleriController::class, 'create']);
    Route::post('/admin/galeri', [GaleriController::class, 'store']);
    Route::delete('/admin/galeri/{galeri}', [GaleriController::class, 'destroy']);

    //contact
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/admin/contact', [ContactController::class, 'create']);
    Route::post('/admin/contact', [ContactController::class, 'store']);
    Route::get('/{contact}/contact', [ContactController::class, 'edit']);
    Route::delete('/admin/contact/{contact}', [ContactController::class, 'destroy']);
    Route::post('/admin/contact/{contact}', [ContactController::class, 'update']);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/gown', [HomeController::class, 'gown']);
Route::get('/makeups', [HomeController::class, 'makeup']);
Route::get('/testi', [HomeController::class, 'testi']);
