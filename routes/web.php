<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello World!';
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello '.$name.'!';
});
