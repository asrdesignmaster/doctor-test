<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



Route::get('/admin/dashboard',[AdminController::class, 'loadAdminDashboard'])
    ->name('admin-dashbaord')
    ->middleware('Admin');


Route::get('/doctor/dashboard',[DoctorController::class, 'loadDoctorDashboard'])
    ->name('doctor-dashbaord')
    ->middleware('Doctor');


require __DIR__.'/auth.php';
