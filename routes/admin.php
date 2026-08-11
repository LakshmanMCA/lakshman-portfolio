<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ProjectsController;
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