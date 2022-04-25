<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Answer;
use App\Models\Questiongroup;
use App\Models\Question;
use App\Models\State;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use DB;
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

    public function studentIndex($withInfo)
    {

        if($withInfo==1){
            $students = Student::whereNotNull('state_id')->get();
        }else if($withInfo==0){
            $students = Student::whereNull('state_id')->get();
        }
        $whatsapp = Whatsapp::whereActive(1)->first();
        return view('student.student_index',compact('students','whatsapp'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,['phone'=>'required|unique:students']);
        $request['password']= $request->phone;
        Student::create($request->all());
        return redirect(route('student.index'))->with(['status'=>'success','message'=>'تم']);
    }

    public function search(Request $request)
    {
        $students = Student::where('phone', 'like', '%' . $request->phone . '%')->get();
        return view('student.search_result',compact('students'));
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
        $numbers = Answer::groupBy('phone')->pluck('phone');
        return view('answer.numbers',compact('numbers'));
    }

    public function correctNumbers()
    {
        $numbers = Answer::where('correct',1)->pluck('phone');
        return view('answer.numbers',compact('numbers'));
    }

    public function deleteAllAnswer(Request $request)
    {
        if($request->passcode==='123'){
            Answer::truncate();
        }
        
        return redirect()->back();
    }

    
    

   public function byState()
    {
        
        $states = State::selectRaw('name')
        ->withCount('students')
        ->orderBy('students_count','desc')
        ->get();
        $totalStudent = Student::whereNull('state_id')->count();
        return view('student.by_state',compact('states','totalStudent'));
    }


    
}
