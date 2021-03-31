<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponser;
class ApiSponsorController extends Controller
{
    public function sponsor()
    {

        
        $sponsors = Sponser::whereActive(1)->orderby('id','ASC')->get();
        
           
        $response = [
            'sponsors'=>$sponsors,
        ];
    
        return response($response, 201);
        // return response($response, 201,JSON_FORCE_OBJECT);
    }
}
