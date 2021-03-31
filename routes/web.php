<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SponserController;
use App\Http\Controllers\WinnerController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('student/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::post('student/{student}/update',[StudentController::class,'update'])->name('student.update');
Route::get('student/index',[StudentController::class,'index'])->name('student.index');
Route::post("student/store",[StudentController::class,'store'])->name('student.store');

Route::get('question/index',[QuestionController::class,'index'])->name('question.index');
Route::post('question/store',[QuestionController::class,'store'])->name('question.store');

Route::get('question/{question}/delete',[QuestionController::class,'delete'])->name('question.delete');
Route::get('question/{question}/toggle',[QuestionController::class,'toggle'])->name('question.toggle');

//sponser
Route::get('sponser/index',[SponserController::class,'index'])->name('sponser.index');
Route::post("sponser/store",[SponserController::class,'store'])->name('sponser.store');
Route::get('sponser/{sponser}/edit',[SponserController::class,'edit'])->name('sponser.edit');
Route::post("sponser/{sponser}/update",[SponserController::class,'update'])->name('sponser.update');
Route::get('sponser/{sponser}/toggle',[SponserController::class,'toggle'])->name('sponser.toggle');

//answer
Route::get('answer/index/{question}',[StudentController::class,'answerIndex'])->name('answer.index');
Route::post('deleteAllAnswer',[StudentController::class,'deleteAllAnswer'])->name('deleteAllAnswer');

//lot
Route::get('answer/lot',[StudentController::class,'lot'])->name('answer.lot');
Route::get('answer/shuffle',[StudentController::class,'shuffle'])->name('answer.shuffle');

//winner
Route::get('winner/{winner}/delete',[WinnerController::class,'delete'])->name('winner.delete');
Route::get('winner/create',[WinnerController::class,'create'])->name('winner.create');
Route::post("winner/store",[WinnerController::class,'store'])->name('winner.store');
