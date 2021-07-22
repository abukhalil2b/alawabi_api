<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name'=>$this->name?$this->name:'',
            'stateId'=>$this->state_id?$this->state_id:0,
            'stateName'=>$this->state?$this->state->name:'',
            'phone'=>$this->phone
        ];
    }
}
