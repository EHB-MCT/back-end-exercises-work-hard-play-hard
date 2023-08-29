<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('jobs', [\App\Http\Controllers\JobController::class, 'index'])->name('jobs.index');
Route::get('jobs/{vacancy}', [\App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');
Route::get('vacancies/create', [\App\Http\Controllers\JobController::class, 'create'])->name('vacancies.create');
Route::post('vacancies/store', [\App\Http\Controllers\JobController::class, 'store'])->name('vacancies.store');
