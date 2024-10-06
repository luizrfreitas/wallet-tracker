<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

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
        $validator = Validator::make($request->all(), [
            '*.title' => 'required|string|max:100',
            '*.amount' => 'required|numeric|gt:0.0',
        ]);

        if ($validator->fails()) {
            return redirect('expenses')
                ->withErrors($validator)
                ->withInput();
        }

        $ids = [];

        foreach ($request->all() as $expense) {
            $ids[] = \App\Models\Expense::create($expense)['id'];
        }

        return response()->json([$ids], 200);
    }

    public function createTags(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '*.name' => 'required|string|max:100'
        ]);

        if ($validator->fails()) {
            return redirect('tags')->withErrors($validator)->withInput();
        }

        $ids = [];

        foreach ($request->all() as $tag) {
            $ids[] = \App\Models\Tag::create($tag)['id'];
        }

        return response()->json([$ids], 200);
    }
}
