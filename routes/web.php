<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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

Route::get('/', [PageController::class,'home']);
Route::get('single', [PageController::class,'single']);
Route::get('login', [PageController::class,'login']);
Route::get('register', [PageController::class,'register']);
Route::get('add-post', [PageController::class,'add_post']);
Route::get('posts', [PageController::class,'posts']);

Route::post('register',[AuthController::class,'register'])->name('register');
Route::post('add-post',[PostController::class,'add_new'])->name('add_new');
