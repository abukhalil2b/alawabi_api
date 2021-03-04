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

  // https://www.youtube.com/watch?v=8Uwn5M6WTe0
    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    public function store(Request $request)
    {
        $this->validate($request,['phone'=>'required|unique:students']);
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

 
    public function destroy(Student $student)
    {
        //
    }
}
