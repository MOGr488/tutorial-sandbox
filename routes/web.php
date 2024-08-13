<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $name='Laravel';
    return view('welcome');
});

