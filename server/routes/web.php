<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/books', function () {
    return view('admin.books');
})->name('books');

Route::get('/account', function () {
    return view('admin.account');
})->name('account');

Route::get('/attendance', function () {
    return view('attendance.attendance');
})->name('attendance');

Route::get('/students', function () {
    return view('admin.students');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
