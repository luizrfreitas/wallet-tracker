<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExpenseTest extends TestCase
{
    use RefreshDatabase;

    public function testCreatingANewExpense(): void
    {
        $amount = 100;
        $name = 'test';

        $expense = \App\Models\Expense::create([
            'amount' => $amount,
            'name' => $name
        ]);

        $this->assertEquals($amount, $expense->amount);
        $this->assertEquals($name, $expense->name);
    }

    public function testUpdatingAExpenseRow(): void
    {
        $amount = 100;
        $newAmount = 200;
        $name = 'test';

        $expense = \App\Models\Expense::create([
            'amount' => $amount,
            'name' => $name
        ]);

        $expense->amount = $newAmount;
        $expense->save();

        $this->assertEquals($newAmount, $expense->amount);
        $this->assertEquals($name, $expense->name);
    }
}
