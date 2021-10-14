<?php

namespace App\Http\Controllers;

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
        Questiongroup::create(['title'=>$request->title,'questiontype'=>$request->questiontype]);
        return redirect()->back()->with(['status'=>'success','message'=>'تم']);
    }


    
    public function edit(Questiongroup $questiongroup)
    {
        //
    }

   
    public function update(Request $request, Questiongroup $questiongroup)
    {
        //
    }

    
    public function destroy(Questiongroup $questiongroup)
    {
        //
    }


    public function toggle(Questiongroup $questiongroup)
    {
        $questiongroup->update(['active'=>!$questiongroup->active]);
        return redirect(route('questiongroup.create'))->with(['status'=>'success','message'=>'تم']);
    }
}
