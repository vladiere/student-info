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
    return view('students');
});
Route::get('/search', [StudentController::class, 'search']);

Route::get('/', [StudentController::class, 'index']);

Route::get('/students/edit/{id}', [StudentController::class, 'editstudent'])->name('editstudent');

Route::put('/students/{id}', [StudentController::class, 'update']);

Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('deleteStudent');

Route::get('/students', function () {
    return view('add');
});

Route::post('/students', [StudentController::class, 'store']);