<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PermissionController;
use Illuminate\Support\Facades\Auth;
  
Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();



Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AuthController::class, 'index'])->name('login.view');
});


Route::group(['middleware' => ['auth']], function() {

    Route::get('home', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    #Roles 
    Route::group(['prefix' => 'roles'], function () {
    Route::get('/', [RoleController::class, 'index'])->name('role');
    Route::get('create', [RoleController::class, 'create'])->name('role.create');
    Route::post('create', [RoleController::class, 'store'])->name('role.store');
    Route::get('edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::get('delete/{id}', [RoleController::class, 'destroy'])->name('role.delete');
    });

    #Permission
    Route::group(['prefix' => 'permission'], function () {
        Route::get('/', [PermissionController::class, 'index'])->name('permission');
        Route::get('create', [PermissionController::class, 'create'])->name('permission.create');
        Route::post('create', [PermissionController::class, 'store'])->name('permission.store');
        Route::get('edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
        Route::post('update/{id}', [PermissionController::class, 'update'])->name('permission.update');
        Route::get('delete/{id}', [PermissionController::class, 'destroy'])->name('permission.delete');
        });

    #users
    Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::post('create', [UserController::class, 'store'])->name('user.store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    });

});
