<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Ca\Companies\AddCompany;
use App\Http\Livewire\Ca\Companies\ViewCompanies;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Company
    Route::get('cmpView', ViewCompanies::class)->name('company.view');
    Route::get('cmpAdd', AddCompany::class)->name('company.add');
    Route::get('viewIndCmp/{company_id?}', AddCompany::class)->name('company.viewIndCmp');
    Route::put('cmpEdit', AddCompany::class)->name('company.edit');
    Route::delete('cmpPurge', AddCompany::class)->name('company.destroy');
    // Profile    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
