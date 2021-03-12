<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[TaskController::class, 'index'])->name('dashboard');

    Route::post('/dashboard', [TaskController::class, 'create']);
    Route::get('/dashboard/{task}', [TaskController::class, 'edit']);
    Route::post('/dashboard/{task}', [TaskController::class, 'delete']);


});


