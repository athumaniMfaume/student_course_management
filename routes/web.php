<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    $students = Student::all();
    return view('students.view_student',compact('students'));
});


Route::get('students/create', [StudentController::class,'create'])->name('students.create');
Route::post('students/store', [StudentController::class,'store'])->name('students.store');
Route::get('students/index', [StudentController::class,'index'])->name('students.index');
Route::get('students/edit/{student}', [StudentController::class,'edit'])->name('students.edit');
Route::post('students/update/{student}', [StudentController::class,'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('courses/create', [CourseController::class,'create'])->name('courses.create');
Route::post('courses/store', [CourseController::class,'store'])->name('courses.store');
Route::get('courses/index', [CourseController::class,'index'])->name('courses.index');
Route::get('courses/edit/{course}', [CourseController::class,'edit'])->name('courses.edit');
Route::post('courses/update/{course}', [CourseController::class,'update'])->name('courses.update');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

Route::get('enrollments/create', [EnrollController::class,'create'])->name('enroll.create');
Route::post('enrollments/store', [EnrollController::class,'store'])->name('enroll.store');
Route::get('enrollments/index', [EnrollController::class,'index'])->name('enroll.index');
Route::get('enroll/edit/{enroll}', [EnrollController::class,'edit'])->name('enroll.edit');
Route::put('courses/update/{enroll}', [EnrollController::class,'update'])->name('enroll.update');
Route::delete('/courses/{course_id}/remove-student/{student_id}', [EnrollController::class, 'destroy'])->name('enroll.destroy');

