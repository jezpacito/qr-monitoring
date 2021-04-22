<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttendaceResource extends JsonResource
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
            'id' =>$this->id,
            'datetime_In' =>$this->datetime_In,
            'temperature' =>$this->temperature,
            'guest' =>$this->guest,
            'employee' =>$this->employee
        ];
    }
}
