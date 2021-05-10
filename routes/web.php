<?php

use App\Http\Controllers\EventController;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/verify', function () {
    return new VerificationMail();
});
Route::get('event/{event}', [EventController::class, 'show'])->name('event.show');
Route::match(['get', 'head'], 'event/{event}/register', [EventController::class, 'register_edit'])->name('event.register_edit');
Route::match(['put', 'patch'], 'event/{event}/register', [EventController::class, 'register_update'])->name('event.register_update');
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Route::resource('event', EventController::class);
    Route::get('event', [EventController::class, 'index'])->name('event.index');
});


require __DIR__ . '/auth.php';
