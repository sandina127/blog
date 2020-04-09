<?php

namespace App;

use App\Parc;
use App\photos;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $fillable = ['parc_id', 'title', 'type'];

    public function parc()
    {
      return $this->belongsTo(Parc::class);
    }
    public function photos()
    {
      return $this->hasMany(photos::class);
    }
}
