<?php

namespace Test\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    public function test_task_insert_in_database(): void
    {
        $this->seed();
        $request = $this->post('/tasks', [
            'title' => 'Test Task',
            'description' => 'Test Description',
            'long_description' => 'Test Long Description',
        ]);

        $request->assertStatus(200);
    }
}
