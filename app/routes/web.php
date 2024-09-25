<?php

use App\Http\Controllers\WalletTrackerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(WalletTrackerController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('wallet-tracker.index');
    Route::get('/add_expense', 'addExpense')->name('wallet-tracker.add');
});