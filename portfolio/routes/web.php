<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');

Route::get('/project/create', [ProjectsController::class, 'create'])->name('projects.create');

Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');

Route::get('/project/{project}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');

Route::post('/project/create', [ProjectsController::class, 'store'])->name('projects.store');

Route::put('/project/{project}/update', [ProjectsController::class, 'update'])->name('projects.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';