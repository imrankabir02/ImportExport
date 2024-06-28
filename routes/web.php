<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\RatingController;

Route::get('/ratings', [RatingController::class, 'index'])->name('ratings.index');
Route::get('/ratings/upload', [RatingController::class, 'showUploadForm'])->name('ratings.upload');
Route::post('/ratings/import', [RatingController::class, 'import'])->name('ratings.import');
Route::get('/ratings/export/csv', [RatingController::class, 'exportCsv'])->name('ratings.export.csv');
Route::get('/ratings/export/pdf', [RatingController::class, 'exportPdf'])->name('ratings.export.pdf');

Route::get('/', function () {
    return view('welcome');
});
