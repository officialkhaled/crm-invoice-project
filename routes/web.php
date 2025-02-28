<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Auth\LoginController;

Route::fallback(function () {
    return view('errors.error-404');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => '/login', 'as' => 'login.'], function () {
    Route::get('google', [LoginController::class, 'redirectToGoogle'])->name('google');
    Route::get('google/callback', [LoginController::class, 'handleGoogleCallback']);

    Route::get('github', [LoginController::class, 'redirectToGithub'])->name('github');
    Route::get('github/callback', [LoginController::class, 'handleGithubCallback']);
});

Route::group(['middleware' => ['role:super-admin|admin']], function () {
    Route::resource('permissions', PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

    Route::resource('users', UserController::class);
    Route::get('users/{userId}/delete', [UserController::class, 'destroy']);

    Route::group(['prefix' => 'customers', 'as' => 'customers.'], function () {
        Route::get('', [CustomerController::class, 'index'])->name('index');
        Route::get('create', [CustomerController::class, 'create'])->name('create');
        Route::post('/', [CustomerController::class, 'store'])->name('store');
        Route::get('{customer}/edit', [CustomerController::class, 'edit'])->name('edit');
        Route::put('{customer}', [CustomerController::class, 'update'])->name('update');
        Route::delete('{customer}', [CustomerController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'leads', 'as' => 'leads.'], function () {
        Route::get('', [LeadController::class, 'index'])->name('index');
        Route::get('create', [LeadController::class, 'create'])->name('create');
        Route::post('/', [LeadController::class, 'store'])->name('store');
        Route::get('{lead}/edit', [LeadController::class, 'edit'])->name('edit');
        Route::put('{lead}', [LeadController::class, 'update'])->name('update');
        Route::delete('{lead}', [LeadController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function () {
        Route::get('', [TaskController::class, 'index'])->name('index');
        Route::get('create', [TaskController::class, 'create'])->name('create');
        Route::post('/', [TaskController::class, 'store'])->name('store');
        Route::get('{task}/edit', [TaskController::class, 'edit'])->name('edit');
        Route::put('{task}', [TaskController::class, 'update'])->name('update');
        Route::delete('{task}', [TaskController::class, 'destroy'])->name('destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
