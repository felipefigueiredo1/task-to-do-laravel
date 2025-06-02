<?php

namespace Test\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskPageTest extends TestCase
{
    use RefreshDatabase;
    public function test_if_task_page_its_loaded(): void
    {
        $this->seed();
        $response = $this->get('/task/1');
        $response->assertStatus(200);
    }
}
