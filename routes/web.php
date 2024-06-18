<?php

use App\Http\Controllers\StreetAddressController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StreetAddressController::class, 'create']);
Route::post('/', [StreetAddressController::class, 'validate'])->name('validate.address');
