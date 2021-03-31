<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    public function create()
    {
        $winners = Winner::all();
        return view('winner.create',compact('winners'));
    }

  
    public function store(Request $request)
    {
        Winner::create(['name'=>$request->name,'phone'=>$request->phone]);
        return redirect()->back();
    }

 
    public function delete(Winner $winner)
    {
        $winner->delete();
         return redirect()->back();
    }
}
