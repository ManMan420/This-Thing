<?php

use App\Http\Controllers\RiasecQuestionController;
use App\Http\Controllers\RiasecController;
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
    return view('welcome');
});

Route::get('/dashboard', function(){return view('dashboard');})->name('dashboard');

Route::get('/riasecCRUD/index', [RiasecController::class, "index"])->name('riasec.index');
Route::get('/riasecCRUD/create', [RiasecQuestionController::class, "create"])->name('riasec.create');
