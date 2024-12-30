<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
// Route::get('/', [WelcomeController::class,'welcome'])->name('welcome');
Route::redirect('/', '/note');

// Route::get('/note', [NoteController::class,'index'])->name('note.index');//display all
// Route::get('/note/create', [NoteController::class,'create'])->name('note.create');//display create form
// Route::post('/note', [NoteController::class,'store'])->name('note.store');//action insert
// Route::get('/note/{id}', [NoteController::class,'show'])->name('note.show');//show one note
// Route::get('/note/{id}/edit', [NoteController::class,'edit'])->name('note.edit');//show one note edit form
// Route::put('/note/{id}', [NoteController::class,'update'])->name('note.update');//action update
// Route::delete('/note/{id}', [NoteController::class,'destroy'])->name('note.destroy');//action delete

Route::resource('note', NoteController::class);