<?php

namespace App;


// This a simple exemple of service class to be injected in Controller
// You can register it in the service container in App\Providers\AppServiceProvider.php
// https://www.youtube.com/watch?v=PvRvg0kD5OU&list=PLjwdMgw5TTLXz1GRhKxSWYyDHwVW-gqrm&index=26
class Weather
{
    // inject apiKey via constructor injection, property promotion (PHP 8+)
    public function __construct(public string $apiKey)
    {
        // ...
    }

    public function isSunnyTommorow(): bool
    {
        return true;
    }
}
