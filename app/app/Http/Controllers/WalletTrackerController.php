<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletTrackerController extends Controller
{
    public function home()
    {
        return response()->noContent(204);
    }

    public function tags()
    {
        return response()->noContent(204);
    }

    public function expenses()
    {
        return response()->noContent(204);
    }

    public function statistics()
    {
        return response()->noContent(204);
    }

    public function createExpenses(Request $request)
    {
        $id = \App\Models\Expense::create($request->all());

        return response()->json(['id' => $id], 200);
    }
}
