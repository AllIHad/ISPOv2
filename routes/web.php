<?php

use App\Http\Controllers\Ispo;
use Illuminate\Support\Facades\Route;

Route::get('/', [Ispo::class, 'landingPage'])->name('landingPage');
