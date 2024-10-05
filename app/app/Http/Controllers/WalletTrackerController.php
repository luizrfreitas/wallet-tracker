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
        $request->validate([
            'title' => 'required|string|max:100',
            'amount' => 'required|numeric|gt:0',
        ]);

        $ids = [];

        foreach ($request->all() as $expense) {
            $ids[] = \App\Models\Expense::create($expense)['id'];
        }

        return response()->json([$ids], 200);
    }

    public function createTags(Request $request)
    {
        $ids = [];

        foreach ($request->all() as $tag) {
            $ids[] = \App\Models\Tag::create($tag)['id'];
        }

        return response()->json([$ids], 200);
    }
}
