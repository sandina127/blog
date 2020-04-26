<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TypeResource;
use App\Type;
use App\Parc;
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
        $typs=Parc::pluck('types');
        $types=explode("|",$typs);
      

        $skips = ["[","]","\""];
        $type= str_replace($skips, '',$types);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'version' => $this->version,
            'prix' => $this->prix,
            'types' => $this->types,
            'catgories'=> TypeResource::collection(Type::where('type',$this->types)->get()),
          ];
    }
}
