<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\QuestionController;
use App\Mail\VerificationMail;
use App\Models\Answer;
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
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('event', [EventController::class, 'index'])->name('event.index');
    Route::match(['get', 'head'], 'event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('event/store', [EventController::class, 'store'])->name('event.store');
    Route::get('itc-2021/eo/quiz', [QuestionController::class, 'index'])->name('itc.question');
    Route::post('itc-2021/answer', [QuestionController::class, 'fetch_answers'])->name('itc.fetchanswers');
    Route::post('itc-2021/pertanyaan', [QuestionController::class, 'post_question'])->name('itc.post_question');
});
Route::get('event/{event}', [EventController::class, 'show'])->name('event.show');
Route::delete('event/{event}', [EventController::class, 'destroy'])->name('event.destroy');
Route::match(['get', 'head'], 'event/{event}/register', [EventController::class, 'register_edit'])->name('event.register_edit');
Route::match(['put', 'patch'], 'event/{event}/register', [EventController::class, 'register_update'])->name('event.register_update');
Route::get('itc-2021/quiz', [AnswerController::class, 'index'])->name('itc.answer');
Route::post('itc-2021/question', [AnswerController::class, 'fetch_question'])->name('itc.fetchquestion');
Route::post('itc-2021/jawaban', [AnswerController::class, 'store'])->name('itc.post_answer');


require __DIR__ . '/auth.php';
