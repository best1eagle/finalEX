<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userContoller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users/index',[userContoller::class,index])->name('all.users');
Route::resource('users/create',[userContoller::class,create])->name('create');
Route::resource('users/delete',[userContoller::class,delete])->name('delete');
Route::resource('users/edit',[userContoller::class,edit])->name('edit');