<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {

// });
Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/portfolio", [HomeController::class, 'profil'])->name('portfolio');
Route::get("/contacter", [HomeController::class, 'contact'])->name('join');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::resource('formation', 'App\Http\Controllers\FormationController');
    route::resource('experience', 'App\Http\Controllers\ExperienceController');
    route::resource('skill', 'App\Http\Controllers\SkillController');
    route::resource('contact', 'App\Http\Controllers\ContactController');
});

require __DIR__ . '/auth.php';
