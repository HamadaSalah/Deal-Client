<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::prefix('admin')->middleware('guest:admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'getLogin'])->name('doLogin');
    Route::post('/login', [LoginController::class, 'doLogin'])->name('login');
});
Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    Route::get('/index', [LoginController::class, 'index'])->name('index');
    Route::resource('/users', UserController::class);
    // Route::resource('roles', RoleController::class);
    // Route::resource('admins', AdminController::class);
    // Route::resource('about', AboutController::class);
    // Route::resource('newscategory', NewsCategoryController::class);
    // Route::resource('news', NewsController::class);
    // Route::resource('oppocats', OppoCatsController::class);
    // Route::resource('opportunities', OpportunitiesController::class);
    // Route::resource('students', StudentsController::class);
    // Route::resource('admins','AdminsController');

});
?>