<?php

namespace Test\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;


class IndexPageTest extends TestCase
{
    use RefreshDatabase;
    public function test_index_displays_properly(): void
    {
        $response = $this->get(route('tasks.index'));

        $response->assertStatus(200);
        $response->assertViewIs('index');
        $response->assertViewHas('name', 'Felipe');
    }
}
