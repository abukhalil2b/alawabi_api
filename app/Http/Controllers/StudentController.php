<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Answer;
use App\Models\Questiongroup;
use App\Models\Question;
use App\Models\State;
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
        $states = State::all();
        return view('student.index',compact('students','states'));
    }

    public function store(Request $request)
    {
        $this->validate($request,['phone'=>'required|unique:students']);
        $request['password']= $request->phone;
        Student::create($request->all());
        return redirect(route('student.index'))->with(['status'=>'success','message'=>'تم']);
    }

    public function search(Request $request)
    {
        $states = State::all();
        $this->validate($request,['phone'=>'required']);
        $students = Student::where('phone', 'like', '%' . $request->phone . '%')->get();
        return view('student.index',compact('students','states'));
    }

 
    public function answerIndex(Questiongroup $questiongroup)
    {
        $answers = Answer::where('questiongroup_id',$questiongroup->id)->get();
        return view('answer.index',compact('answers','questiongroup'));
    }
 
    public function answerDelete(Request $request, Questiongroup $questiongroup)
    {
        if($request->passcode=='123'){
            Answer::where('questiongroup_id',$questiongroup->id)->delete();
            return redirect()->back()->with(['status'=>'success','message'=>'تم']);
        }
        return redirect()->back()->with(['status'=>'warning','message'=>'passcode is missing']);
        
    }

    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }


    public function showDeleteForm(Student $student)
    {
        return view('student.confirm_delete',compact('student'));
    }

    public function delete(Student $student)
    {
        $student->delete();
        return redirect()->back()->with(['status'=>'success','message'=>'تم']);
    }

 
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect(route('student.index'))->with(['status'=>'success','message'=>'تم']);
    }

 
    public function dashboard()
    {
        return view('answer.dashboard');
    }

    public function allNumbers()
    {
        $numbers = Answer::groupBy('phone')->select('phone')->get();
        return view('answer.numbers',compact('numbers'));
    }

    public function correctNumbers()
    {
        $numbers = Answer::where('correct',1)->get();
        return view('answer.numbers',compact('numbers'));
    }

    public function deleteAllAnswer(Request $request)
    {
        if($request->passcode==='123'){
            Answer::truncate();
        }
        
        return redirect()->back();
    }

    
    public function numberlist()
    {
        $numberlist = Student::all();
        return view('student.numberlist',compact('numberlist'));
    }

    public function info()
    {
        $students = Student::where('name','<>',null)->get();
        return view('student.info',compact('students'));
    }

    public function infoPhoneOnly()
    {
        $students = Student::where('name','<>',null)->get();
        return view('student.info_phone_only',compact('students'));
    }

    
}
