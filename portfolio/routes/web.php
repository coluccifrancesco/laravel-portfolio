<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Get - Projects
Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');

Route::get('/project/create', [ProjectsController::class, 'create'])->name('projects.create');

Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');

Route::get('/project/{project}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');

Route::get('/project/{project}/areyousure', [ProjectsController::class, 'sureOfDestroy'])->name('projects.sureOfDestroy');


// Get - Categories
Route::get('/category', [CategoriesController::class, 'index'])->name('categories.index');

Route::get('/category/create', [CategoriesController::class, 'create'])->name('categories.create');

Route::get('/category/{category}', [CategoriesController::class, 'show'])->name('categories.show');

Route::get('/category/{category}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');

Route::get('/category/{category}/areyousure', [CategoriesController::class, 'sureOfDestroy'])->name('categories.sureOfDestroy');


// Get - Tags
Route::get('/tech', [TagsController::class, 'index'])->name('tags.index');

Route::get('/tech/create', [TagsController::class, 'create'])->name('tags.create');

Route::get('/tech/{tag}', [TagsController::class, 'show'])->name('tags.show');

Route::get('/tech/{tag}/edit', [TagsController::class, 'edit'])->name('tags.edit');

Route::get('/tech/{tag}/areyousure', [TagsController::class, 'sureOfDestroy'])->name('tags.sureOfDestroy');

// Post - Projects
Route::post('/project/create', [ProjectsController::class, 'store'])->name('projects.store');

// Post - Categories
Route::post('/category/create', [CategoriesController::class, 'store'])->name('categories.store');

// Post - Tags
Route::post('/tech/create', [TagsController::class, 'store'])->name('tags.store');


// Put - Projects
Route::put('/project/{project}', [ProjectsController::class, 'update'])->name('projects.update');

// Put - Categories
Route::put('/category/{category}', [CategoriesController::class, 'update'])->name('categories.update');

// Put - Tags
Route::put('/tech/{tag}', [TagsController::class, 'update'])->name('tags.update');


// Delete - Projects
Route::delete('/project/{project}/destroy', [ProjectsController::class, 'destroy'])->name('projects.destroy');

// Delete - Category
Route::delete('/category/{category}/destroy', [CategoriesController::class, 'destroy'])->name('categories.destroy');

// Delete - Tags
Route::delete('/tech/{tag}/destroy', [TagsController::class, 'destroy'])->name('tags.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';