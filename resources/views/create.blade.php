@extends('layouts.app')

@section('title', 'Add Task')

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
    <form method="post" action="{{ route('tasks.store') }}">
        @method('POST')
        @csrf

        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" value="{{ old('title') }}"/>
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">
                Description
            </label>
            <textarea name="description" id="description" rows=5>{{ old('description') }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">
                Long Description
            </label>
            <textarea rows="5" cols="51" name="long_description" id="long_description">{{ old('long_description') }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Send</button>
    </form>
@endsection
