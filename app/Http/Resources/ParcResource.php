<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParcResource extends JsonResource
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
            'id' => $this->id,
            'equipements1' => $this->equipements1,
            'equipements2' => $this->equipements2,
            'prix' => $this->prix,
            'gallery' => $this->gallery,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at
         
          ];
    }
}
