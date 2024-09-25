<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletTrackerController extends Controller
{
    public function index()
    {
        $expenses = \App\Models\Expense::all();
        return view('dashboard', ['expenses' => $expenses]);
    }

    public function addExpense()
    {
        return view('add-expense');
    }
}
