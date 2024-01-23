<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Learning\Pkg\Http\Controllers\MasterController;


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

Route::group(["namespace" => "Learning\Pkg\Http\Controllers"], function() {
    Route::get('/test', [MasterController::class, 'index']);
    Route::post('/test/post', [MasterController::class, 'post'])->name('test.post');
});
