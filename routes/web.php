<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/home', [homeController::class, 'index'])->name('homepage');
Route::get('/profile', [profileController::class, 'index'])->name('profiles');;
Route::get('/profile/{id}', [profileController::class, 'details'])->name('profiledetails');;
Route::get('/settings', [settingsController::class, 'index']);

