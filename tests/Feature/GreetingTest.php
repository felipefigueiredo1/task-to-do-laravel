<?php

namespace Tests\Feature;

use Tests\TestCase;

class GreetingTest extends TestCase
{
    /**
     * Testing if that request returns a name
     *
     * @return void
     */
    public function test_the_application_returns_the_name(): void
    {
        $name = 'felipe';
        $response = $this->get('/greet/'.$name);

        $response->assertContent('Hello '.$name.'!');
    }
}
