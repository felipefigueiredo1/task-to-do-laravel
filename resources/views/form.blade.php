@extends('layouts.app')

@section('title', (isset($task) ? 'Edit' : 'Add') . ' Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    @error('title')
        {{$errors}}
    @enderror
    <form method="post" action="{{ isset($task) ? route('tasks.update', ['task' => $task]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}"/>
            @error('title')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">
                Description
            </label>
            <textarea name="description" id="description" rows=5>
                {{ $task->description ?? old('description') }}
            </textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">
                Long Description
            </label>
            <textarea rows="5" cols="51" name="long_description" id="long_description">
                {{ $task->long_description ?? old('long_description') }}
            </textarea>
            @error('long_description')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">
            @isset($task)
                Update
            @else
                Add
            @endisset
                Task
        </button>
    </form>
@endsection
