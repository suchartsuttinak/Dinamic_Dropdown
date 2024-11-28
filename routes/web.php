<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DropdownController::class, 'index']);