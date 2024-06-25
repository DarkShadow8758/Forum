<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
})->name('welcome'); 


Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth');
//Route::match (['get', 'post'], '/login', [AuthController:: class, 'loginUser'])->name('login');
Route::post ('/auth', [AuthController:: class, 'loginUser'])->name('login');
//novos ----
Route::post('/register', [UserController::class, 'registerUser'])->name('register');
//Route::match(['get', 'post'], '/register', [UserController::class, 'register'])->name('register');
Route::get('/users/profile', [UserController::class, 'profileUser'])->name('profileUser');
Route::get('/logout', [AuthController::class, 'logoutUser'])->name('logout');
Route::get('/help', [UserController::class, 'help'])->name('help');
//UserController
Route::match (
    ['get', 'post'],
    '/register',
    [UserController::class, 'registerUser']
)->name('register');
Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'listAllUsers'])->name('listAllUsers');
    Route::get('/users/{uid}', [UserController::class, 'listUser'])->name('listUser');
    
    Route::put('/users/{uid}/edit', [UserController::class, 'updateUser'])->name('updateUser');
    
    //Route::delete('/users/{uid}/delete', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::match(['get', 'delete'],'/users/{uid}/delete', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::match(['get', 'put'], '/createPost', [PostController::class, 'createPost'])->name('createPost');
});

    