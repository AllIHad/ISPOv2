<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Ispo;
use Illuminate\Support\Facades\Route;

Route::get('/', [Ispo::class, 'landingPage'])->name('landingPage');
Route::get('/login', [AuthController::class, 'login'])->name('loginPage');
Route::get('/dashboard', [Ispo::class, 'dashboard'])->name('dashboardPage');
Route::get('/identityForm', [Ispo::class, 'identity'])->name('identityForm');
Route::put('/identity/{slug}', [Ispo::class, 'submittedIdentity'])->name('submittedIdentity');
Route::get('/plantationForm', [Ispo::class, 'plantation'])->name('plantationForm');
Route::post('/createdPalntationForm', [Ispo::class, 'createdPlantation'])->name('createdPlantationForm');
Route::put('/UpdatePalntationForm/{slug}', [Ispo::class, 'updatePlantation'])->name('UpdatePlantationForm');
Route::get('/ispoForm', [Ispo::class, 'ispo'])->name('ispoForm');
Route::post('/createdIspo', [Ispo::class, 'createIspo'])->name('createIspo');
Route::get('/ispoDetail', [Ispo::class, 'detailIspo'])->name('ispoDetail');
Route::post('/loginAuth', [AuthController::class, 'authenticate'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

