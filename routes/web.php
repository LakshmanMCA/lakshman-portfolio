<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\Web\AboutController;
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
//     return view('web.index');
// });

Route::get('/mail', function () {
    return view('web.mail');
});
// Admin Routes
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        require __DIR__.'/admin.php';
    });
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/hire-me',[ContactController::class,'hireMe'])->name('hire-me');
Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');
Route::get('/about',[AboutController::class,'index'])->name('about');
