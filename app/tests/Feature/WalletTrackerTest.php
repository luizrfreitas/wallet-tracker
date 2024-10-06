<?php

namespace Tests\Feature;

use App\Models\Expense;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WalletTrackerTest extends TestCase
{
    use RefreshDatabase;

    public function testHomePageRoute(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(204);
    }

    public function testTagsPageRoute(): void
    {
        $response = $this->get('/tags');

        $response->assertStatus(204);
    }

    public function testExpensesPageRoute(): void
    {
        $response = $this->get('/expenses');

        $response->assertStatus(204);
    }

    public function testStatisticsPageRoute(): void
    {
        $response = $this->get('/statistics');

        $response->assertStatus(204);
    }

    public function testCreatingCorrectExpenses(): void
    {
        $expenses = Expense::factory()
            ->count(3)
            ->create([
                'date' => Carbon::now()->toDateString(),
                'updated_at' => null,
                'created_at' => null,
            ])
            ->toArray();

        foreach ($expenses as &$expense) {
            unset($expense['id']);
        }

        $response = $this->post('/expenses', $expenses);

        $response->assertStatus(200);

        foreach ($response->json() as $id) {
            $this->assertDatabaseHas('expenses', [
                'id' => $id
            ]);
        }
    }

    public function testCreatingIncorrectExpenses(): void
    {
        $expenses = Expense::factory()
            ->count(3)
            ->create([
                'date' => Carbon::now()->toDateString(),
                'updated_at' => null,
                'created_at' => null,
            ])
            ->toArray();

        $expenses[0]['amount'] = 'Amount is a string.';
        $expenses[1] = [];

        foreach ($expenses as &$expense) {
            unset($expense['id']);
        }

        $expenses[2]['id'] = $this->faker->randomNumber();

        $response = $this->post('/expenses', $expenses);

        $response->assertStatus(302);
        $response->isRedirect('expenses');
    }

    public function testCreatingCorrectTags(): void
    {
        $tags = Tag::factory()
            ->count(3)
            ->create([
                'updated_at' => null,
                'created_at' => null,
            ])
            ->toArray();

        foreach ($tags as &$tag) {
            unset($tag['id']);
        }

        $response = $this->post('/tags', $tags);

        $response->assertStatus(200);

        foreach ($response->json() as $id) {
            $this->assertDatabaseHas('tags', [
                'id' => $id
            ]);
        }
    }

    public function testCreatingIncorrectTag(): void
    {
        $tags = Tag::factory()
            ->count(3)
            ->create([
                'name' => $this->faker->text(500),
                'updated_at' => null,
                'created_at' => null,
            ])
            ->toArray();

        foreach ($tags as &$tag) {
            unset($tag['id']);
        }

        $response = $this->post('/tags', $tags);

        $response->assertStatus(302);
        $response->isRedirect('tags');
    }
}
