<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeadminController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LayanankamiController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [LandingpageController::class, 'landingpage']);
Route::get('/tentangkami', [LandingpageController::class, 'pagestentangkami']);
Route::get('/layanankami', [LandingpageController::class, 'pageslayanankami']);
Route::get('/galerikami', [LandingpageController::class, 'pagesgalerikami']);
Route::get('/testimoni', [LandingpageController::class, 'pagestestimoni']);

//login
Route::get('/login', [AuthController::class, 'FormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
//website
    Route::get('admin/website', [WebsiteController::class, 'index']);
    Route::post('admin/create-website', [WebsiteController::class, 'store']);
    Route::post('admin/edit-website', [WebsiteController::class, 'update']);
    Route::get('admin/delete-website/{id}', [WebsiteController::class, 'delete']);

//galeri
    Route::get('admin/galeri', [GaleriController::class, 'index']);
    Route::post('admin/create-galeri', [GaleriController::class, 'store']);
    Route::post('admin/edit-galeri', [GaleriController::class, 'update']);
    Route::get('admin/delete-galeri/{id}', [GaleriController::class, 'delete']);

//testimoni
    Route::get('admin/testimoni', [TestimoniController::class, 'index']);
    Route::post('admin/create-testimoni', [TestimoniController::class, 'store']);
    Route::post('admin/edit-testimoni', [TestimoniController::class, 'update']);
    Route::get('admin/delete-testimoni/{id}', [TestimoniController::class, 'delete']);

//tentangkami
    Route::get('admin/tentangkami', [TentangkamiController::class, 'index']);
    Route::post('admin/create-tentangkami', [TentangkamiController::class, 'store']);
    Route::post('admin/edit-tentangkami', [TentangkamiController::class, 'update']);
    Route::get('admin/delete-tentangkami/{id}', [TentangkamiController::class, 'delete']);

//layanankami
    Route::get('admin/layanankami', [LayanankamiController::class, 'index']);
    Route::post('admin/create-layanankami', [LayanankamiController::class, 'store']);
    Route::post('admin/edit-layanankami', [LayanankamiController::class, 'update']);
    Route::get('admin/delete-layanankami/{id}', [LayanankamiController::class, 'delete']);

//homeadmin
    Route::get('admin/homeadmin', [HomeadminController::class, 'index']);
// Route::post('admin/create-homeadmin', [HomeadminController::class, 'store']);
// Route::post('admin/edit-homeadmin', [HomeadminController::class, 'update']);
// Route::get('admin/delete-homeadmin/{id}', [HomeadminController::class, 'delete']);
});
