<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Testing if that request returns a string
     *
     * @return void
     */
    public function test_the_application_returns_a_specific_string(): void
    {
        $response = $this->get(route('tasks.index'));
        $response->assertStatus(200);
    }

    /**
     * Testing if that request its redirected to hello
     *
     * @return void
     */
    public function test_if_the_redirect_of_hallo_to_hello_works(): void
    {
        $response = $this->get('/hallo');
        $response->assertRedirect(route('tasks.index'));
    }
}
