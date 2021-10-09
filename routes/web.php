<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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

Route::get('/index', [PostController::class, 'index']);
Route::post('/add', [PostController::class, 'add']);
Route::post('/update', [PostController::class, 'update']);
Route::post('/delete', [PostController::class, 'delete']);