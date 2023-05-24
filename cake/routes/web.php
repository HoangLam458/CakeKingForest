<?php

use App\Http\Controllers\HoadonController;
use App\Http\Controllers\LoaisanphamController;
use App\Http\Controllers\TaikhoanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homeuser');
})->name('cake');

Route::get('/login', function () {
    return view('auth.login');
})->name('Login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route admin account
Route::get('/manages/user', [TaikhoanController::class, 'index'])->name('user.index');
Route::get('/manages/user/detail/{id?}', [TaikhoanController::class, 'show'])->name('user.detail');
Route::get('/manages/user/create', [TaikhoanController::class, 'create'])->name('user.create.form');
Route::post('/manages/user/create', [TaikhoanController::class, 'store'])->name('user.create');
Route::get('/manages/user/edit/{id?}', [TaikhoanController::class, 'edit'])->name('user.edit.form');
Route::post('/manages/user/edit/{id?}', [TaikhoanController::class, 'update'])->name('user.edit');
Route::get('/manages/user/delete/{id?}', [TaikhoanController::class, 'destroy'])->name('user.delete');
//route admin hoadon
Route::get('/manages/invoices', [HoadonController::class, 'index'])->name('invoice.index');
Route::get('/manages/invoice/detail/{id?}', [HoadonController::class, 'show'])->name('invoice.detail');
Route::get('/manages/invoice/edit/{id?}', [HoadonController::class, 'edit'])->name('invoice.edit.form');
Route::post('/manages/invoice/edit/{id?}', [HoadonController::class, 'update'])->name('invoice.edit');
Route::get('/manages/invoice/delete/{id?}', [HoadonController::class, 'destroy'])->name('invoice.delete');
//route admin loai san pham
Route::get('/manages/catagory', [LoaisanphamController::class, 'index'])->name('catagory.index');
Route::get('/manages/catagory/create', [LoaisanphamController::class, 'create'])->name('catagory.create.form');
Route::post('/manages/catagory/create', [LoaisanphamController::class, 'store'])->name('catagory.create');
Route::get('/manages/catagory/edit/{id?}', [LoaisanphamController::class, 'edit'])->name('catagory.edit.form');
Route::post('/manages/catagory/edit/{id?}', [LoaisanphamController::class, 'update'])->name('catagory.edit');
Route::get('/manages/catagory/delete/{id?}', [LoaisanphamController::class, 'destroy'])->name('catagory.delete');
