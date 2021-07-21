<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\State;
use App\Models\Question;
use App\Http\Resources\AnswerResource;
use App\Http\Resources\StudentResource;

class ApiStudentController extends Controller
{
    public function login(Request $request)
    {
        $response = [
            'token' => null,
            'message'=>'بيانات الدخول خطأ'
        ];

        $student= Student::wherePhone($request->phone)->first();

        if(!$student){
             return response($response, 201);
         }elseif ($request->password!=$student->password) {
            return response($response, 201);
        }
    
        $token = $student->createToken('student')->plainTextToken;

        $response = [
            'token' => $token
        ];
    
        return response($response, 201);
    }
    public function logout(Request $request)
    {
        $success = auth()->user()->tokens()->delete();
        return response(['success'=> $success], 201);
    }
    public function getQuestion()
    {
        //status =>  noQuestion - answered - newQuestion
        $status='';
        $yourAnswer=null;
        $student = auth()->user();
        $lastActiveQuestion = Question::whereActive(1)->first();
       
        if($lastActiveQuestion){
            $status='newQuestion';
            $answer = Answer::where(['question_id'=>$lastActiveQuestion->id,'phone'=>$student->phone])->first();
            if($answer){
                $yourAnswer = new AnswerResource($answer);
                $status='answered';
            }
        }else{
            $status='noQuestion';
        }
           
        $response = [
            'status'=>$status,
            'lastActiveQuestion'=>$lastActiveQuestion,
            'answer'=>$yourAnswer,
        ];
    
        return response($response, 201);
        // return response($response, 201,JSON_FORCE_OBJECT);
    }

    public function updateStudentPassword(Request $request)
    {
        $student = auth()->user();
        $student->password = $request->password;
        $student->save();
        return response(['message'=> 'تم تغير كلمة المرور'], 200);
    }

    public function updateStudentInfo(Request $request)
    {
        $student = auth()->user();
        if($request->name!=''){
            $student->name = $request->name;
        }
        if($request->stateId!=0){
            $student->state_id = $request->stateId;
        }
        
        $student->save();
        return response(['message'=> 'تم تحديث البيانات','student'=>$student], 200);
    }

    public function sendanswer(Request $request)
    {
        $student = auth()->user();
        $this->validate($request,['answer'=>'required']);
        $question = Question::whereActive(1)->first();
        $correct = $question->answer===$request->answer?1:0;
        $alreadyAnswer = Answer::where(['question_id'=>$question->id,'phone'=>$student->phone])->first();
        if($alreadyAnswer){
            return response(['message'=> 'تم الإجابة سابقاً'], 201);
        }
        $answer = Answer::create(['phone'=>$student->phone,'question_id'=>$question->id,'answer'=>$request->answer,'correct'=>$correct]);
        if($answer)
        return response(['message'=> 'شكرا، تم استلام الإجابة','status'=>'thankYou'], 201);
        else
        return response(['message'=> 'حدثت مشكلة'], 500);
    }

    public function getStudentInfo()
    {
        $student = new StudentResource(auth()->user());
        return response($student ,201);

    }

    public function states(){
        return State::all();
    }

}
