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

Route::view('/template/home','template');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin']);
Route::get('/staff', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('/user/store', [App\Http\Controllers\StaffController::class, 'store']);
Route::post('/user/update', [App\Http\Controllers\StaffController::class, 'update']);
Route::get('/user/{id}/delete', [App\Http\Controllers\StaffController::class, 'destroy']);


Route::get('/cme/potensi-perangkat/create', [App\Http\Controllers\CME_Controller::class, 'viewCreate']);
Route::post('/cme/potensi-perangkat/create', [App\Http\Controllers\CME_Controller::class, 'store'])->name('store_cme_potensi_perangkat');
Route::get('/cme/potensi-perangkat/manage', [App\Http\Controllers\CME_Controller::class, 'viewManage'])->name('store_cme_potensi_perangkat');
Route::get('/cme/potensi-perangkat/{id}/delete', [App\Http\Controllers\CME_Controller::class, 'destroy']);
Route::get('/cme/potensi-perangkat/{id}/update', 'CME_Controller@viewUpdate');
Route::post('/bahan/manage', [App\Http\Controllers\StaffController::class, 'store']);
Route::post('/bahan/update', [App\Http\Controllers\StaffController::class, 'update']);
Route::get('/bahan/{id}/delete', [App\Http\Controllers\StaffController::class, 'destroy']);


Route::post('/bahan/create', [App\Http\Controllers\BahanController::class, 'viewCreate']);
Route::post('/bahan/manage', [App\Http\Controllers\StaffController::class, 'store']);
Route::post('/bahan/update', [App\Http\Controllers\StaffController::class, 'update']);
Route::get('/bahan/{id}/delete', [App\Http\Controllers\StaffController::class, 'destroy']);


Route::get('/admin/user/manage', [App\Http\Controllers\StaffController::class, 'viewAdminManage']);
Route::get('/admin/user/{id}/edit', [App\Http\Controllers\StaffController::class, 'viewAdminEdit']);

