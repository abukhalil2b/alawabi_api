<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
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


