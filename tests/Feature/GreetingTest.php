<?php

namespace Tests\Feature;

use Tests\TestCase;

class GreetingTest extends TestCase
{
    public function test_the_application_returns_the_name(): void
    {
        $name = 'felipe';
        $response = $this->get('/greet/'.$name);

        $response->assertContent('Hello '.$name.'!');
    }
}
