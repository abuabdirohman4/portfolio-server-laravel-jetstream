<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SkillsController;
use App\Livewire\Skills;
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
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('skills', [SkillsController::class, 'index'])->name('skills');
    // Route::get('skills', [Skills::class, 'render'])->name('skills');
    Route::get('skills', function () {return view('skills');})->name('skills');
    Route::get('contact', function () {
        return view('pages.crud.index');
    });
});
