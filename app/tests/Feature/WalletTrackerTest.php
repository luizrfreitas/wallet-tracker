<?php

namespace Tests\Feature;

use App\Models\Expense;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WalletTrackerTest extends TestCase
{
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

    public function testCreateExpenseCorretPostData(): void
    {
        $body = Expense::factory()->create()->toArray();
        $body['date'] = $body['date']->format('Y-m-d');
        unset($body['id']);

        $response = $this->post('/expenses', $body);

        $response->assertStatus(200);

        $this->assertDatabaseHas('expenses', [
            'id' => $response->json('id')
        ]);
    }
}
