<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ProjectsController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\CertificationController;
// Admin Dashboard
Route::get('/', function () {
    
    return view('admin.index');
})->name('dashboard');

// Users Management
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    // Add more user routes here as needed
});
Route::prefix('contacts')->name('contacts.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
});
Route::prefix('projects')->group(function () {
    Route::get('/',[ProjectsController::class,'index'])->name('projects.index');
    Route::get('/create',[ProjectsController::class,'create'])->name('projects.create');
    Route::post('/store',[ProjectsController::class,'store'])->name('projects.store');
    Route::get('/edit/{id}',[ProjectsController::class,'edit'])->name('projects.edit');
    Route::post('/update/{id}',[ProjectsController::class,'update'])->name('projects.update');
    Route::post('/delete/{id}',[ProjectsController::class,'delete'])->name('projects.delete');
});
Route::prefix('education')->group(function () {
    Route::get('/',[EducationController::class,'index'])->name('education.index');
    Route::get('/create',[EducationController::class,'create'])->name('education.create');
    Route::post('/store',[EducationController::class,'store'])->name('education.store');
    Route::get('/edit/{id}',[EducationController::class,'edit'])->name('education.edit');
    Route::post('/update/{id}',[EducationController::class,'update'])->name('education.update');
    Route::post('/delete/{id}',[EducationController::class,'delete'])->name('education.delete');
});
Route::prefix('certifications')->group(function () {
    Route::get('/',[CertificationController::class,'index'])->name('certifications.index');
    Route::get('/create',[CertificationController::class,'create'])->name('certifications.create');
    Route::post('/store',[CertificationController::class,'store'])->name('certifications.store');
    Route::get('/edit/{id}',[CertificationController::class,'edit'])->name('certifications.edit');
    Route::post('/update/{id}',[CertificationController::class,'update'])->name('certifications.update');
    Route::post('/delete/{id}',[CertificationController::class,'delete'])->name('certifications.delete');
});