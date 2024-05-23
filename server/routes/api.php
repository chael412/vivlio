<?php

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\StudentAttendanceController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/hello', function () {
        return response()->json(['message' => 'Hello, World!', 'name' => "pogi ako"]);
    });
});

// ==================================== Course ===================================
Route::resource('courses', CourseController::class);


// ==================================== Login ===================================
Route::get('/generateToken', [AdminController::class, 'generateToken']);

// ==================================== Admin ===================================
Route::resource('admins', AdminController::class);

// ==================================== Employee ==================================
Route::resource('employees', EmployeeController::class);

// ==================================== Department =================================
Route::resource('departments', DepartmentController::class);

// ==================================== Student attendance ==========================
Route::resource('student_attendances', StudentAttendanceController::class);

// ==================================== Student ===================================
Route::resource('students', StudentController::class);

// ==================================== Book ===================================
Route::resource('books', BookController::class);

// ==================================== Author ===================================
Route::resource('authors', AuthorController::class);
