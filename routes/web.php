<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfile;

Route::get('/', function () {
    return view('welcome');
});


Route::view('home', 'home');


Route::view('dashboard','dashboard');

Route::view('article','article');



Route::get('/dashboard', function () {
    return view('dashboard'); // Return the 'dashboard' view
})->name('dashboard');

Route::get('/profiles', [UserProfile::class,'users'])->name('profiles');


Route::get('/article', function () {
    return view('article'); // Return the 'dashboard' view
})->name('article');

Route::get('/alluser', function () {
    return view('alluser'); // Return the 'dashboard' view
})->name('alluser');