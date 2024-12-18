<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Ispo;
use Illuminate\Support\Facades\Route;

Route::get('/', [Ispo::class, 'landingPage'])->name('landingPage');
Route::get('/login', [AuthController::class, 'login'])->name('loginPage');
Route::get('/dashboard', [Ispo::class, 'dashboard'])->name('dashboardPage');
Route::get('/adminDashboard', [Ispo::class, 'adminDashboardPage'])->name('adminDashboardPage');
Route::get('/identityForm', [Ispo::class, 'identity'])->name('identityForm');
Route::put('/identity/{slug}', [Ispo::class, 'submittedIdentity'])->name('submittedIdentity');
Route::get('/plantationForm', [Ispo::class, 'plantation'])->name('plantationForm');
Route::post('/createdPalntationForm', [Ispo::class, 'createdPlantation'])->name('createdPlantationForm');
Route::put('/UpdatePalntationForm/{slug}', [Ispo::class, 'updatePlantation'])->name('UpdatePlantationForm');
Route::get('/ispoForm', [Ispo::class, 'ispo'])->name('ispoForm');
Route::post('/createdIspo', [Ispo::class, 'createIspo'])->name('createIspo');
Route::get('/identityDetail/{slug}', [Ispo::class, 'identityDetail'])->name('identityDetail');
Route::get('/plantationDetail/{slug}', [Ispo::class, 'plantationDetail'])->name('plantationDetail');
Route::get('/ispoDetail', [Ispo::class, 'detailIspo'])->name('ispoDetail');
Route::delete('/deleteIspo/{slug}', [Ispo::class, 'deleteIspo'])->name('deleteIspo');
Route::post('/loginAuth', [AuthController::class, 'authenticate'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

