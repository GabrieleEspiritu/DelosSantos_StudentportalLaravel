<?php

// This file defines all the URLs (routes) that users can visit in the application.

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Home route - shows the homepage when user visits /
Route::get('/', function () {
    return view('home');
})->name('home');

// Shows all students when user visits /students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Shows the form to create a new student when user visits /students/create
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Shows details of one student - {id} is the student ID (e.g., /students/1)
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

// Shows the form to edit a student - {id} is the student ID (e.g., /students/1/edit)
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');