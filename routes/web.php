<?php

use Illuminate\Support\Facades\Route;
use App\Entities\Task;


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

Route::get('/', function () {
    return 'Hello World!';
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello '.$name.'!';
});

Route::get('/hallo', function () {
    return redirect('/');
});

Route::fallback(function () {
    return 'OK';
});

Route::get('/index', function () use ($tasks) {
    return view('index', [
        'name' => 'Felipe',
        'tasks' => $tasks
    ]);
});

Route::get('/task/{id}', function($id) {
    return 'One Single Task';
})->name('tasks.show');
