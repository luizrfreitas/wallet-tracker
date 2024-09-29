<?php

namespace Tests\Feature;

use App\Models\Tag;
use App\Models\Expense;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExpenseTagsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed();
    }

    public function testExpenseTagsBelongsToManyRelation(): void
    {
        $expense = Expense::first();

        $this->assertInstanceOf(Tag::class, $expense->tags()->first());
    }

    public function testCascadeDeleteOnExpenseTags(): void
    {
        $expense = Expense::factory()->create();

        $tags = Tag::factory()->count(3)->create();

        $expense->tags()->attach($tags);

        $this->assertDatabaseHas('expense_tags', [
            'expense_id' => $expense->id,
        ]);

        $expense->delete();

        $this->assertDatabaseMissing('expense_tags', [
            'expense_id' => $expense->id,
        ]);
    }
}
