<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
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


Route::get('/',function(){
    return view('login');
})->name('login');
Route::resource("/stagiaire", StagiaireController::class);
Route::get("/index", [StagiaireController::class,'index'])->name('index');
Auth::routes();
Route::get('/delete',[StagiaireController::class,'deleteAll'])->name('deletAll');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search',[StagiaireController::class,'search'])->name('search');
