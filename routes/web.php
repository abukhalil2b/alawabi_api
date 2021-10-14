<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SponserController;
use App\Http\Controllers\WinnerController;
use App\Http\Controllers\QuestiongroupController;




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

//questopm
Route::get('question/{questiongroup}/index',[QuestionController::class,'index'])->name('question.index');
Route::post('question/store',[QuestionController::class,'store'])->name('question.store');

Route::get('question/{question}/show',[QuestionController::class,'show'])->name('question.show');
Route::get('question/{question}/delete',[QuestionController::class,'delete'])->name('question.delete');

//sponser
Route::get('sponser/index',[SponserController::class,'index'])->name('sponser.index');
Route::post("sponser/store",[SponserController::class,'store'])->name('sponser.store');
Route::get('sponser/{sponser}/edit',[SponserController::class,'edit'])->name('sponser.edit');
Route::post("sponser/{sponser}/update",[SponserController::class,'update'])->name('sponser.update');
Route::get('sponser/{sponser}/toggle',[SponserController::class,'toggle'])->name('sponser.toggle');

//answer
Route::get('answer/index/{questiongroup}',[StudentController::class,'answerIndex'])->name('answer.index');
Route::post('answer/delete/{questiongroup}',[StudentController::class,'answerDelete'])->name('answer.delete');
Route::post('deleteAllAnswer',[StudentController::class,'deleteAllAnswer'])->name('deleteAllAnswer');

//lot
Route::get('answer/lot',[StudentController::class,'lot'])->name('answer.lot');
Route::get('answer/numbers',[StudentController::class,'numbers'])->name('answer.numbers');


//questiongroup
Route::get('questiongroup/create',[QuestiongroupController::class,'create'])->name('questiongroup.create');
Route::post('questiongroup/store',[QuestiongroupController::class,'store'])->name('questiongroup.store');
Route::get('questiongroup/{questiongroup}/toggle',[QuestiongroupController::class,'toggle'])->name('questiongroup.toggle');


