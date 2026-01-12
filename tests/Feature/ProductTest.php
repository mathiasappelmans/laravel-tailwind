<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

// php artisan test --filter ProductTest
class ProductTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    // php artisan test --filter test_example
    public function testExample(): void
    {
        $user = User::factory()->create();

        dump($user->name);

        $response = $this->get('/'); // or '/'

        $response->assertStatus(200);
    }

    public function testTheApplicationReturnsASuccessfulResponse(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);

        $response->assertSee('Our Products'); // case sensitive
    }
}
