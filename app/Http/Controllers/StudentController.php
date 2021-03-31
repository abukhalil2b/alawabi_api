<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    public function store(Request $request)
    {
        $this->validate($request,['phone'=>'required|unique:students']);
        $request['password']= $request->phone;
        Student::create($request->all());
        return redirect(route('student.index'))->with(['status'=>'success','message'=>'تم']);
    }

 
    public function answerIndex(Question $question)
    {
        $answers = Answer::where('question_id',$question->id)->get();
        return view('answer.index',compact('answers','question'));
    }
 
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

 
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect(route('student.index'))->with(['status'=>'success','message'=>'تم']);
    }

 
    public function lot()
    {
        $answers = Answer::where('correct',1)->get();
        return view('lot.answer',compact('answers'));
    }

    public function shuffle()
    {
        $answers = Answer::where('correct',1)->limit(10)->get()->shuffle();
        return view('lot.shuffle',compact('answers'));
    }

    public function deleteAllAnswer(Request $request)
    {
        if($request->passcode==='123'){
            Answer::truncate();
        }
        
        return redirect()->back();
    }
}
