<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/', [HomeController::class, 'index']);


Route::get('/users', [AdminController::class, 'user']);

Route::get('/foodmenu', [AdminController::class, 'foodmenu']);



Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu']);

Route::get('/updatemenu/{id}', [AdminController::class, 'updatemenu']);

Route::post('/uploadfood', [AdminController::class, 'uploadfood']);

Route::post('/updatedata/{id}', [AdminController::class, 'update']);

Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::post('/reservation', [AdminController::class, 'reservation']);

Route::get('/adminreservation', [AdminController::class, 'adminreservation']);

Route::get('/foodchef', [AdminController::class, 'foodchef']);

Route::get('/order', [AdminController::class, 'order']);

Route::post('/uploadchef', [AdminController::class, 'uploadchef']);

Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);

Route::get('/updatechef/{id}', [AdminController::class, 'updatechef']);

Route::post('/updatechefdata/{id}', [AdminController::class, 'updatechefdata']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

Route::get('/showcart/{id}', [HomeController::class, 'showcart']);

Route::get('/deleteorder/{id}', [HomeController::class, 'deleteorder']);

Route::post('/orderconfirm', [HomeController::class, 'orderconfirm']);

Route::get('/search', [AdminController::class, 'search']);











Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
