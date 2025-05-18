<?php

namespace Test\Feature;

use Tests\TestCase;

class TaskPageTest extends TestCase
{
    public function test_if_task_page_its_loaded(): void
    {
        $response = $this->get('/task/1');
        $response->assertStatus(200);
    }
}
