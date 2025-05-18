<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    Index Page

    @isset($name)
        <div>
            The name is: {{$name}}
        </div>
    @endisset
    <h1>
        The list of tasks
    </h1>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>
            There are no tasks!
        </div>
    @endforelse
</body>
</html>
