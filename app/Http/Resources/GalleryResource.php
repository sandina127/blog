<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
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
            'title' => $this->title,
            'type' => $this->type,
            'id_parc' => $this->id_parc,
            'visuels' => $this->visuels,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at
         
          ];
    }
}
