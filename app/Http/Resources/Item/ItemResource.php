<?php

namespace App\Http\Resources\Item;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            'id'=> $this->id,
            'name'=> $this->name,
            'unit'=> $this->unit,
            'description'=> $this->description,
            'image'=> $this->image,
            'buffer_stock'=> $this->buffer_stock,
            'stock'=> $this->stock,



        ];
    }
}
