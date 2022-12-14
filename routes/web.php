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

 Route::middleware(['auth:web'])->group(function () {
     
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/editprofilepage', 'UserController@editprofilepage')->name('editprofilepage');
    Route::post('/editprofile', 'UserController@editprofile')->name('editprofile');
    Route::get('/mycv/{id}', 'UserController@mycv')->name('mycv');
});