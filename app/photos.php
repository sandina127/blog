<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    protected $fillable = ['gallery_id', 'picture'];

    public function visuels()
    {
      return $this->hasMany(Gallery::class);
    }
}
