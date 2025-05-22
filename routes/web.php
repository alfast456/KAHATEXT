<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Components\PackageNameComponent;
use App\Http\Livewire\Components\LivewireBlade;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\TLSController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Contracts\Queue\Monitor;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
Route::get('/dashboard', MonitoringController::class)->name('dashboard');

Route::middleware(['auth', RoleMiddleware::class . ':user'])->group(function () {
    Route::get('/dashboard/user', UserController::class)->name('dashboard.user');
    // tambahkan route lain untuk user
});

Route::middleware(['auth', RoleMiddleware::class . ':monitoring'])->group(function () {
    Route::get('/dashboard/monitoring', MonitoringController::class)->name('dashboard.monitoring');
    Route::get('/kronologi', [TLSController::class, 'index'])->name('kronologi');
    // tambahkan route lain untuk user
});
require __DIR__.'/auth.php';