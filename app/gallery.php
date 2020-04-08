<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $fillable = ['id_parc', 'title', 'type'];

    public function parc()
    {
      return $this->belongsTo(Parc::class);
    }
    public function photos()
    {
      return $this->belongsTo(Photos::class);
    }
}
