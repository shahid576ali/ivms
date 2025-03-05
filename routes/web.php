<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('home', 'home');


Route::view('dashboard','dashboard');
Route::view('profile','profile');
Route::view('article','article');



Route::get('/dashboard', function () {
    return view('dashboard'); // Return the 'dashboard' view
})->name('dashboard');

Route::get('/profiles', function () {
    return view('profiles'); // Return the 'dashboard' view
})->name('profiles');


Route::get('/article', function () {
    return view('article'); // Return the 'dashboard' view
})->name('article');

Route::get('/alluser', function () {
    return view('alluser'); // Return the 'dashboard' view
})->name('alluser');