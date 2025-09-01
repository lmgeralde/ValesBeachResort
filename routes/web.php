<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserManagementController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsStaff;

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

Route::get('/', [AuthenticatedSessionController::class, 'create']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/staff/{user}/edit', [UserManagementController::class, 'edit'])->name('admin.staff.edit');
    Route::post('/admin/staff', [UserManagementController::class, 'storeStaff'])->name('admin.staff.store');
    Route::patch('/admin/staff/{user}', [UserManagementController::class, 'updateStaff'])->name('admin.staff.update');
    Route::delete('/admin/staff/{user}', [UserManagementController::class, 'deactivateStaff'])->name('admin.staff.deactivate');
    Route::delete('/admin/staff/delete/{user}', [UserManagementController::class, 'destroy'])->name('admin.staff.destroy');
});

// Staff routes
Route::middleware(['auth', IsStaff::class])->group(function () {
    Route::get('/staff/dashboard', [DashboardController::class, 'index'])->name('staff.dashboard');
});


Route::post('/login', [AuthenticatedSessionController::class, 'validateUser'])->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


require __DIR__.'/auth.php';