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

          return [
            'id' => $this->id,
            'name' => $this->name,
            'version' => $this->version,
            'prix' => $this->prix,
            'types' => $this->types,
            'catgories'=> TypeResource::collection(Type::get()
           ->whereIn("type",explode("|",$this->types))->groupBy("category")),
            
            /*->each(function($type,$key){
                 
                dd($type);
                /*
                $types=explode("|",$this->types);
                $skips = ["[","]","\""];
                $Tab_type= str_replace($skips, '',$types);
        
                foreach ($Tab_type as $tpe) {
                    dd($type->where("type",$tpe)->get());
                        return $type->where("type",$tpe)->get();
                    }
                
            }))*/
          ];
    }
}
