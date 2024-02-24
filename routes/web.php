<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
<<<<<<< HEAD
=======
use App\Http\Controllers\TodoController;
>>>>>>> 3330644bc5744c77d1066088ddfe9ea1f4a27dd2

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

<<<<<<< HEAD
=======
Route::get('/todo', [TodoController::class, 'index']);

>>>>>>> 3330644bc5744c77d1066088ddfe9ea1f4a27dd2
 