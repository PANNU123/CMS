<?php

use App\Http\Controllers\ApproveController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::group(['middleware' => 'web'], function() {
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});    
});
Route::post('user/post', [App\Http\Controllers\PostController::class, 'Userpost'])->name('user-post');
Route::get('/show/post', [App\Http\Controllers\PostController::class, 'Showpost'])->name('show-post');
Route::get('/edit/post/{id}', [App\Http\Controllers\PostController::class, 'Editpost']);
Route::get('/delete/post/{id}', [App\Http\Controllers\PostController::class, 'Deletepost']);
Route::post('/update/post', [App\Http\Controllers\PostController::class, 'UpdatePost'])->name('update-post');


Route::get('/load/data', [App\Http\Controllers\ApproveController::class, 'LoadData'])->name('load-data');
Route::get('/post/inactive/{id}', [App\Http\Controllers\ApproveController::class, 'inactive']);
Route::get('/post/active/{id}', [App\Http\Controllers\ApproveController::class, 'active']);
Route::get('admin/post/delete/{id}', [App\Http\Controllers\ApproveController::class, 'AdminDelete']);
Route::get('admin/post/edit/{id}', [App\Http\Controllers\ApproveController::class, 'AdminEdit']);
Route::post('/update/post/admin', [App\Http\Controllers\ApproveController::class, 'AdminUpdate'])->name('update-post-admin');



Route::get('logout', function () {
	Auth::logout();
	return redirect()->route('login');
});






