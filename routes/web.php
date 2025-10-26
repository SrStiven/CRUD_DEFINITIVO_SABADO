<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BooksController::class, 'index'])->name('book.index');

Route::post('/guardar', [BooksController::class, 'create'])->name('book.create');

Route::post('/actualizar', [BooksController::class, 'update'])->name('book.update');

Route::get('/edit/{id}', [BooksController::class, 'edit'])->name('book.edit');

Route::get('/delete/{id}', [BooksController::class, 'delete'])->name('book.delete');

Route::get('/libros/export', [BooksController::class, 'exportExcel'])->name('book.export');

Route::post('/libros/import', [BooksController::class, 'importExcel'])->name('book.import');


