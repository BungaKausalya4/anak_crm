<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
})->name('dashboardadmin');

Route::get('/dashboardparamedic', function () {
    return view('dashboardparamedic');
})->name('dashboardparamedic');

Route::get('/', function () {
    return view('chooseuser');
});
