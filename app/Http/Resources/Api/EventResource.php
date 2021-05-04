<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'name' => $this->name,
            'custom_link' => $this->custom_link,
            'description' => $this->description,
            'logo' => $this->logo,
            'banner' => $this->banner,
            'template' => $this->template,
            'email' => $this->email,
            'instagram' => $this->instagram,
            'whatsapp' => $this->whatsapp,
            'date' => $this->date,
            'title_color' => $this->title_color,
            'desc_color' => $this->desc_color,
            'date_color' => $this->date_color,
            'button_color' => $this->button_color,
        ];
    }
}
