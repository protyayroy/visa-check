<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplyController;
use Illuminate\Support\Facades\Route;

//-------------       VIEW LOGIN PAGE AND GET LOGIN REQUEST FOR ADMIN
Route::match(['get', 'post'], 'admin', [AdminController::class, 'login'])->name('admin.login');

Route::prefix('admin')->group(function () {


    Route::middleware('auth')->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

        // VIEW PROFILE
        Route::view('profile', 'admin.profile.view_profile')->name('profile');

        // UPDATE ADMIN PROFILE IMAGE
        Route::post('upload-image', [AdminController::class, 'uploadImage'])->name('profile.image.update');

        // VIEW UPDATE PROFILE PAGE
        Route::view('update-profile', 'admin.profile.update_profile')->name('profile.edit');

        // UPDATE ADMIN PROFILE
        Route::post('update-own-profile', [AdminController::class, 'updateProfile'])->name('profile.update');

        // UPDATE ADMIN PROFILE
        Route::post('change-password', [AdminController::class, 'changePassword'])->name('profile.password.update');


        Route::get('/visa-application', [AdminController::class, 'application'])->name('application');

        Route::get('delete-application/{application}', [AdminController::class, 'distroyApplication'])->name('delete.application');

        Route::get('visa-approve-list', [AdminController::class, 'approveList'])->name('approve.list');

        Route::view('add-approval', 'admin.application.add_approval')->name('create.approval');

        Route::post('create-approval', [AdminController::class, 'storeApproval'])->name('store.approval');

        Route::get('edit-approval/{id}', [AdminController::class, 'showApproval'])->name('show.approval');

        Route::post('update-approval/{id}', [AdminController::class, 'editApproval'])->name('edit.approval');

        Route::get('delete-approval/{visa_approve}', [AdminController::class, 'distroy'])->name('delete.approval');

    });
});




Route::get('/', function () {
    return view('front_end.index');
})->name('index');
Route::get('Apply', function () {
    return view('front_end.apply');
})->name('apply');
Route::get('Check-Information', function () {
    return view('front_end.check');
})->name('check_info');
Route::get('About', function () {
    return view('front_end.about');
})->name('about');
Route::get('Government-Information', function () {
    return view('front_end.government');
})->name('gov_info');
Route::get('Visa-Passport', function () {
    return view('front_end.visapassports');
})->name('visa_passport');
Route::get('Education', function () {
    return view('front_end.education');
})->name('education');
Route::get('Media', function () {
    return view('front_end.media');
})->name('media');
Route::get('Contact', function () {
    return view('front_end.contact');
})->name('contact');
Route::get('Invest-Namibia', function () {
    return view('front_end.investinnamibia');
})->name('invest');

Route::post('visa-apply', [ApplyController::class, 'create'])->name('apply.create');
Route::get('check-visa', [ApplyController::class, 'check'])->name('check.visa');
