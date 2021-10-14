<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Answer;
class QuestionResource extends JsonResource
{

    
    public function toArray($request)
    {

        return [
            'content'=> $this->content,
			'id'=> $this->id,
			'op1'=> $this->op1,
			'op2'=>$this->op2,
			'op3'=> $this->op3
        ];
    }
}


