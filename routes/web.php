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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


////////////////////////////////////////////////////
//VISITOR

//When visitor clicks a link
Route::post('/visit/{link}', [App\Http\Controllers\VisitController::class, 'store']);
//When visitor goes to a user's page
//i.e app/username
Route::get('/{user}', [App\Http\Controllers\UserController::class, 'show']);




////////////////////////////////////////////////////
//USER(DASHBOARD)
//app/dashboard

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function() {

    Route::get('/links', [App\Http\Controllers\LinkController::class, 'index']);
    Route::get('/links/new', [App\Http\Controllers\LinkController::class, 'create']);
    Route::post('/links/new', [App\Http\Controllers\LinkController::class, 'store']);
    Route::get('/links/{link}', [App\Http\Controllers\LinkController::class, 'edit']);
    Route::post('/links/{link}', [App\Http\Controllers\LinkController::class, 'update']);
    Route::delete('/links/{link}', [App\Http\Controllers\LinkController::class, 'destroy']);

    Route::get('/settings', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/settings', [App\Http\Controllers\UserController::class, 'update']);

});









