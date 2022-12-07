<?php


use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


Route::prefix('admin')->middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('students.edit');
    Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::get('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('/teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/show/{id}', [TeacherController::class, 'show'])->name('teachers.edit');
    Route::post('/teachers/update/{id}', [TeacherController::class, 'update'])->name('teachers.update');
    Route::get('/teachers/destroy/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::post('/announcements/store', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/announcements/show/{id}', [AnnouncementController::class, 'show'])->name('announcements.edit');
    Route::post('/announcements/update/{id}', [AnnouncementController::class, 'update'])->name('announcements.update');
});


require __DIR__.'/auth.php';
