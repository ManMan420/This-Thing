<?php

use App\Http\Controllers\RiasecQuestionController;
use App\Http\Controllers\RiasecController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function(){return view('dashboard');})->name('dashboard');
Route::get('/client/home', function(){return view('client.home');})->name('user.home');


Route::get('/client/quiz', [RiasecQuestionController::class, "index"])->name('quiz.start');
Route::post('/client/result', [RiasecQuestionController::class, "result"])->name('quiz.result');

Route::get('/riasecCRUD/index', [RiasecController::class, "index"])->name('riasec.index');

