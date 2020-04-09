<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $guarded = ['id_region'];


    public function region()
    {
        return $this->belongsTo(Region::class,'id_region','id');
    }
}
