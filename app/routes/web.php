<?php

use App\Http\Controllers\WalletTrackerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(WalletTrackerController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/tags', 'tags')->name('tags');
    Route::get('/expenses', 'expenses')->name('expenses');
    Route::get('/statistics', 'statistics')->name('statistics');
    Route::post('/expenses', 'createExpenses')->name('createExpenses');
});
