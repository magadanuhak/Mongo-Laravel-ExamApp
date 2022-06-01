<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
Route::get('/tasks/{task}', [TaskController::class,'edit'])->name('task.edit');
Route::post('/tasks', [TaskController::class,'create'])->name('task.create');
Route::patch('/tasks/{task}', [TaskController::class,'update'])->name('task.update');
Route::delete('/tasks/{task}', [TaskController::class,'delete'])->name('task.delete');
