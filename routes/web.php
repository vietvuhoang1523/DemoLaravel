<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\UserController;
//Route::get('/', function () {x
//    return view('welcome');
//});
Route::resource('/nhanvien', NhanvienController::class);


