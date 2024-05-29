<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('/users', [userController::class, 'listAllUsers'])->name('listUsers'); //-> da nome
Route::get('/users/create', [userController::class, 'createUser'])->name('createUser');
Route::get('/users/id', [userController::class, 'listUsersByID'])->name('listUsersByID');
Route::get('/users/id/edit', [userController::class, 'updateUser'])->name('updateUser'); 
Route::get('/users/id/delete', [userController::class, 'deleteUser'])->name('deleteUser');

Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/logout', [AuthController::class. 'logout'])->name('logout');
