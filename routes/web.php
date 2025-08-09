<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use Illuminate\Container\Attributes\Log;

Route::get('/', function (){

return view('home');

})->name('home');

Route::get('/categories', function(){

    return view('categories');
});

Route::get('/blog', function(){

    return view('blog.index');

})->name('blog.index');

Route::get('/profile', function(){

    return view('profile');

})->name('profile');


Route::get('/about', function(){

    return view('about');

})->name('about');


Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');



