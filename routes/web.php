<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

Route::get('/hallo', function () {
    return redirect(route('tasks.index'));
});

Route::fallback(function () {
    return 'OK';
});

Route::get('/tasks', function () {
    $tasks = Task::latest()->get();

    return view('index', [
        'name' => 'Felipe',
        'tasks'=> $tasks
    ]);
})->name('tasks.index');

Route::get('/tasks/create', function() {
   return view('create');
});

Route::get('/task/{task}/edit', function (Task $task) {
    return view('edit', [
        'task' => $task
    ]);
})->name('tasks.edit');

Route::get('/task/{task}', function (Task $task) {
    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::post('/tasks', function(TaskRequest $request) {
    $task = Task::create($request->validated());

    return redirect(route('tasks.show', ['task' => $task]))->with('success', 'Task created successfully!');
})->name('tasks.store');

Route::put('/tasks/{task}', function(TaskRequest $request, Task $task){
    $task->update($request->validated());

    return redirect(route('tasks.show', ['task' => $task]))->with('success', 'Task updated successfully!');
})->name('tasks.update');
