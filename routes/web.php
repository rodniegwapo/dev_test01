<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth/login');
});

if(Auth::user()){
     
}

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/createArticle', [App\Http\Controllers\ArticleController::class, 'createArticle']);

Route::post('/storeArticle', [App\Http\Controllers\ArticleController::class, 'storeArticle']);
Route::get('/home', [App\Http\Controllers\ArticleController::class, 'displayArticle']);
Route::get('/destroy/{id}', [App\Http\Controllers\ArticleController::class, 'destroy']);
Route::get('/edit/{id}', [App\Http\Controllers\ArticleController::class, 'edit']);
Route::post('/update/{id}', [App\Http\Controllers\ArticleController::class, 'update']);
Route::get('/show/{id}', [App\Http\Controllers\ArticleController::class, 'show']);