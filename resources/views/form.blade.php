 @extends('layouts.app')

@section('title', (isset($task) ? 'Edit' : 'Add') . ' Task')

@section('content')
    <form method="post" action="{{ isset($task) ? route('tasks.update', ['task' => $task]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" @class(['border-red-500' => $errors->has('title')]) value="{{ $task->title ?? old('title') }}"/>
            @error('title')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">
                Description
            </label>
            <textarea name="description" id="description" @class(['border-red-500' => $errors->has('description')]) rows=5>
                {{ $task->description ?? old('description') }}
            </textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">
                Long Description
            </label>
            <textarea rows="5" cols="51" name="long_description" id="long_description" @class(['border-red-500' => $errors->has('long_description')])>
                {{ $task->long_description ?? old('long_description') }}
            </textarea>
            @error('long_description')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div  class="flex gap-2 items-center">
            <button type="submit" class="btn">
                @isset($task)
                    Update
                @else
                    Add
                @endisset
                    Task
            </button>
            <a href="{{ route('tasks.index') }}" class="link">Cancel</a>
        </div>
    </form>
@endsection
