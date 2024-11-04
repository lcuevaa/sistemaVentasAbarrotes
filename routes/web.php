<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('plantilla');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/401', function () {
    return view('pages.401'); //Cuando el acceso esta denegado
});

Route::get('/404', function () {
    return view('pages.404'); //Cuando no se encuentra el recurso
});

Route::get('/500', function () {
    return view('pages.500'); //
});
