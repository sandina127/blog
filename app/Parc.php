<?php

namespace App;

use App\gallery;
use Illuminate\Database\Eloquent\Model;

class Parc extends Model
{
    protected $fillable = ['equipements1', 'equipements2', 'prix'];

    public function gallery()
    {
      return $this->hasMany(gallery::class);
    }
}
