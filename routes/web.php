<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [HomeController::class,'showAbout']);
Route::get('/service', [HomeController::class,'showService']);
Route::get('/service/{id}',[HomeController::class, 'viewService'])->name('view.service');
Route::get('/contact', [HomeController::class,'showContact']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/addservices', [ServiceController::class, 'addService'])->name('add.service');
    Route::post('/store/service', [ServiceController::class, 'storeService'])->name('store.service');
    Route::get('/all-services', [ServiceController::class, 'allServices'])->name('all.services');
    Route::get('/edit/service/{id}', [ServiceController::class, 'editService'])->name('edit.services');
    Route::put('/update/service/{id}', [ServiceController::class, 'updateService'])->name('update.service');
    Route::delete('/delete/service/{id}', [ServiceController::class, 'deleteService'])->name('delete.service');
});

require __DIR__.'/auth.php';
