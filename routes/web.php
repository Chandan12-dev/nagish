<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddNewSite;
use App\Http\Controllers\ListWebsite;
use App\Http\Controllers\WidgetsettingController;
use App\Http\Controllers\ImageController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// webSite Data will be store in this section
Route::post('/website/update',[AddNewSite::class,'submitsite']);
Route::post('/dashboard',[AddNewSite::class,'submitsite']);

// Upload Image and get path only
Route::post('/imageUpload',[ImageController::class,'store']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // webSite Data will be store in this section
    Route::get('/website',[AddNewSite::class,'index']);
    Route::get('/website/{id}',[AddNewSite::class,'show']);

    // Site Setting Data will be store in this section
    Route::get('/widgetsettingall', [WidgetsettingController::class, 'index']);
    Route::get('/widgetsettingbyid/{id}', [WidgetsettingController::class, 'show']);
    Route::get('/widgetsettingbysiteid/{site_id}', [WidgetsettingController::class, 'ShowBySiteId']);
    Route::post('/add-widgetsettings', [WidgetsettingController::class, 'store']);
    Route::post('/update-widgetsettings/{id}', [WidgetsettingController::class, 'update']);
});

require __DIR__.'/auth.php';
