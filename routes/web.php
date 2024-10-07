<?php

use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Models\Roles;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PermissionController;
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () { 
    Route::resource('/roles', RolesController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/users', UserController::class);
});
