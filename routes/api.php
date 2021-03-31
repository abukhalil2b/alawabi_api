<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiStudentController;
use App\Http\Controllers\ApiSponsorController;
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
	Route::post("sendanswer",[ApiStudentController::class,'sendanswer']);
	Route::post("getquestion",[ApiStudentController::class,'getQuestion']);
	Route::post("logout",[ApiStudentController::class,'logout']);
	Route::post("updatepassword",[ApiStudentController::class,'updatePassword']);
	Route::post("updatename",[ApiStudentController::class,'updateName']);
});

Route::post("student/login",[ApiStudentController::class,'login']);

Route::get("sponsors",[ApiSponsorController::class,'sponsor']);
