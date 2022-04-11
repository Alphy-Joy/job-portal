<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobseekerController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin','middleware' => ['isAdmin','auth']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::resource('states', StateController::class);
    Route::get('states/status/{id}/{status}', 'App\Http\Controllers\StateController@status');
    Route::post('states/loc', [StateController::class, 'loc']);
    Route::resource('locations', LocationController::class );
    Route::get('locations/status/{id}/{status}', 'App\Http\Controllers\LocationController@status');
    Route::resource('categories', CategoryContoller::class );
    Route::get('categories/status/{id}/{status}', 'App\Http\Controllers\CategoryContoller@status');
    Route::resource('skills', SkillContoller::class );
    Route::get('skills/status/{id}/{status}', 'App\Http\Controllers\SkillContoller@status');
});

Route::group(['prefix' => 'employer','middleware' => ['isEmployer','auth']], function(){
    Route::get('dashboard',[EmployerController::class,'index'])->name('employer.dashboard');
    Route::get('profile',[EmployerController::class,'profile'])->name('employer.profile');
    Route::get('settings',[EmployerController::class,'settings'])->name('employer.settings');
});

Route::group(['prefix' => 'jobseeker','middleware' => ['isJobseeker','auth']], function(){
    Route::get('dashboard',[JobseekerController::class,'index'])->name('jobseeker.dashboard');
    Route::get('profile',[JobseekerController::class,'profile'])->name('jobseeker.profile');
    Route::get('settings',[JobseekerController::class,'settings'])->name('jobseeker.settings');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
