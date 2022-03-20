<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
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

Route::get('/login2',function(){
return view('pages.login2');
});
Route::get('/', [PagesController::class,'index']);
Route::get('/services', [PagesController::class,'services']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/projects', [PagesController::class,'projects']);
Route::get('/contact', [PagesController::class,'contact']);
Route::get('/project/{id}', [PagesController::class,'showProject']);
Route::get('/test', [ProjectController::class,'index']);

