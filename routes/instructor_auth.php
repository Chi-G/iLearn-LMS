<?php

use App\Http\Controllers\Instructor\Auth\InstructorLoginController;
use App\Http\Controllers\Instructor\Auth\InstructorConfirmablePasswordController;
use App\Http\Controllers\Instructor\Auth\InstructorEmailVerificationNotificationController;
use App\Http\Controllers\Instructor\Auth\InstructorEmailVerificationPromptController;
use App\Http\Controllers\Instructor\Auth\InstructorNewPasswordController;
use App\Http\Controllers\Instructor\Auth\InstructorPasswordController;
use App\Http\Controllers\Instructor\Auth\InstructorPasswordResetLinkController;
use App\Http\Controllers\Instructor\Auth\InstructorRegisteredUserController;
use App\Http\Controllers\Instructor\Auth\InstructorVerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::prefix('instructor')->middleware('guest:instructor')->group(function () {
    Route::get('/register', [InstructorRegisteredUserController::class, 'create'])
        ->name('instructor.register');

    Route::post('/register', [InstructorRegisteredUserController::class, 'store']);

    Route::get('/login', [InstructorLoginController::class, 'create'])
        ->name('instructor.login');

    Route::post('/login', [InstructorLoginController::class, 'store']);

    Route::get('/forgot-password', [InstructorPasswordResetLinkController::class, 'create'])
        ->name('instructor.password.request');

    Route::post('/forgot-password', [InstructorPasswordResetLinkController::class, 'store'])
        ->name('instructor.password.email');

    Route::get('/reset-password/{token}', [InstructorNewPasswordController::class, 'create'])
        ->name('instructor.password.reset');

    Route::post('/reset-password', [InstructorNewPasswordController::class, 'store'])
        ->name('instructor.password.store');
});

Route::prefix('instructor')->middleware('auth:instructor')->group(function () {
    Route::get('/verify-email', InstructorEmailVerificationPromptController::class)
        ->name('instructor.verification.notice');

    Route::get('verify-email/{id}/{hash}', InstructorVerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('instructor.verification.verify');

    Route::post('email/verification-notification', [InstructorEmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('instructor.verification.send');

    Route::get('confirm-password', [InstructorConfirmablePasswordController::class, 'show'])
        ->name('instructor.password.confirm');

    Route::post('confirm-password', [InstructorConfirmablePasswordController::class, 'store']);

    Route::put('password', [InstructorPasswordController::class, 'update'])->name('instructor.password.update');

    Route::get('/dashboard', function () {
        return view('instructor.instructor_dashboard');
    })->name('instructor.dashboard');

    Route::post('logout', [InstructorLoginController::class, 'destroy'])
        ->name('instructor.logout');
});
