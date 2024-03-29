<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SponserController;
use App\Http\Controllers\WinnerController;
use App\Http\Controllers\QuestiongroupController;
use App\Http\Controllers\WhatsappController;
use App\Http\Controllers\OpenEventController;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//student
Route::get('student/{student}/show_delete_form',[StudentController::class,'showDeleteForm'])
->name('student.show_delete_form');

Route::get('student/{student}/delete',[StudentController::class,'delete'])->name('student.delete');

Route::get('student/{student}/edit',[StudentController::class,'edit'])->name('student.edit');

Route::post('student/{student}/update',[StudentController::class,'update'])->name('student.update');

Route::get('student/index',[StudentController::class,'index'])->name('student.index');

Route::post("student/store",[StudentController::class,'store'])->name('student.store');

Route::post("student/search",[StudentController::class,'search'])->name('student.search');


Route::get("student/search_winner",[StudentController::class,'searchWinner'])->name('student.search_winner');

Route::get("student/student_index/{withInfo}",[StudentController::class,'studentIndex'])->name('student.student_index');

Route::get("student/by_state",[StudentController::class,'byState'])->name('student.by_state');

//question
Route::get('question/index',[QuestionController::class,'index'])
->name('question.index');

Route::get('questiongroup/{questiongroup}/index',[QuestionController::class,'questiongroupIndex'])
->name('questiongroup.question.index');

Route::post('question/store',[QuestionController::class,'store'])
->name('question.store');


Route::get('question/{question}/show',[QuestionController::class,'show'])
->name('question.show');

Route::get('question/{question}/delete',[QuestionController::class,'delete'])
->name('question.delete');

Route::get('question/edit/{question}',[QuestionController::class,'edit'])
->name('question.edit');

Route::post('question/update/{question}',[QuestionController::class,'update'])
->name('question.update');
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

//answer
Route::get('answer/dashboard',[StudentController::class,'dashboard'])->name('answer.dashboard');
Route::get('answer/correct_numbers',[StudentController::class,'correctNumbers'])->name('answer.correct_numbers');
Route::get('answer/all_numbers',[StudentController::class,'allNumbers'])->name('answer.all_numbers');


//questiongroup
Route::post('questiongroup/update/{questiongroup}',[QuestiongroupController::class,'update'])
->name('questiongroup.update');

Route::get('questiongroup/edit/{questiongroup}',[QuestiongroupController::class,'edit'])
->name('questiongroup.edit');

Route::get('questiongroup/destroy/{questiongroup}',[QuestiongroupController::class,'destroy'])
->name('questiongroup.destroy');

Route::get('questiongroup/create',[QuestiongroupController::class,'create'])
->name('questiongroup.create');

Route::post('questiongroup/store',[QuestiongroupController::class,'store'])
->name('questiongroup.store');

Route::get('questiongroup/{questiongroup}/toggle',[QuestiongroupController::class,'toggle'])
->name('questiongroup.toggle');


//whatsapp
Route::get('whatsapp/index',[WhatsappController::class,'index'])->name('whatsapp.index');
Route::post('whatsapp/store',[WhatsappController::class,'store'])->name('whatsapp.store');
Route::get('whatsapp/destroy/{whatsapp}',[WhatsappController::class,'destroy'])->name('whatsapp.destroy');
Route::get('whatsapp/activate/{whatsapp}',[WhatsappController::class,'activate'])->name('whatsapp.activate');

//SELECT state_id,COUNT(id) as total FROM `students` GROUP BY state_id;
