<?php

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


Route::get('/task/{id}', function ($id) {
    return view('show', ['task' => Task::findOrFail($id)]);
})->name('tasks.show');

Route::post('/tasks', function(Request $request) {
   $data = $request->validate([
       'title' => 'required|max:255',
       'description' => 'required',
       'long_description' => 'required',
   ]);
});
