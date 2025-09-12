@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    @isset($name)
        <div>
            The name is: {{$name}}
        </div>
    @endisset
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}"
        class="link">Add Task!</a>
    </nav>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task]) }}"
            @class(['font-bold', 'line-through' => $task->completed])>{{ $task->title }}</a>
        </div>
    @empty
        <div>
            There are no tasks!
        </div>
    @endforelse

    @if($tasks->count())
        <div class="mt-4">
            {{ $tasks->links() }}
        </div>
    @endif
@endsection
