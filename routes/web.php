<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\CalculateController;



Route::get('/', [CalculateController::class,'home'])->name('home');
Route::get('/calculate', [CalculateController::class,'calculator'])->name('calculator');
Route::post('/calculate-result',[CalculateController::class,'result'])->name('result');

