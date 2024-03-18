<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\AuthController;
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


Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', [HomeController::class, 'index']);

Route::get('/posts/{slug}', [PostController::class, 'getPost']);

 
 
 // адресу задано имя (алиас) 'todo' (без слеша), использовано в AuthController.php
 //задан посредник, который есть в Laravel по умолчанию в App/HTTP/Middleware
Route::get('/todo', [TodoController::class, 'index'])->name('todo')->middleware('auth');
 

//путь к странице авторизации, алиас user-login
Route::get('/todo/login', [AuthController::class, 'getLogin'])->name('user-login');
//отcледить переданные данные со страницы /todo/login методом POST
Route::post('/todo/login', [AuthController::class, 'postLogin']);

 
 
 
 
 
 