<?php
use App\Http\Controllers\UserController;
 
Route::get('/user', [UserController::class, 'index']);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
