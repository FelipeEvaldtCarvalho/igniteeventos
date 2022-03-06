<?php

use Illuminate\Support\Facades\Route;
//use phpDocumentor\Reflection\Types\Null_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos', [EventController::class, 'eventos']);
Route::post('/eventos',[EventController::class, 'store']);
Route::get('/eventos/criar', [EventController::class, 'criar']);
Route::get('/login', [EventController::class, 'login']);
Route::get('/cadastro', [EventController::class, 'cadastro']);
