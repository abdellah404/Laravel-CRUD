<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/home', [homeController::class, 'index'])->name('homepage');
Route::get('/profiles', [profileController::class, 'index'])->name('profiles');;
Route::get('/profile/{id}', [profileController::class, 'details'])->name('profiledetails');
Route::get('/settings', [settingsController::class, 'index']);
Route::get('/profiles/create', [profileController::class, 'create'])->name('create');
Route::post('/profiles/store', [profileController::class, 'store'])->name('store');


