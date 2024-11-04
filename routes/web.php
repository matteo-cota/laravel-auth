<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;


Route::get('/', [ProjectController::class, 'index'])->name('projects.index');


Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', ProjectController::class);
});


Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');