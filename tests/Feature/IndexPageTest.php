<?php

namespace Test\Feature;

use Tests\TestCase;

class IndexPageTest extends TestCase
{
    public function test_index_displays_properly(): void
    {
        $response = $this->get('/index');

        $response->assertStatus(200);
        $response->assertSee('Index Page');
        $response->assertViewIs('index');
        $response->assertViewHas('name', 'Felipe');
    }
}
