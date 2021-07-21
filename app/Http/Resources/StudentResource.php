<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'stateId'=>$this->state_id,
            'stateName'=>$this->state->name,
            'phone'=>$this->phone
        ];
    }
}
