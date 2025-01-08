<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Ispo;
use App\Http\Middleware\RoleMiddleware; 
use Illuminate\Support\Facades\Route;

Route::aliasMiddleware('role', RoleMiddleware::class);

Route::get('/', [Ispo::class, 'landingPage'])->name('landingPage');
Route::get('/login', [AuthController::class, 'login'])->name('loginPage');
Route::get('/register', [AuthController::class, 'register'])->name('registerPage');
Route::get('/dashboard', [Ispo::class, 'dashboard'])->name('dashboardPage');
Route::get('/identityForm', [Ispo::class, 'identity'])->name('identityForm');
Route::put('/identity/{slug}', [Ispo::class, 'submittedIdentity'])->name('submittedIdentity');
Route::get('/plantationForm', [Ispo::class, 'plantation'])->name('plantationForm');
Route::post('/createdPalntationForm', [Ispo::class, 'createdPlantation'])->name('createdPlantationForm');
Route::put('/UpdatePalntationForm/{slug}', [Ispo::class, 'updatePlantation'])->name('UpdatePlantationForm');
Route::get('/ispoForm', [Ispo::class, 'ispo'])->name('ispoForm');
Route::put('/ispo/{slug}', [Ispo::class, 'editIspo'])->name('editIspo');
Route::post('/createdIspo', [Ispo::class, 'createIspo'])->name('createIspo');
Route::get('/identityDetail/{slug}', [Ispo::class, 'identityDetail'])->name('identityDetail');
Route::get('/ispoDetail', [Ispo::class, 'detailIspo'])->name('ispoDetail');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/adminDashboard', [Ispo::class, 'adminDashboardPage'])->name('adminDashboardPage');
    Route::get('/plantationDetail/{slug}', [Ispo::class, 'plantationDetail'])->name('plantationDetail');
    Route::get('/ispoStandard/{slug}', [Ispo::class, 'ispoStandard'])->name('ispoStandard');
    Route::post('/validate/{slug}', [Ispo::class, 'validate'])->name('validate');
    Route::put('/editValidate/{slug}', [Ispo::class, 'editValidate'])->name('editValidate');
    Route::delete('/deleteIspo/{slug}', [Ispo::class, 'deleteIspo'])->name('deleteIspo');
});

Route::post('/loginAuth', [AuthController::class, 'authenticate'])->name('login');
Route::post('/registerAuth', [AuthController::class, 'registered'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
