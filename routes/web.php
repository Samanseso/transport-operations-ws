
<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');



Route::middleware([])->group(function () {

    Route::get('dashboard', function (Request $request) {
        $user = $request->user();

        if (! $user) {
            return Inertia::render('admin/dashboard');
        }

        $role = $user->role;

        if ($role === 'ADMINISTRATOR') {
            return Inertia::render('admin/dashboard');
        } elseif ($role === 'DRIVER') {
            
            return Inertia::render('driver/dashboard');
        } elseif ($role == 'CUSTOMER') {
            return Inertia::render('customer/dashboard');
        }
        else {
            abort(403, 'Unauthorized');
        }
    })->name('dashboard');
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/user.php';
require __DIR__.'/reservations.php';
require __DIR__.'/active-dispatches.php';
require __DIR__.'/fleet.php';
require __DIR__.'/task.php';

require __DIR__.'/my-reservations.php';
require __DIR__.'/my-active-reservations.php';
