<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiStudentController;
use App\Http\Controllers\ApiSponsorController;
use App\Http\Controllers\ApiUserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware'=>'auth:sanctum'],function(){
	Route::get("get_student_info",[ApiStudentController::class,'getStudentInfo']);
	Route::post("sendanswer",[ApiStudentController::class,'sendanswer']);
	Route::get("get_question",[ApiStudentController::class,'getQuestion']);
	Route::get("logout",[ApiStudentController::class,'logout']);
	Route::post("update_student_info",[ApiStudentController::class,'updateStudentInfo']);
	Route::post("update_student_password",[ApiStudentController::class,'updateStudentPassword']);
});


Route::post("student/login",[ApiStudentController::class,'login']);

Route::get("sponsors",[ApiSponsorController::class,'sponsor']);
Route::get("get_app_version",[ApiStudentController::class,'getAppVersion']);
Route::get("states",[ApiStudentController::class,'states']);
