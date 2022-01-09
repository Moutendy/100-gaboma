<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mp3Controller;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/mp3',[Mp3Controller::class,'mp3'])->middleware(['auth'])->name('mp3');

require __DIR__.'/auth.php';
