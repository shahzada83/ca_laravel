<?php

use App\Livewire\Ca\Roc\ViewRoc;
use Illuminate\Support\Facades\Route;

use App\Livewire\Ca\Companies\CuCompany;
use App\Http\Controllers\ProfileController;
use App\Livewire\Ca\Companies\ViewCompanies;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Company
    Route::get('cmpView', ViewCompanies::class)->name('company.view');
    Route::get('cmpAdd', CuCompany::class)->name('company.add');
    Route::get('viewIndCmp/{company_id?}', CuCompany::class)->name('company.viewIndCmp');
    Route::get('cmpEdit/{companyID}', CuCompany::class)->name('company.edit');
    Route::delete('cmpPurge', CuCompany::class)->name('company.destroy');
    // Users

    // Settings
    Route::get('roc', ViewRoc::class)->name('company.roc');
    // Profile    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
