<?php

use Illuminate\Support\Facades\Route;
use Modules\Psb\Http\Controllers\PsbController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('psbs', PsbController::class)->names('psb');
});
