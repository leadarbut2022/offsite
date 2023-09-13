<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class hagzResorse extends JsonResource
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
              
            // 'id' => $this->id,
            // 'name' => $this->name,  
            // 'email' => $this->email,
            // 'phone' => $this->phone,
            // 'password' => $this->password,
            // 'stat' => $this->stat,
            // 'city' => $this->city,


            "id" => $this->id,  
            "id_user" => $this->id_user,
            "id_p" => $this->id_p,
            "from" => $this->from,
            "to" => $this->to,
            "prise" => $this->prise,
            "remember_token" => $this->remember_token,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "maney_h" => $this->maney_h,
            "phone_user" => $this->phone_user,
            "stat_" => $this->stat_,
            "name_std" => $this->name_std,
            "name_plyer" => $this->name_plyer,
            "date_" => $this->date_,
            "day"=> $this->day,
            "month" => $this->month,
            "year_" => $this->year_,
            "to_date" => $this->to_date,
            "to_month" => $this->to_month,
            "to_year" => $this->to_year,
          
        ];
    }
}























