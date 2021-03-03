<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponser;
class SponserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $sponsers = Sponser::all();
        return view('sponser.index',compact('sponsers'));
    }

    public function store(Request $request)
    {
        Sponser::create($request->all());
        return redirect(route('sponser.index'))->with(['status'=>'success','message'=>'تم']);
    }


    public function edit(Sponser $sponser)
    {
        return view('sponser.edit',compact('sponser'));
    }

 
    public function update(Request $request, Sponser $sponser)
    {
        $sponser->update($request->all());
         return redirect(route('sponser.index'))->with(['status'=>'success','message'=>'تم']);
    }


}
