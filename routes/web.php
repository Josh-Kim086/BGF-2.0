<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');


Route::get('/projects/kiambere', function () {
    return view('kiambere');
})->name('projects.kiambere');

Route::get('/projects/kiambere-agroforestry', function () {
    return view('kiambere-agroforestry');
})->name('projects.kiambere-agroforestry');

Route::get('/projects/nyongoro', function () {
    return view('nyongoro');
})->name('projects.nyongoro');

Route::get('/projects/seven-forks', function () {
    return view('seven-forks');
})->name('projects.seven-forks');

Route::get('/projects/dokolo', function () {
    return view('dokolo');
})->name('projects.dokolo');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/plantations', function () {
    return view('plantations');
})->name('plantations');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');


use App\Http\Controllers\ContactMessageController;

Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');



