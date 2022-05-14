<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarcodeController;


Route::get('/', [BarcodeController::class, 'index'])->name('generate.barcode');
