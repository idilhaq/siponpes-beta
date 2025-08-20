<?php

use Illuminate\Support\Facades\Route;
use Modules\Psb\Http\Controllers\PsbController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('psbs', PsbController::class)->names('psb');
});
