<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SetHalController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;

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
// Route::get('/', [DepanController::class, 'index']);
Auth::routes();
Route::get('/home', [HomeController::class, 'dashboard'])->name('home');


//Portofolio
Route::get('/index2', [DepanController::class, 'index2'])->name('depan.index2');

//Halaman
Route::get('/halaman', [HalamanController::class, 'index'])->name('halaman.index');
Route::get('/halaman/tambah', [HalamanController::class, 'create'])->name('halaman.create');
Route::post('/halaman/store', [HalamanController::class, 'store'])->name('halaman.store');
Route::get('/halaman/edit/{halaman}', [HalamanController::class, 'edit'])->name('halaman.edit');
Route::post('/halaman/update/{halaman}', [HalamanController::class, 'update'])->name('halaman.update');
Route::delete('/halaman/delete/{halaman}', [HalamanController::class, 'destroy'])->name('halaman.destroy');

//experience
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience.index');
Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
Route::get('/experience/edit/{experience}', [ExperienceController::class, 'edit'])->name('experience.edit');
Route::post('/experience/update/{experience}', [ExperienceController::class, 'update'])->name('experience.update');
Route::delete('/experience/delete/{experience}', [ExperienceController::class, 'destroy'])->name('experience.destroy');

//education
Route::get('/education', [EducationController::class, 'index'])->name('education.index');
Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');
Route::get('/education/edit/{experience}', [EducationController::class, 'edit'])->name('education.edit');
Route::post('/education/update/{experience}', [EducationController::class, 'update'])->name('education.update');
Route::delete('/education/delete/{experience}', [EducationController::class, 'destroy'])->name('education.destroy');

//skill
Route::get('/skill', [SkillController::class, 'index'])->name('skill.index');
Route::post('/skill/update', [SkillController::class, 'update'])->name('skill.update');

//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

//pengaturan halaman
Route::get('/sethal', [SetHalController::class, 'index'])->name('sethal.index');
Route::post('/sethal/update', [SetHalController::class, 'update'])->name('sethal.update');