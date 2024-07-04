<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one', function () {
    return "Welcome to First Page";
});

Route::get('/two', function () {
    return "Welcome to Second Page";
});

Route::get('/three', function () {
    return "Welcome to Third Page";
});

Route::get('/four', function () {
    return "Welcome to Forth Page";
});

Route::get('/five', function () {
    return "Welcome to Fifth Page";
});