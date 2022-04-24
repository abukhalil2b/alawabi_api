<?php

namespace App\Http\Controllers;

use App\Models\Whatsapp;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{

    public function index()
    {
        $whatsapp = Whatsapp::whereActive('1')->first();
        $whatsapps = Whatsapp::whereActive('0')->get();
        return view('whatsapp.index',compact('whatsapps','whatsapp'));
    }

  
    public function activate(Whatsapp $whatsapp)
    {
        Whatsapp::whereActive('1')
        ->update(['active'=>0]);
        $whatsapp->update(['active'=>1]);
        
        session()->flash('flash.banner', 'تم');
        session()->flash('flash.bannerStyle', 'success');
        return back();
    }


    public function store(Request $request)
    {session()->flash('flash.banner', 'تم');
        session()->flash('flash.bannerStyle', 'success');

        $this->validate($request,['text'=>'required']);
        Whatsapp::create(['text'=>$request->text]);

        session()->flash('flash.banner', 'تم');
        session()->flash('flash.bannerStyle', 'success');
        return back();
    }


  
    public function destroy(Whatsapp $whatsapp)
    {
        $whatsapp->delete();
        session()->flash('flash.banner', 'تم');
        session()->flash('flash.bannerStyle', 'success');
        return back();
    }
}
