<?php

namespace Tests\Feature;

use App\Weather;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\MockInterface;
use Tests\TestCase;

class WeatherTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testWeatherApi(): void
    {
        // https://laravel.com/docs/12.x/mocking
        $this->partialMock(Weather::class, function (MockInterface $mock) {
            $mock->shouldReceive('isSunnyTomorrow')->once()->andReturn(true);
        });


        $response = $this->setUp('/api/weather');
        //$response = $this->get('/api/weather');
        //$response->assertStatus(200);

        //$response->assertJsonPath('weather', 'sunny');
    }
}
