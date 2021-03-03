<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $questions = Question::orderby('id','desc')->get();
        return view('question.index',compact('questions'));
    }

    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {
        Question::create($request->all());
        return redirect(route('question.index'))->with(['status'=>'success','message'=>'تم']);
    }

    public function delete(Question $question)
    {
        $question->delete();
        return redirect(route('question.index'))->with(['status'=>'success','message'=>'تم']);
    }

    public function toggle(Question $question)
    {
        $question->update(['active'=>!$question->active]);
        return redirect(route('question.index'))->with(['status'=>'success','message'=>'تم']);
    }


}
