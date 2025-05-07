<?php

use Illuminate\Support\Facades\Route;

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
