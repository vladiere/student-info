<?php

use App\Http\Controllers\StudentController;
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
Route::get('/search', [StudentController::class, 'search']);

Route::get('/', [StudentController::class, 'index']);

Route::get('/students/{id}/edit', [StudentController::class, 'editstudent'])->name('editstudent');

Route::put('/students/{id}', [StudentController::class, 'update']);

Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('deleteStudent');

Route::post('/students', [StudentController::class, 'store']);