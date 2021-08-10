<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*// LISTAGEM TOTAL (INDEX)
 Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
// CRIAÇÃO (CREATE/STORE)
 Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
 Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
// VIZUALIZAÇÃO ÚNICA (SHOW)
 Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
// ATUALIZAÇÃO (EDIT/PUT/PATCH)
 Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
 Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
// DELETE (DELETE)
 Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');*/

Route::resource('tasks', TaskController::class);

