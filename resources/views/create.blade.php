@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    @error('title')
        {{$errors}}
    @enderror
    <form method="post" action="/tasks">
        @csrf

        <div>
            <label for="title">
                Title
            </label>
            <input name="title" id="title">
        </div>

        <div>
            <label for="description">
                Description
            </label>
            <input name="description" id="description">
        </div>

        <div>
            <label for="long_description">
                Long Description
            </label>
            <textarea rows="5" cols="51" name="long_description" id="long_description"></textarea>
        </div>

        <button type="submit">Send</button>
    </form>
@endsection
