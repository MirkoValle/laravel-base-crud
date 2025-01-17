<?php

use App\Http\Controllers\AnimalController;
use App\Models\Animal;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AnimalController::class, 'index'])->name('animals.index');
Route::post('/', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/create', [AnimalController::class, 'create'])->name('animals.create');
Route::get('/show/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
Route::put('/show/{animal}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');