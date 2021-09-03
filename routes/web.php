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

Route::get('student/{student}/show_delete_form',[StudentController::class,'showDeleteForm'])->name('student.show_delete_form');
Route::get('student/{student}/delete',[StudentController::class,'delete'])->name('student.delete');
Route::get('student/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::post('student/{student}/update',[StudentController::class,'update'])->name('student.update');
Route::get('student/index',[StudentController::class,'index'])->name('student.index');
Route::post("student/store",[StudentController::class,'store'])->name('student.store');
Route::post("student/search",[StudentController::class,'search'])->name('student.search');
Route::get("student/numberlist",[StudentController::class,'numberlist'])->name('student.numberlist');
Route::get("student/info",[StudentController::class,'info'])->name('student.info');

Route::get('question/index',[QuestionController::class,'index'])->name('question.index');
Route::post('question/store',[QuestionController::class,'store'])->name('question.store');

Route::get('question/{question}/show',[QuestionController::class,'show'])->name('question.show');
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
Route::post('answer/delete/{question}',[StudentController::class,'answerDelete'])->name('answer.delete');
Route::post('deleteAllAnswer',[StudentController::class,'deleteAllAnswer'])->name('deleteAllAnswer');

//lot
Route::get('answer/lot',[StudentController::class,'lot'])->name('answer.lot');
Route::get('answer/numbers',[StudentController::class,'numbers'])->name('answer.numbers');

