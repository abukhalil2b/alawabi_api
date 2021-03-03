<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
class ApiStudentController extends Controller
{
    public function login(Request $request)
    {

        $student= Student::wherePhone($request->phone)->first();
        if(!$student){
             return response(['student'=>null], 201);
         }elseif ($request->password!=$student->password) {
            return response(['student'=>null], 201);
        }
    
        $token = $student->createToken('student')->plainTextToken;

        $lastActiveQuestion = Question::whereActive(1)->first();
        if($lastActiveQuestion){
            $answer = Answer::where(['question_id'=>$lastActiveQuestion->id,'phone'=>$student->phone])->first();
            if($answer){
                $lastActiveQuestion=null;
            }
        }
           
        $response = [
            'lastActiveQuestion'=>$lastActiveQuestion,
            'student' => $student,
            'token' => $token
        ];
    
        return response($response, 201);
        // return response($response, 201,JSON_FORCE_OBJECT);
    }
    public function getQuestion()
    {

        $student = auth()->user();
        if(!$student){
            return response(['student'=>null], 200);
        }
       
        $lastActiveQuestion = Question::whereActive(1)->first();
        if($lastActiveQuestion){
            $answer = Answer::where(['question_id'=>$lastActiveQuestion->id,'phone'=>$student->phone])->first();
            if($answer){
                $lastActiveQuestion=null;
            }
        }
           
        $response = [
            'lastActiveQuestion'=>$lastActiveQuestion,
            'student' => $student
        ];
    
        return response($response, 201);
        // return response($response, 201,JSON_FORCE_OBJECT);
    }

    public function logout(Request $request)
    {
        $success = auth()->user()->tokens()->delete();
        return response(['success'=> $success], 200);
    }

    public function sendanswer(Request $request)
    {
        $student = auth()->user();
        $this->validate($request,['answer'=>'required']);
        $question = Question::whereActive(1)->first();
        $correct = $question->answer===$request->answer?1:0;
        $alreadyAnswer = Answer::where(['question_id'=>$question->id,'phone'=>$student->phone])->first();
        if($alreadyAnswer){
            return response(['message'=> 'تم الإجابة سابقاً'], 200);
        }
        $answer = Answer::create(['phone'=>$student->phone,'question_id'=>$question->id,'answer'=>$request->answer,'correct'=>$correct]);
        if($answer)
        return response(['message'=> 'شكرا، تم استلام الإجابة'], 200);
        else
        return response(['message'=> 'حدثت مشكلة'], 500);
    }


}
