<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\book;
use Illuminate\Http\Request;    
use Illuminate\Support\Facades\DB;

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
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
Route::get('test', function (request $request) {

    $titles = DB::table('users')->pluck('name', 'name');

    foreach ($titles as $name => $title) {
        echo $title;
    }
});

// Book CURD
Route::get('/b', [BookController::class, 'index']);
Route::get('books', [BookController::class, 'index']);
Route::post('addBook', [BookController::class, 'store'])->name('addBook');
Route::delete('book/delete/{id}', [BookController::class, 'destroy']);
Route::get('edit/{id?}', [BookController::class, 'edit'])->name("book.edit");
Route::put('update', [BookController::class, 'update'])->name('update');

// User CRUD
Route::get('/users', [UserController::class, 'index']);

// Auth
Route::post('adduser', [UserController::class, 'store'])->name('adduser');
Route::post('logincheck', [UserController::class, 'logincheck'])->name('logincheck');
Route::get('logout', [UserController::class, 'logout']);

// api
Route::get('testing', [UserController::class, 'testing']);
