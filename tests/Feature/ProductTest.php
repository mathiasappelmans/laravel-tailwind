<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    // php artisan test --filter test_example
    public function test_example(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);

        $response->assertSee('products');
    }
}
