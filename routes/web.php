<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (Auth::guard('admin')->check()) {
        return redirect()->route('admin.dashboard');
    } elseif (Auth::guard('instructor')->check()) {
        return redirect()->route('instructor.dashboard');
    } elseif (Auth::guard('web')->check()) {
        return redirect()->route('student.dashboard');
    } else {
        return redirect()->route('login');
    }
})->name('dashboard')->middleware('auth');

Route::get('/student/dashboard', function () {
    return view('student_dashboard');
})->middleware(['auth', 'verified'])->name('student.dashboard');

Route::get('/instructor/dashboard', function () {
    return view('instructor.instructor_dashboard');
})->middleware(['auth', 'verified'])->name('instructor.dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.admin_dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin_auth.php';
require __DIR__.'/instructor_auth.php';
