<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/', IndexController::class)->name('index');

});
Route::post('/sender', FormController::class)->name('sender');
