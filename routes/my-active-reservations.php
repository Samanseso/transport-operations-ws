<?php

use App\Http\Controllers\MyActiveReservationsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware([])->group(function () {

    Route::get('my-active-reservations', [MyActiveReservationsController::class, 'index'])->name('my-active-reservations.index');    
});
