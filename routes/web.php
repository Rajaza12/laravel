<?php
use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/liste', function () {
    return view('liste');
})->name('liste');


Route::get('/inscription', [InscriptionController::class, 'create'])->name('inscription.create');
Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');


    Route::get('/inscriptions', [InscriptionController::class, 'index'])->name('inscription.index');


require __DIR__.'/auth.php';
