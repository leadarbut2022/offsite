<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class stdResorse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
              
            'id_' => $this->id_,
            'name' => $this->name,  
            'address' => $this->address,
            'phone' => $this->phone,
            'from_' => $this->from_,
            'to_' => $this->to_,
            'prise' => $this->prise,
            'std_inf' => $this->std_inf,
            'id_user' => $this->id_user,
            'img' => $this->img,
            'type' => $this->type,


          
        ];
    }
}
