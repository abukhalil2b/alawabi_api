<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Questiongroup;
use App\Models\State;
use App\Models\Question;
use App\Http\Resources\AnswerResource;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\StudentResource;

class ApiStudentController extends Controller
{
    private function getStudentData($student){
        $status='';
        $yourAnswers=[];
        $studentInfoNeedUpdate=false;
        $questiongroup = Questiongroup::whereActive(1)->first();
       $lastActiveQuestions =[];
       $options=[];
        if($questiongroup){
            $status='newQuestion';
            $lastActiveQuestions = $questiongroup->questions()->get();
            $alreadyAnswered = Answer::where(['questiongroup_id'=>$questiongroup->id,'phone'=>$student->phone])->first();
            if($alreadyAnswered){
                $status='alreadyAnswered';
                $yourAnswers = json_decode($alreadyAnswered->answers);
                
                if($questiongroup->questiontype=='multichoice'){
                    foreach($questiongroup->questions()->get() as $key => $question){
                        array_push($options, $question[$yourAnswers[$key]]);
                    }
                }else{
                    $options=$yourAnswers;
                }
                
            }
        }else{
            $status='noQuestion';
        }
        
        if($student->state_id==NULL || $student->name==NULL){
            $studentInfoNeedUpdate=true;
        }

        return [
            'studentInfoNeedUpdate'=>$studentInfoNeedUpdate,
            'questiongroup'=>$questiongroup,
            'status'=>$status,
            'lastActiveQuestions'=>QuestionResource::collection($lastActiveQuestions),
            'yourAnswers'=>$options,
            'student'=> new StudentResource($student),
        ];
    }

    public function login(Request $request)
    {
        $response = [
            'token' => null,
            'message'=>'بيانات الدخول خطأ'
        ];

        $student= Student::wherePhone($request->phone)->first();

        if(!$student){
             return response($response, 401);
         }elseif($request->password!=$student->password) {
            return response($response, 401);
        }
    
        $token = $student->createToken('student')->plainTextToken;

        //

        $response = $this->getStudentData($student);
        $response['token'] = $token;
        //
        return response($response, 200);
    }

    //LOGOUT
    public function logout(Request $request)
    {
        $success = auth()->user()->tokens()->delete();
        return response(['success'=> $success], 200);
    }

    //GET LAST QUESTION
    public function getQuestion()
    {
        //status =>  noQuestion - answered - newQuestion 
        $student = auth()->user();
        $response = $this->getStudentData($student);
        return response($response, 200);
        // return response($response, 200,JSON_FORCE_OBJECT);
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
        $student = new StudentResource($student);
        $response = $this->getStudentData($student);
        $response['message']='تم تحديث البيانات';
        return response($response, 200);
    }

    public function sendanswer(Request $request)
    {
        
        $student = auth()->user();
        $this->validate($request,['answers'=>'required']);
        $questiongroup = Questiongroup::whereActive(1)->first();
        $answers = $questiongroup->questions()->get();
        
        $correct = 1;

        $recievedAnswers = json_decode($request->answers);
        foreach ($recievedAnswers as $key => $recievedAnswer) {
            if($recievedAnswer != $answers[$key]['answer']){
                $correct = 0;
            }
        } 
       
       
        $alreadyAnswered = Answer::where(['questiongroup_id'=>$questiongroup->id,'phone'=>$student->phone])->first();

        if($alreadyAnswered){
            return response(['message'=> 'تم الإجابة سابقاً'], 200);
        }
        // return json_encode($recievedAnswers);
        $answer = Answer::create([
            'phone'=>$student->phone,
            'questiongroup_id'=>$questiongroup->id,
            'answers'=>json_encode($recievedAnswers),
            'correct'=>$correct
        ]);
        if($answer)
        return response(['message'=> 'شكرا، تم استلام الإجابة','status'=>'thankYou'], 200);
        else
        return response(['message'=> 'حدثت مشكلة'], 500);
    }

    public function getStudentInfo()
    {
        $student = new StudentResource(auth()->user());
        return response($student ,200);

    }

    public function states(){
        return State::all();
    }

    public function getAppVersion(){
        return response(1 ,200);
    }


}
