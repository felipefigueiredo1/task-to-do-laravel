<?php

namespace Test\Feature;

use Tests\TestCase;

class FallbackTest extends TestCase
{
    /**
     * Testing if the fallback route works
     *
     * @return void
     */
    public function test_if_fallback_works(): void
    {
        $response = $this->get('/'.fake()->name);

        $response->assertStatus(200);
    }
}
