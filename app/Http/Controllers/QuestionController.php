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
        $questions = Question::where('questiongroup_id',$questiongroup->id)->orderby('id','desc')->get();
        return view('questiongroup.question.index',compact('questions','questiongroup'));
    }

    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {

        Question::create($request->all());
        return redirect()->back()->with(['status'=>'success','message'=>'تم']);
    }

    public function show(Question $question)
    {
        return view('question.show',compact('question'));
    }

    public function delete(Question $question)
    {
        $question->delete();
        return redirect(route('question.index'))->with(['status'=>'success','message'=>'تم']);
    }

    


}
