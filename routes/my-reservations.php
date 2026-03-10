<?php

use App\Http\Controllers\MyReservationController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware([])->group(function () {

    Route::get('my-reservations', [MyReservationController::class, 'index'])->name('my-reservations.index');

});
