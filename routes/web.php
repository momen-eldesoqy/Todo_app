<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
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
Route::get('/posts', 'App\Http\Controllers\todoController@index');
Route::get('/onetodo/{todo}', 'App\Http\Controllers\todoController@viewonetodo');
Route::get('/create',[todoController::class,'create']);
Route::post('/create',[todoController::class,'store']);
Route::get('/posts/{todo}/edit',[todoController::class,'edit']);
Route::post('/posts/{todo}',[todoController::class,'update']);
Route::get('/posts/{todo}/delete',[todoController::class,'delete']);
Route::get('/posts/{todo}/completed',[todoController::class,'completed']);