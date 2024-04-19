<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class,'home']);

Route::get('/register', [AuthController::class , 'registration']);
Route::post('/regiuser', [AuthController::class , 'regiuser'])->name('register');
Route::get('/login', [AuthController::class , 'login']);
Route::post('/loginuser', [AuthController::class , 'loginuser'])->name('loginuser');


Route::get('/addnew' , [StudentController::class , 'index']);
Route::post('/store' ,[StudentController::class , 'create'])->name('store');
Route::get('/delete/{id}',[StudentController::class,'destroy']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::post('/update/{id}',[StudentController::class,'update'])->name('update');