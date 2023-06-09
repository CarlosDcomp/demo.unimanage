<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index']);

// CRUD Projetos
Route::get('/projetos', [SiteController::class, 'projects'])->name('projetos.index');
Route::post('/projetos', [SiteController::class, 'storeProject']);
Route::get('/projetos/{id}/edit', [SiteController::class, 'editProject'])->name('projetos.edit');
Route::put('/projetos/update/{id}', [SiteController::class, 'updateProject'])->name('projetos.update');
Route::delete('/projetos/delete/{id}', [SiteController::class, 'deleteProject'])->name('projetos.delete');

// CRUD Eventos
Route::get('/eventos', [SiteController::class, 'events'])->name('eventos.index');
Route::get('/eventos/{id}/edit', [SiteController::class, 'editEvent'])->name('eventos.edit');
Route::put('/eventos/update/{id}', [SiteController::class, 'updateEvent'])->name('eventos.update');
Route::delete('/eventos/delete/{id}', [SiteController::class, 'deleteEvent'])->name('eventos.delete');
Route::post('/eventos', [SiteController::class, 'storeEvent']);


Route::get('/tarefas', [SiteController::class, 'tasks'])->name('tarefas.index');
Route::get('/tarefas/{id}/edit', [SiteController::class, 'editTask'])->name('tarefas.edit');
Route::put('/tarefas/update/{id}', [SiteController::class, 'updateTask'])->name('tarefas.update');
Route::delete('/tarefas/delete/{id}', [SiteController::class, 'deleteTask'])->name('tarefas.delete');
Route::post('/tarefas', [SiteController::class, 'storeTask']);
