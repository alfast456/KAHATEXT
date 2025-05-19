<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringController;
use App\Http\Livewire\Components\PackageNameComponent;
use App\Http\Livewire\Components\LivewireBlade;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', [MonitoringController::class, 'index'])
    ->name('dashboard')
    ->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';