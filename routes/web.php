<?php

use App\Http\Controllers\CategoryContoller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SkillContoller;
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

Route::get('/admin/dashboard', [DashboardController::class,'index'] );
Route::resource('/admin/states', StateController::class);
Route::get('/admin/states/status/{id}/{status}', 'App\Http\Controllers\StateController@status');
//Route::post('/admin/states/loc', [StateController::class, 'loc']);
Route::resource('/admin/locations', LocationController::class );
Route::get('/admin/locations/status/{id}/{status}', 'App\Http\Controllers\LocationController@status');
Route::resource('/admin/categories', CategoryContoller::class );
Route::get('/admin/categories/status/{id}/{status}', 'App\Http\Controllers\CategoryContoller@status');
Route::resource('/admin/skills', SkillContoller::class );
Route::get('/admin/skills/status/{id}/{status}', 'App\Http\Controllers\SkillContoller@status');