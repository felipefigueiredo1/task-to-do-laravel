<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * Testing if that request returns a string
     *
     * @return void
     */
    public function test_the_application_returns_a_specific_string(): void
    {
        $response = $this->get('/');
        $response->assertContent('Hello World!');
    }
}
