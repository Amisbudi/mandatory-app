<?php

use App\Http\Controllers\Setting\BrandController;
use App\Http\Controllers\Setting\SetupModelController;
use App\Http\Controllers\Setting\CompanyController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Setting\AssetStatusController;
use App\Http\Controllers\Setting\DepartmentController;
use App\Http\Controllers\Setting\ManufactureController;
use App\Http\Controllers\Setting\SupplierController;
use App\Http\Controllers\UserController;
use App\Models\Setting\SetupModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('setting')->group(function () {
    Route::resource('assetstatus', AssetStatusController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('manufacture', ManufactureController::class);
    Route::resource('department', DepartmentController::class);
    route::resource('brands', BrandController::class);
    route::resource('setupModel', SetupModelController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';
