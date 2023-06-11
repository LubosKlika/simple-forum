<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\UsersList;
use App\Http\Livewire\CreateUser;
use App\Http\Livewire\CreateQuestion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class,'showMain']);





Route::middleware(['auth'])->group(function () {
    Route::get('/create-question', CreateQuestion::class);
    Route::post('/logout', [MainController::class, 'logout']);
    Route::get('/users', UsersList::class);
});

Route::get('/create-user', CreateUser::class);
Route::get('/question/{questions}', [MainController::class, 'showQuestion'])->name('questions');


Route::get('/users/{user}', [MainController::class, 'showUser'])->name('user');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class);
});

