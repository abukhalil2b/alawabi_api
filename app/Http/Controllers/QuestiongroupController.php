<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Questiongroup;
use Illuminate\Http\Request;

class QuestiongroupController extends Controller
{
    
    
    function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {

        $questiongroups = Questiongroup::all();
        return view('questiongroup.create',compact('questiongroups'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request,['title'=>'required']);
        Questiongroup::create(['title'=>$request->title,'questiontype'=>$request->questiontype]);
        return redirect()->back()->with(['status'=>'success','message'=>'تم']);
    }


    
    public function edit(Questiongroup $questiongroup)
    {
        return view('questiongroup.edit',compact('questiongroup'));
    }

   
    public function update(Request $request, Questiongroup $questiongroup)
    {
        $questiongroup->update($request->all());
        return redirect()
        ->route('questiongroup.create')
        ->with(['status'=>'success','message'=>'تم']);
    }

    
    public function destroy(Questiongroup $questiongroup)
    {
        $questiongroup->delete();
        Question::where('questiongroup_id',$questiongroup->id)->delete();
        return back()
        ->with(['status'=>'success','message'=>'تم']);
    }


    public function toggle(Questiongroup $questiongroup)
    {
        $questiongroup->update(['active'=>!$questiongroup->active]);
        return redirect(route('questiongroup.create'))->with(['status'=>'success','message'=>'تم']);
    }
}
