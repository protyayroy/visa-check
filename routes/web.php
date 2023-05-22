<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Admin/Login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/', function () { return view('front_end.index'); })->name('index');
Route::get('/Apply', function () { return view('front_end.apply'); })->name('apply');
Route::get('/Check-Information', function () { return view('front_end.check'); })->name('check_info');
Route::get('/About', function () { return view('front_end.about'); })->name('about');
Route::get('/Government-Information', function () { return view('front_end.government'); })->name('gov_info');
Route::get('/Visa-Passport', function () { return view('front_end.visapassports'); })->name('visa_passport');
Route::get('/Education', function () { return view('front_end.education'); })->name('education');
Route::get('/Media', function () { return view('front_end.media'); })->name('media');
Route::get('/Contact', function () { return view('front_end.contact'); })->name('contact');
Route::get('/Invest-Namibia', function () { return view('front_end.investinnamibia'); })->name('invest');
