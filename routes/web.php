<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', [NoteController::class, 'index'])->name('page.note.index');

Route::get('/create', [NoteController::class, 'create'])->name('page.note.create');
Route::post('/store', [NoteController::class, 'store'])->name('page.note.store');

// SHOW NOTE
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('pages.note.show');

// EDIT NOTE
Route::get('/edit/{note}', [NoteController::class, 'edit'])->name('pages.note.edit');
Route::put('/update/{note}', [NoteController::class, 'update'])->name('pages.note.update');

// DELETE NOTE
Route::delete('/delete/{note}', [NoteController::class, 'destroy'])->name('pages.note.destroy');
