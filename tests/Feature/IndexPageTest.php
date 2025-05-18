<?php

namespace Test\Feature;

use Tests\TestCase;
use App\Entities\Task;


class IndexPageTest extends TestCase
{
    public function test_index_displays_properly(): void
    {
        $response = $this->get('/index');

        $tasks = [
            new Task(

                1,

                'Buy groceries',

                'Task 1 description',

                'Task 1 long description',

                false,

                '2023-03-01 12:00:00',

                '2023-03-01 12:00:00'

            ),

            new Task(

                2,

                'Sell old stuff',

                'Task 2 description',

                null,

                false,

                '2023-03-02 12:00:00',

                '2023-03-02 12:00:00'

            ),

            new Task(

                3,

                'Learn programming',

                'Task 3 description',

                'Task 3 long description',

                true,

                '2023-03-03 12:00:00',

                '2023-03-03 12:00:00'

            ),

            new Task(

                4,

                'Take dogs for a walk',

                'Task 4 description',

                null,

                false,

                '2023-03-04 12:00:00',

                '2023-03-04 12:00:00'

            ),

        ];

        $response->assertStatus(200);
        $response->assertSee('Index Page');
        $response->assertViewIs('index');
        $response->assertViewHas('name', 'Felipe');
        $response->assertViewHas('tasks', $tasks);
    }
}
