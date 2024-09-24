<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $expenses = \App\Models\Expense::all();
        return view('dashboard', ['expenses' => $expenses]);
    }
}
