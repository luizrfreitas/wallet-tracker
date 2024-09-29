<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WalletTrackerTest extends TestCase
{
    public function testHomePageRoute(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function testTagsPageRoute(): void
    {
        $response = $this->get('/tags');

        $response->assertStatus(200);
    }

    public function testExpensesPageRoute(): void
    {
        $response = $this->get('/expenses');

        $response->assertStatus(200);
    }

    public function testStatisticsPageRoute(): void
    {
        $response = $this->get('/statistics');

        $response->assertStatus(200);
    }
}
