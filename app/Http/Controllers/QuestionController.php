<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use App\Models\Questiongroup;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Questiongroup $questiongroup)
    {
        $questions = Question::orderby('id','desc')->get();
        return view('question.index',compact('questions'));
    }

    public function questiongroupIndex(Questiongroup $questiongroup)
    {
        $questions = Question::where('questiongroup_id',$questiongroup->id)->orderby('id','desc')->get();
        return view('questiongroup.question.index',compact('questions','questiongroup'));
    }

    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,['content'=>'required']);
// return $request->all();
        Question::create($request->all());
        return redirect()->back()->with(['status'=>'success','message'=>'تم']);
    }

    public function show(Question $question)
    {
        return view('questiongroup.question.show',compact('question'));
    }

    public function delete(Question $question)
    {
        $question->delete();
        return redirect(route('questiongroup.create'))->with(['status'=>'success','message'=>'تم']);
    }

    public function edit(Question $question)
    {
        $questiongroups = Questiongroup::all();
        return view('question.edit',compact('question','questiongroups'));
    }

    public function update(Request $request,Question $question)
    {
        // return $request->all();
        $this->validate($request,['content'=>'required','answer'=>'required','questiongroup_id'=>'required']);
        $question->update($request->all());
        return redirect()->back()->with(['status'=>'success','message'=>'تم']);
    }


}
