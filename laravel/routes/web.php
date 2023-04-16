<?php

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

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OnlyLoginController;



//Route::get('/', function () {
//    return view('prelogin');
//})->name('prelogin');

Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('users/create',[UserController::class,'create'])->name('user.create');
Route::post('users/', [UserController::class,'store'])->name('user.store');
Route::get('users/{id}', [UserController::class,'edit'])->name('user.edit');
Route::post('users/{id}', [UserController::class,'update'])->name('user.update');
Route::delete('users/{id}', [UserController::class,'delete'])->name('user.delete');

Route::get('/posts', [PostController::class,'index'])->name('post.index');
Route::get('/posts/create', [PostController::class,'create'])->name('post.create');
Route::post('posts', [PostController::class,"store"])->name("post.store");
Route::get('posts/{id}', [PostController::class,'edit'])->name('post.edit');
Route::post('posts/{id}', [PostController::class,'update'])->name('post.update');
Route::delete('posts/{id}', [PostController::class,'delete'])->name('post.delete');



Route::get('/', [LoginController::class,'show'])->name('login');
Route::post('/', [LoginController::class,'login'])->name('login.post');
Route::get('logout', [LoginController::class,'logout'])->name('logout');
Route::get('loggedOut', [LoginController::class,'loggedOut'])->name('loggedOut');

Route::get('post/createFromUser', [PostController::class,'createFromUser'])->name('post.createFromUser');
Route::post('post/createFromUser', [PostController::class,'storeFromUser'])->name('post.storeFromUser');
Route::middleware('auth')->group(function () {
   Route::get('only/login', [OnlyLoginController::class,'index'])->name('only.login');
});

